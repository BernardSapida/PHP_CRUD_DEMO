<?php
    require_once "../../utils/database.php";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"]; // input for fullname
        $studentNumber = $_POST["studentNumber"]; // input for studentNumber
        $section = $_POST["section"]; // input for studentNumber

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO `students` (fullname, student_no, section) VALUES ('$fullname', '$studentNumber', '$section')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: there was an error while creating a new record";
        }

        $conn->close();
    }
?>