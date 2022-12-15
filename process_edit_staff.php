<?php
include('db.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$age = $_POST['age'];
$department = $_POST['department'];
$id = $_SESSION['id'];


$sql = "UPDATE users SET username = '$username', password = '$password', email = '$email', age = '$age', department = '$department', FullName = '$full_name' WHERE id = '$id' ";
if ($result = mysqli_query($db_connection, $sql)) {
    $sql_1 = "SELECT id, profile_picture, salary FROM users WHERE username = '$username'";
    $result_1 = mysqli_query($db_connection, $sql_1);
    $row = $result_1->fetch_assoc();
    echo 'Update Sucessfully!';
    session_destroy();
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $row['id'];
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    $_SESSION['profile_picture'] = $row['profile_picture'];
    $_SESSION['age'] = $age;
    $_SESSION['department'] = $department;
    $_SESSION['salary'] = $row['salary'];
    $_SESSION['FullName'] = $full_name;
    header("location: index.php");
    $db_connection->close();
} else {
    echo "Update Failed";
}