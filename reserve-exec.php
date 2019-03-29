<?php
// start session
session_start();

// establish connection to the database
include('conn.php');

$type = $_GET['type'];
$time = $_POST['time'];
$user_id = $_SESSION['USER_ID'];
$table_id = $_POST['table'];

// then insert the product in db
$query = "INSERT INTO reserve_tbl (reserve_time, reserve_type, user_id, table_id) VALUES ('$time', '$type', '$user_id', '$table_id')";
$result = mysqli_query($con, $query);

// check if result is successful
if($result){
    header("location: user_reservation_table_details.php");
    exit();
}else{
    header("location: error_page.php");
    exit();
}