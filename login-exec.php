<?php 
    // start session
    session_start();

    // establish connection to the database
    include('conn.php');

    // get credentials from login modal
    $username = $_POST['username'];
    $password = sha1($_POST['password']);   // sha1() hashes the password.

    // check in db if user is existing
    // check the user table if the given credentials are existing
    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

    // execute dat query
    $result = mysqli_query($con, $query);

    // check if the query is successful
    if ( $result ){
        // check if user is existing in the db
        if ( mysqli_num_rows($result) > 0 ) {
            // save user session
            $_SESSION['LOGGED_IN'] = 1;
            while($row = mysqli_fetch_array($result)){
                $_SESSION['USER_ID'] = $row['id'];
                $_SESSION['USER_NAME'] = $row['fname'].' '.$row['mname'].' '.$row['lname'];
                $_SESSION['USER_USERNAME'] = $row['username'];
                $_SESSION['USER_PASSWORD'] = $row['password'];
                $_SESSION['USER_ROLE'] = $row['role'] == 1 ? 'admin' : 'user';
            }
            //redirect to user.php
            if($_SESSION['USER_ROLE'] == 'admin'){
                header('location: admin.php');
            }else{
                header("location: user_welcome_page.php");
            }
            exit();
        }else{
            $_SESSION['LOGGED_IN'] = 0;
            // else, credentials have no match
            header('location: user.php');
            exit();
        }
    }else{
        $_SESSION['LOGGED_IN'] = 0;
        //else, there is a problem in query execution
        header("location: error_page.php");
        exit();
    }
?>