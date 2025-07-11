<?php
require "../connect.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize an array to store the values
    $inputValues = array();

    // Iterate through the POST data to extract input values
    foreach ($_POST as $key => $value) {
        // Exclude the submit button from being inserted into the database
        if ($key != "save" && $key != "cancel") {
            // Store the input value in the array
            $inputValues[$key] = mysqli_real_escape_string($conn, $value);
        }
    }

    // Generate the SQL query to insert the input values into the database
    $columns = implode(", ", array_keys($inputValues));
    $values = "'" . implode("', '", $inputValues) . "'";
    $sql = "INSERT INTO lecturer ($columns) VALUES ($values)";

    // Execute the SQL query
    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . mysqli_error($conn);
    }
}

// Query to fetch column names from the course table
$sql = "SHOW COLUMNS FROM lecturer";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Count the number of rows returned by the query result
    $numColumns = mysqli_num_rows($result);

    // Check if there are columns to display
    if ($numColumns > 0) {

        // Output the form start tag (initially hidden)
        echo "<form method='POST' class='mb-3' id='newRowForm' style='display: none;'>";
        echo "<div class='container'>";
        echo "<div class='row'>";
        // Start a while loop until $numColumns > 0
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='col-md-4'>";
            echo "<div class='form-group'>";
            echo "<input type='text' class='form-control' id='input{$row['Field']}' name='{$row['Field']}' placeholder='{$row['Field']}' required>";
            echo "</div>";
            echo "</div>";
        }
        echo "<div class='col-md-2'>";
        // Output the submit button with name 'save'
        echo "<button type='submit' name='save' class='btn btn-success mb-3'>Save</button>";

        // Output the cancel button
        echo "<button type='button' id='cancelBtn' class='btn btn-secondary mb-3'>Cancel</button>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        // Output the form end tag
        echo "</form>";
    } else {
        // Output a message if there are no columns in the table
        echo "No columns found in the course table.";
    }
} else {
    // Error handling if the query fails
    echo "Error: " . mysqli_error($conn);
}
echo "<button type='button' id='addRowBtn' class='btn btn-primary mb-3'>Add Row</button>";
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get references to the button and form
        const addRowBtn = document.getElementById("addRowBtn");
        const newRowForm = document.getElementById("newRowForm");
        const cancelBtn = document.getElementById("cancelBtn");

        // Add event listener to the Add Row button
        addRowBtn.addEventListener("click", function() {
            // Toggle the visibility of the form
            newRowForm.style.display = newRowForm.style.display === 'none' ? 'block' : 'none';
        });

        // Add event listener to the Cancel button
        cancelBtn.addEventListener("click", function() {
            // Hide the form
            newRowForm.style.display = 'none';

            // Reset the form to clear input values
            newRowForm.reset();
        });
    });
</script>
    <script>
    /*function addInput(divName) {
        var newDiv = document.createElement('div');
        newDiv.innerHTML = '<input type="text" name="new_columns[]" placeholder="New Column Name">' +
            '<select name="column_types[]">' +
            '<option value="VARCHAR(255)">VARCHAR(255)</option>' +
            '<option value="INT">INT</option>' +
            '</select>';
        document.getElementById(divName).appendChild(newDiv);
    }
    </script>