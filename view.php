<?php
include "Database/Connection.php";
$connection = new Connection();
$conn = $connection->Connect();




$sql = "SELECT * FROM applicant";
//$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
echo "<h3>Applicants</h3>";
while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['roll'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['faculty'] . "</td>";
    echo "<td>" . $row['payment'] . "</td>";
    echo "</tr><br><br>";
}


$sql = "SELECT * FROM teacher";
//$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
echo "<h3>Teachers</h3>";
while ($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['subject'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "</tr><br><br>";
}