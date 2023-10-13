<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $databaseName = $_POST['database_name'];
    $tableName = $_POST['table_name'];
    $studentName = $_POST['student_name'];
    $studentMail = $_POST['student_mail'];
    $studentMarks = $_POST['student_marks'];

    // Connect to MySQL (update the credentials)
    $conn = new mysqli("localhost", "root", "");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create the database if it doesn't exist
    $createDatabaseSQL = "CREATE DATABASE IF NOT EXISTS $databaseName";
    if ($conn->query($createDatabaseSQL) === TRUE) {
        // Select the database
        $conn->select_db($databaseName);

        // Create the table if it doesn't exist
        $createTableSQL = "CREATE TABLE IF NOT EXISTS $tableName (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            mail VARCHAR(255) NOT NULL,
            marks INT NOT NULL
        )";
        if ($conn->query($createTableSQL) === TRUE) {
            // Insert the student information
            $insertDataSQL = "INSERT INTO $tableName (name, mail, marks) VALUES ('$studentName', '$studentMail', $studentMarks)";
            if ($conn->query($insertDataSQL) === TRUE) {
                echo "Data inserted successfully!";
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
