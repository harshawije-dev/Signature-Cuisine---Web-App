<?php

//add db connection file
include '../connection.php';


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
        header("location:../sign-up.php?error=empty_fields");
    } else if (nameValidate($fname, $lname)) {
        header("location:../sign-up.php?error=invalid_name");
    } else if (emailValidate($email)) {
        header("location:../sign-up.php?error=invalid_email");
    } else if (passwordValidate($password)) {
        header("location:../sign-up.php?error=invalid_password");
    } else if (emailAvailability($conn, $email)) {
        header("location:../sign-up.php?error=already_used_email");
    } else {

        // sanatizing other inputs
        $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
        $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
        $password = mysqli_real_escape_string($conn, $_POST['first_name']);

        //hashing password to improve security
        $hashed_password = sha1($password);

        $stmt = mysqli_prepare($conn, "INSERT INTO `customers` (first_name, last_name, email, password) VALUES(?,?,?,?)");
        mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $hashed_password);
        mysqli_stmt_execute($stmt);


        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "Registation successfully!";
        } else {
            echo "Registation error!";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
    
} else {
    header("location:../sign-up.php");
    exit();
}



//validate funcations

//check input fields are empty
function inputValidate($fname, $lname, $email, $password, $cpassword)
{
    $status = false;
    if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($cpassword)) {
        $status = true;
    } else {
        $status = false;
    }
    return $status;
}


//name validation
function nameValidate($fname, $lname)
{
    $status = false;
    if (!preg_match("/^[a-zA-Z]+$/", $fname)) {
        $status = true;
    } else if (!preg_match("/^[a-zA-Z]+$/", $lname)) {
        $status = true;
    } else {
        $$status = false;
    }

    return $status;
}

//email validation
function emailValidate($email)
{
    $status = false;
    if (!preg_match("/^[a-zA-Z\d\._-]+@[a-zA-Z\d_-]+\.[a-zA-Z\d\.]{2,}$/", $email)) {
        $status = true;
    } else {
        $$status = false;
    }

    return $status;
}


//password validation
function passwordValidate($password)
{
    $status = false;
    if (!preg_match("/^.{5,}$/", $password)) {
        $status = true;
    } else {
        $status = false;
    }
    return $status;
}


// check email availability
function emailAvailability($conn, $email)
{
    $status = false;
    $query = "SELECT * FROM customers WHERE email = '{$email}' LIMIT 1 ";
    $result_set = mysqli_query($conn, $query);

    if ($result_set) {
        if (mysqli_num_rows($result_set) == 1) {
            $status = true;
        } else {
            $status = false;
        }
    }
    return $status;
}


// // // new user registation
// function registerNewUser($fn, $ln, $mail, $pswd){
    

// }