<?php
include('./config/db.php');
session_start();


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if($name){
    echo $name;
}else{
    $_SESSION['name_error'] = "name is missing";
    header("location: registation.php");
}

if($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){

    }else{
        $_SESSION['email_error'] = "email is invalid";
        header("location: registation.php");  
    }
}else{
    $_SESSION['email_error'] = "email is missing";
    header("location: registation.php");
}

if($password){
    if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){

    }else{
        $_SESSION['password_error'] = "password requierment can't match.";
    header("location: registation.php");
    }

}else{
    $_SESSION['password_error'] = "password is missing";
    header("location: registation.php");
}

if($confirm_password){
    if($confirm_password ==$password){

    }else{
        $_SESSION['confirm_password_error'] = "password is not match";
    header("location: registation.php");
    }
}else{
    $_SESSION['confirm_password_error'] = "confirm password is missing";
    header("location: registation.php");
}


if($name && $email && $password){
    $encrypt = md5($password);
    $insert_query = "INSERT INTO users (name,email,password) VALUES('$name','$email','$encrypt')";
    mysqli_query($db_connect,$insert_query);


    $_SESSION['s_email'] =$email;
    $_SESSION['s_password'] =$password;

    header("location: login.php");


}
