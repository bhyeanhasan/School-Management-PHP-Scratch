<?php
session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

include "../Database/Connection.php";
$connection = new Connection();
$conn = $connection->Connect();

$sql = "SELECT * FROM teacher";
//$result = $conn->query($sql);
$result = mysqli_query($conn, $sql);
if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

while ($row = mysqli_fetch_array($result))
{

    if($user == $row['id'] && $pass ==$row['password'] )
    {
        $_SESSION['user'] = $row['name'];
        $_SESSION['id'] = $row['id'];

    }

}

$conn->close();

header("Location: ../index.php");
