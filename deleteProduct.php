<?php
    include('conn.php');
    $id = $_GET['id'];
    
    // execute query
    $query = "DELETE FROM product_tbl WHERE prod_id = $id";
    mysqli_query($con, $query);

    // return to index.php after running the script 
    header('location: products.php');
    // close connection
    mysqli_close($con);
?>