<?php

//add db connection file
require_once '../includes/connection.php';
require_once '../includes/validations.php';



//checking form submition
if (isset($_POST['register_btn'])) {

    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    //sanatizing email input
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['com_password'];


    //input fields validation
    if (inputValidate($fname, $lname, $email, $password, $cpassword)) {
        $error_text = "Please fill the input fields";
        header("location:sign-up.php?error='$error_text'");

    } else if (nameValidate($fname, $lname)) {
        header("location:sign-up.php?error=invalid_name");
        
    } else if (emailValidate($email)) {
        header("location:sign-up.php?error=invalid_email");

    } else if (passwordValidate($password)) {
        header("location:sign-up.php?error=invalid_password");

    } else if (emailAvailability($conn, $email)) {

        $error_text = "This email already in use";
        header("location:sign-up.php?error=$error_text");

    } else {

        // sanatizing other inputs
        $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
        $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        //hashing password to improve security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO customers (first_name, last_name, email, password) VALUES(?,?,?,?);";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            $error_text = "failed stmt";
            header("location:sign-up.php?error=$error_text");
        }
        else {
            //bind data with stmt
            mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashed_password);
            //execute the stmt
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);

            $error_text = "Successfuly";
            header("location:login.php?error=$error_text");
        }
        
    }
    
} else {
    header("location:sign-up.php");
    exit();
}

