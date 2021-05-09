<?php

session_start();

if($_SESSION['id'])
{

include "../Database/Connection.php";
$connection = new Connection();
$conn = $connection->Connect();

    $sql = "SELECT * FROM teacher where id=" . $_SESSION['id'];
//$result = $conn->query($sql);
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    echo "<h3>My Profile</h3>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['subject'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "</tr><br><br>";
    }
    $conn->close();
}
else
{
    echo "You are not Logged in";
}

