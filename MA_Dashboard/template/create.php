<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-3">
            <h1>Add new book</h1>
            <div>
                <a href="index.php" class ="btn btn-danger">Back</a>
            </div>
        </header>
        <form action="process.php" method ="POST">
            <div class ="form-element my-3">
                <input type ="text" name="title" placeholder="Title:" class="form-control">
            </div>
            <div class ="form-element my-3">
                <input type ="text" name="author" placeholder="Author Name:" class="form-control">
            </div>
            <div class ="form-element my-3">
                <select name="type" class="form-control">
                    <option value="">Select Book Type</option>
                    <option value="Advanture">adventure</option>
                    <option value="Fantasy">fantasy</option>
                    <option value="Scifi">scifi</option>
                </select>
            </div>
            <div class ="form-element my-3">
                <input type ="text" name="description" placeholder="Book Description:" class="form-control">
            </div>
            <div class ="form-element">
                <input type="submit" value="Submit" class="btn btn-success" name ="create">
            </div>
        </form>      

    </div>

</body>
</html>