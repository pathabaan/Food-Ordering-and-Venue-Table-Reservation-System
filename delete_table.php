<?php
    include('conn.php');

    $id = $_GET['id'];
    
    //Execute Query
    $query = "DELETE FROM table_tbl WHERE table_id = $id";
    mysqli_query($con, $query);

    //Return to index.php after running the script
    header('location: tables.php');

    //Close connection
    mysqli_close($con);

?>