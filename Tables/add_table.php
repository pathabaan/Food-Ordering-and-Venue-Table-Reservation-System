<?php
    include('../conn.php');

    //Get post data
    $name = $_POST['name'];
    $seats = $_POST['seats'];
    $status = $_POST['status'];

    //Execute Query
    $query = "INSERT INTO table_tbl(table_name, table_seat, table_status) VALUES('$name', '$seats', '$status')";
    mysqli_query($con, $query);

    //Return to index.php after running the script
    header('location: ../tables.php');

    //Close connection
    mysqli_close($con);

?>