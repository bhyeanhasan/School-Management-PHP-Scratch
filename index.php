<?php

include 'Database/Connection.php';


session_start();

if(isset($_SESSION['user']))
{
    echo "<h2>Welcome ".$_SESSION["user"]."</h2>";
}
else
{
    //$_SESSION['user']="bhyean";
    echo "<h2>You are not logged in</h2>";
}
?>

<form action="logout.php">
    <input type="submit" name="logout" value="Logout" >
</form>

<form action="login.php" method="post">
    <input type="text" name="user" placeholder="User">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" value="Login">
</form>

<form action="view.php">
    <input type="submit" name="view" value="View">
</form>

<form action="insertApplicant.php" method="post">
  <label> Name:</label><br>
  <input type="text" name="name" value="Noyon"><br>
    
  <label>HSC Roll</label><br>
  <input type="text" name="roll" value="1802027"><br>

    <label>Faculty</label><br>
    <input type="text" name="faculty" value="CSE"><br>

    <label>Tranjection ID:</label><br>
    <input type="text" name="payment" value="5000"><br><br>

    <input type="submit">
    
</form>


<form action="insertTeacher.php" method="post">
    <label> ID :</label><br>
    <input type="text" name="id" value="08401"><br>

    <label> Name :</label><br>
    <input type="text" name="name" value="Ruhul Amin"><br>

    <label>Subject :</label><br>
    <input type="text" name="subject" value="Math"><br>

    <label>Phone :</label><br>
    <input type="text" name="phone" value="01920599266"><br><br>

    <input type="submit">

</form>




