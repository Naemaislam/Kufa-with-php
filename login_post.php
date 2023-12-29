<?php

include('./config/db.php');

session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);

if($email && $password){
    $select_query = "SELECT COUNT(*) AS result FROM users WHERE email='$email' AND password='$password'";
    $connect = mysqli_query($db_connect,$select_query);

    if(mysqli_fetch_assoc($connect)['result'] == 1){
        $select_user = "SELECT * FROM users WHERE email='$email'";
        $user_connect = mysqli_query($db_connect,$select_user);
       $user = mysqli_fetch_assoc($user_connect);
       $_SESSION['admin_id']= $user['id'];
       $_SESSION['admin_name']= $user['name'];
       $_SESSION['admin_email']= $user['email'];
       $_SESSION['admin_image']= $user['image'];
        header("location: ./dashboard/home.php");
    }
    else{
        $_SESSION['login_error'] = "user information can't resister";
        header("location: login.php");
    }
   
}
