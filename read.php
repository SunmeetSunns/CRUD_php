<?php
$conn = mysqli_connect("localhost", "root", "", "sunmeet");

$sql = "SELECT * FROM student_details ";
    $result = mysqli_query($conn, $sql);

    echo "<table>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['fname'] . "</td>";
        echo "<td>" . $row['sname'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['college_name'] . "</td>";
        echo "<td>" . $row['phone_no'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>