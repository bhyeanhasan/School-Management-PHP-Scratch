<?php

include '../Database/Connection.php';
include '../Auth/middleware.php';

middleware::checkMiddleware();
$connection = new Connection();
$conn = $connection->Connect();


$sql = "INSERT INTO applicant (roll, name, faculty,payment) VALUES ('". $_POST['roll']."','". $_POST['name']."','".$_POST['faculty']."','".$_POST['payment']."')";

#echo $sql;

if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();