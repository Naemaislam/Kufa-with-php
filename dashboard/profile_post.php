<?php

session_start();
include('../config/db.php');


if(isset($_POST['name_update'])){
    $name = $_POST['name'];
    if($name){
        $user_id = $_SESSION['admin_id'] ;
        $update_name_query = "UPDATE users SET name='$name' WHERE id='$user_id'";
        mysqli_query($db_connect,$update_name_query);
        $_SESSION['admin_name'] = $name;
        header("location: profile.php");
    }
}



// $email_update = $_POST['email_update'];

if(isset($_POST['email_update'])){
    $email = $_POST['email'];
    if($email){
        $user_email = $_SESSION['admin_id'] ;
        $user_id=$_SESSION['admin_id'];
        $update_email_query = "UPDATE users SET email='$email' WHERE id='$user_id'";
        mysqli_query($db_connect,$update_email_query);
        $_SESSION['admin_email'] = $email;
        header("location: profile.php");
    }
}

if(isset($_POST['password_update'])){
    $current_password =$_POST['Current_password'];
   
    $new_password =$_POST['New_password'];
    $confirm_password =$_POST['Confirm_password'];
    $user_id =$_SESSION['admin_id'];
    // echo $user_id;
    
    if($current_password){
        $encrypt = md5($current_password);
        $select_pass_query ="SELECT COUNT(*) AS pass_chack FROM users WHERE id='$user_id' AND password='$encrypt'";
        $connect =mysqli_query($db_connect,$select_pass_query);
        // print_r(mysqli_fetch_assoc($connect)['pass_chack']);
        if(mysqli_fetch_assoc($connect)['pass_chack']==1){

            if($new_password){
                if($confirm_password){
                    if($confirm_password == $new_password){
                        $new_encrypt =md5($new_password);
                        $update_query ="UPDATE users SET password ='$new_encrypt' WHERE id='$user_id'";
                        mysqli_query($db_connect,$update_query);
                        echo "done.you are successfully update your password.";
                }else{
                        echo "password can't match.";
                    }

                }else{
                    echo "confirm password dao nai.";
                }

            }else{
                echo "new password dao nai";
            }

        }else{
            echo "password vhule gaco.";
        }
    }else{
        echo "value dao nai";
    }

}

// image upload

if(isset($_POST['image_update'])){
    $image = $_FILES['image']['name'];
    // print_r($image);
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $explode = explode('.',$image);
    // print_r($explode);
    $extension = end($explode);
    // echo $extension;
    $user_id =$_SESSION['admin_id'];
    $admin_name =$_SESSION['admin_name'];
    $new_name = $user_id."-".$admin_name."-".date("d-m-Y").".".$extension;
    $local_path = "../images/profile/".$new_name;
    if(move_uploaded_file($image_tmp_name, $local_path)){
        $update_query ="UPDATE users SET image ='$new_name' WHERE id='$user_id'";
        mysqli_query($db_connect,$update_query);

        $_SESSION['admin_image'] = $new_name;
        header("location: profile.php");

    }else{
        echo "update hynai";
    }


}
