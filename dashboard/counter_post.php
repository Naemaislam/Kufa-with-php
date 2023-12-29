<?php

include("../config/db.php");
session_start();

if(isset($_POST['counter_insert'])){
    $title = $_POST['title'];
    $number = $_POST['number'];
    print_r($number);
    $icon = $_POST['icon'];
    if($title && $number && $icon){
        $insert_quary = "INSERT INTO counters (title,number,icon) VALUES('$title','$number','$icon')";
        mysqli_query($db_connect,$insert_quary);
        header("location: counter.php");
    }
}

if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $delete_quary = "DELETE FROM counters WHERE id=$id";
    mysqli_query($db_connect,$delete_quary);
    header("location: counter.php");
}

if(isset($_GET['change_status'])){
    $id=$_GET['change_status'];
    print_r($id);
    $status_quary = "SELECT * FROM counters WHERE id=$id";
    $connect = mysqli_query($db_connect,$status_quary);
    $counter = mysqli_fetch_assoc($connect);

    if($counter['status'] == 'active'){
        $update_quary = "UPDATE counters SET status='deactive' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: counter.php");

    }else{
        $update_quary = "UPDATE counters SET status='active' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: counter.php");
    }

}

if(isset($_POST['counter_edit'])){
    $title = $_POST['title'];
    $number = $_POST['number'];
    $icon = $_POST['icon'];
    $id = $_POST['counter_id'];

    if($title && $number && $icon){
       $update_quary="UPDATE counters SET title='$title',number='$number',icon='$icon' WHERE id='$id'";
       mysqli_query($db_connect,$update_quary);
       $_SESSION['update_success']="Your Information Successfully Update.";

        header("location: counter.php");
    }
}
