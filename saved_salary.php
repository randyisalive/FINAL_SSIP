<?php
include('db.php');
$staff_id = $_POST['staff'];
$salary = $_POST['salary_save'];


echo $staff_id . " " . $salary;

$sql = "UPDATE saved SET users_id = '$staff_id', salary = '$salary' WHERE users_id = '$staff_id'";
$result = mysqli_query($db_connection, $sql);
header("Location: index.php");