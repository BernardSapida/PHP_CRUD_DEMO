<?php
    require_once "../../utils/database.php";

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $sql = "SELECT * FROM `students`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]. " - Fullname: " . $row["fullname"] . 
              "- Student No. - " . $row["student_no"]. " - Section:" .
              $row["section"] . "<br>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
    }
?>