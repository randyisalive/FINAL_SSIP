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
    echo 'Update Sucessfully!';
    header("location: index.php");
    $db_connection->close();
} else {
    echo "Update Failed";
}