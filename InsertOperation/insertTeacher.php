<?php

include '../Database/Connection.php';
include '../Auth/middleware.php';

middleware::checkMiddleware();
$connection = new Connection();
$conn = $connection->Connect();


$sql = "INSERT INTO teacher (id, name, subject,phone) VALUES ('" . $_POST['id'] . "','" . $_POST['name'] . "','" . $_POST['subject'] . "','" . $_POST['phone'] . "')";



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();