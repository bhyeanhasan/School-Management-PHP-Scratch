<?php
session_start();
echo "<h1>Log out</h1>";
session_destroy();
header("Location: ../index.php");