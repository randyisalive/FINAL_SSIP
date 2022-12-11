<!DOCTYPE html>
<?php

include('head.php');
include('navbar.php');

?>

<body>

    <div class="container mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1>Add Staff To Database</h1>
            </div>
            <form action="processing/process_create.php" method="post" class="form-control">
                <div class="container mt-3">
                    <span>Full Name: </span>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="container mt-3">
                    <span>Password: </span>
                    <input type="password" name="password" required class="form-control">
                </div>
                <div class="container mt-3">

                    <span>Email: </span>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="container mt-3">
                    <span>Re - Enter Password</span>
                    <input type="text" name="re_enter" required class="form-control">
                </div>
                <div class="container text-center mt-5 mb-5 ">
                    <input type="submit" name="submit" value="Add Staff" class="btn btn-primary">

                </div>



            </form>
        </div>

    </div>
    <?php include('footer.php') ?>

</body>