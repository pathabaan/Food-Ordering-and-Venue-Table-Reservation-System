<?php
// start session
session_start();

// establish connection to the database
include('conn.php');

$code = $_POST['code'];
$type = $_POST['type'];
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
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    // check if file has an extension of "jpeg","jpg","png"
    if(in_array($file_ext, $extensions)=== false){
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
        $query = "INSERT INTO product_tbl (prod_code, prod_name, prod_price, prod_desc, prod_image) VALUES ('$code', '$name', '$price', '$desc', '$image')";
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
    // if no image given, use the img5.png
    $image = 'img5.png';
    $query = "INSERT INTO product_tbl (prod_code, prod_name, prod_price, prod_desc, prod_image, prod_type) VALUES ('$code', '$name', '$price', '$desc', '$image', '$type')";
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