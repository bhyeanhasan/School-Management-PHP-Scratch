<?php
include "htmlHeader.php"
?>

    <form action="../Auth/login.php" method="post">
        <input type="text" name="user" value="08401">
        <input type="password" name="pass" placeholder="1234">
        <input type="submit" name="login" value="Login">
    </form>


<?php
include "htmlFooter.php"
?>