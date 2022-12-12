<?php
session_start();
include('db.php');

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('head.php') ?>

<body>
  <?php include('navbar.php'); ?>
  <div class="container text-center mt-5">
    <div id="border" class="container border">
      <div class="mt-5">
        <?php
        if (isset($_SESSION['username'])) {
          echo '                <h1 class="text-primary">User Profile</h1>
                  ';
        } else {
          echo '                <h1 class="text-primary">All Staff</h1>
';
        }
        ?>
      </div>
      <?php

      //ini buat biar kalo user yg admin aja yg bisa cek all staff. kalo yg bukan staff cuman bisa cek salar dia doang
      // Ganti make session yg diatas

      if (isset($_SESSION['username'])) {

        if ($_SESSION['username'] == 'admin') {
          echo '<div class="container">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Salary</th>
                    </tr>
                    ';

          $sql = "SELECT * FROM users";
          $result = mysqli_query($db_connection, $sql);
          while ($row = $result->fetch_assoc()) {
            $id  = $row['id'];
            $name = $row['username'];
            $age = $row['age'];
            $email = $row['email'];
            $salary = $row['salary'];
            $department = $row['department'];
            echo '<tr>
          <td>';
            echo $id;
            echo '</td>
                        <td>';
            echo $name;
            echo '</td>
                        <td>';
            echo $department;
            echo '</td>
                        <td>';
            echo $age;
            echo '</td>
                        <td>';
            echo $email;
            echo
            '</td>
                        <td>';
            echo $salary;
            echo '</td>
                    </tr>';
          }

          echo '</table>

            </div>';
        } else {
          include('profile_info.php');
        }
      }


      ?>



      <div class="container mt-5 mb-5">
        <?php
        if (isset($_SESSION['username'])) {
          if ($_SESSION['username'] == 'admin') {
            echo '<a href="input.php" class="btn btn-primary">Salary Calculator</a>
';
            echo '                <a href="add_staff.php" class="btn btn-primary">Add new staff</a>
';
          };


          echo '                <a href="logout.php" class="btn btn-danger">Logout</a>
';
        } else {
          echo 'YOU MUST LOGIN';
          echo '                <a href="login.php" class="btn btn-primary">Login</a>
';
        } ?>
      </div>
    </div>

  </div>
  <div class="mt-5">
    <?php include('footer.php') ?>

  </div>
</body>

</html>