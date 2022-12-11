<?php
include('db.php');

?>


<!DOCTYPE html>
<html lang="en">


<?php include('head.php') ?>
<div class="container mt-5">
    <div class="border">
        <div class="row">
            <div class="col">
                <img src="static/img/Test_image.jpg" alt="pp" class="img-thumbnail">

            </div>
            <div class="col">
                <div class="container mt-3">
                    <span>Full Name: </span>
                    <span><?php echo $_SESSION['username'] ?></span><br>
                    <span>Email: </span>
                    <span><?php echo $_SESSION['email'] ?></span><br>
                    <span>Age: </span>
                    <span><?php echo $_SESSION['age'] ?></span><br>
                    <span>Department: </span>
                    <span><?php echo $_SESSION['department'] ?></span>
                </div>


            </div>

        </div>

    </div>

</div>

</html>