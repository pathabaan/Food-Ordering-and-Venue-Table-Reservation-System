<?php
// start session
session_start();

// establish connection to the database
include('conn.php');

$id = $_POST['id'];
$code = $_POST['code'];
$name = $_POST['name'];
$price = $_POST['price'];
$desc = $_POST['desc'];

// check if there is an uploaded file
if(!empty($_FILES["image"]["name"])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $tmp = explode('.',$file_name);
    $file_ext=strtolower(end($tmp));
    
    $extensions= array("jpeg","jpg","png");
    
    // check if file has an extension of "jpeg","jpg","png"
    if(in_array($file_ext, $extensions) === false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    // check if file size is greater than 2mb
    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }
    
    // check if there are errors
    if(empty($errors) == true){
        // upload the file!
        $image = "uploads/".$file_name;
        move_uploaded_file($file_tmp, $image);
        // then insert the product in db
        $query = "UPDATE product_tbl SET prod_code='".$code."', prod_name='".$name."', prod_price='".$price."', prod_desc='".$desc."', prod_image='".$image."' WHERE prod_id = ".$id;
        $result = mysqli_query($con, $query);

        // check if result is successful
        if($result){
            header("location: products.php");
            exit();
        }else{
            header("location: error_page.php");
            exit();
        }
    }else{
        print_r($errors);
    }
}else{
    $query = "UPDATE product_tbl SET prod_code='".$code."', prod_name='".$name."', prod_price='".$price."', prod_desc='".$desc."' WHERE prod_id = ".$id;
    $result = mysqli_query($con, $query);

    // check if result is successful
    if($result){
        header("location: products.php");
        exit();
    }else{
        header("location: error_page.php");
        exit();
    }
}