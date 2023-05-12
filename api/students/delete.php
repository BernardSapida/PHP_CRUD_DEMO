<?php
    require_once "../../utils/database.php";

    echo $_GET["id"] . "<br>";

    // if($_SERVER["REQUEST_METHOD"] == "POST") {
        // $fullname = $_POST["fullname"]; // input for fullname
        // $studentNumber = $_POST["studentNumber"]; // input for studentNumber
        // $section = $_POST["section"]; // input for studentNumber

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "DELETE FROM `students` WHERE id = 2";

        if ($conn->query($sql) === TRUE) {
            echo "Existing record deleted successfully";
        } else {
            echo "Error: there was an error while creating a new record";
        }

        $conn->close();
    // }
?>