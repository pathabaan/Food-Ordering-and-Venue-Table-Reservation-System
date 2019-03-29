<?php
// start session
session_start();

// establish connection to the database
include('conn.php');

$id = $_POST['id'];
$name = $_POST['name'];
$seat = $_POST['seat'];
$status = $_POST['status'];

// execute query
$query = "UPDATE table_tbl SET table_name='$name', table_seat='$seat', table_status='$status' WHERE table_id=$id";
mysqli_query($con, $query);
// return to index.php after running the script 
header('location: tables.php');
// close connection
mysqli_close($con);
?>