<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-3">
            <h1>Edit book</h1>
            <div>
                <a href="index.php" class ="btn btn-danger">Back</a>
            </div>
        </header>
        <?php
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                include("connect.php") ;
                $sql="SELECT * FROM books WHERE id ='$id'";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
        ?>

            <form action="process.php" method ="POST">
                <div class ="form-element my-3">
                    <input type ="text" name="title"  value="<?php echo $row["title"];?>"  class="form-control">
                </div>
                <div class ="form-element my-3">
                    <input type ="text" name="author"  value="<?php echo $row["author"];?>"  class="form-control">
                </div>
                <div class ="form-element my-3">
                    <select name="type" class="form-control">
                        <option value="">Select Book Type</option>
                        <option value="Advanture"<?php if($row["type"]=="Advanture"){echo "selected";}?>>adventure</option>
                        <option value="Fantasy"<?php if($row["type"]=="Fantasy"){echo "selected";}?>>fantasy</option>
                        <option value="Scifi"<?php if($row["type"]=="Scifi"){echo "selected";}?>>scifi</option>
                    </select> 
                </div>
                <div class ="form-element my-3">
                    <input type ="text" name="description" value="<?php echo $row["description"];?>" class="form-control">
                </div>
                <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                <div class ="form-element">
                    <input type="submit" value="Submit" class="btn btn-success" name ="edit">
                </div>
            </form>
            <?php
            }
            ?>
    </div>

</body>
</html>