<?php
    require_once "../../utils/database.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $fullname = $_POST["fullname"]; // input for fullname
        $studentNumber = $_POST["studentNumber"]; // input for studentNumber
        $section = $_POST["section"]; // input for studentNumber

        $sql = "UPDATE `students` SET fullname='Aaron Villaluz', student_no='202102312', section='BSCS2-1' WHERE id = 1";

        if ($conn->query($sql) === TRUE) {
            echo "Existing record updated successfully";
        } else {
            echo "Error: there was an error while creating a new record";
        }

        $conn->close();
    }
?>