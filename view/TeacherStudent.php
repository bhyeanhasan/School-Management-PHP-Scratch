<?php
include "../Database/Connection.php";
include "../Template/htmlHeader.php";
include "../Auth/middleware.php";
middleware::checkMiddleware();
$connection = new Connection();
$conn = $connection->Connect();
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">

            <form action="../InsertOperation/insertApplicant.php" method="post">
                <label> Name:</label><br>
                <input type="text" name="name" value="Noyon"><br>

                <label>HSC Roll</label><br>
                <input type="text" name="roll" value="1802027"><br>

                <label>Faculty</label><br>
                <input type="text" name="faculty" value="CSE"><br>

                <label>Tranjection ID:</label><br>
                <input type="text" name="payment" value="5000"><br><br>

                <input type="submit"><br>

            </form>


            <form action="../InsertOperation/insertTeacher.php" method="post">
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

        </div>
        <div class="col-md-6">
            <?php

            $sql = "SELECT * FROM applicant";
            $result = mysqli_query($conn, $sql);

            if (!$result)
            {
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

            $conn->close();
            ?>
        </div>


    </div>
</div>






<?php
include "../Template/htmlFooter.php";
?>
