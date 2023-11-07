<?php

include '../connection.php';

//check submition
if (isset($_POST['login_btn'])) {

    //check username and password field are empty
    if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 1) {
        $error = "Email is missing or invalid";
        header("location:../login.php?error=$error");

    } else if (!isset($_POST['password']) || strlen(trim($_POST['email'])) < 1) {
        $error = "Password is missing or invalid";
        header("location:../login.php?error=$error");
    }

    //if there are no erros, then execute
    else{
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $hashed_password = sha1($password);

        //database query
        $query = "SELECT * FROM `customers` WHERE email='{$email}' AND password='{$hashed_password}' LIMIT 1";

        $result = mysqli_query($conn, $query);


        if($result){

            if(mysqli_num_rows($result) == 1){
                header("location:../index.php?result=true");
            }
            else {
                $row = mysqli_num_rows($result);
                $result = $row;
                // $error = "Invalid Username or Password";
                header("location:../login.php?error=$error");
            }
        }
        else{
            $error = "Database query failed";
            header("location:../login.php?error=$error");
        }

    }
}
