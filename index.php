<?php
include 'Database/Connection.php';
include 'Template/htmlHeader.php';
session_start();
?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <?php
        if(isset($_SESSION['user']))
            echo $_SESSION['user'];
        else
            echo "Not logged in"
        ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

            <?php if(! isset($_SESSION['id'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="Template/loginPage.php">Login <span class="sr-only">(current)</span></a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="view/TeacherStudent.php">Admin Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view/profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Auth/logout.php">Logout</a>
                </li>
            <?php endif; ?>



        </ul>
    </div>
</nav>




<?php
include "Template/htmlFooter.php";
?>


