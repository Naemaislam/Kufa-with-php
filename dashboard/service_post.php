<?php

include("../config/db.php");
session_start();

if(isset($_POST['service_insert'])){
    $service_title = $_POST['service_title'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];
    if($service_title && $description && $icon){
        $insert_quary = "INSERT INTO services (service_title,description,icon) VALUES('$service_title','$description','$icon')";
        mysqli_query($db_connect,$insert_quary);
        header("location: service.php");
    }
}

if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $delete_quary = "DELETE FROM services WHERE id=$id";
    mysqli_query($db_connect,$delete_quary);
    header("location: service.php");
}

if(isset($_GET['change_status'])){
    $id=$_GET['change_status'];
    print_r($id);
    $status_quary = "SELECT * FROM services WHERE id=$id";
    $connect = mysqli_query($db_connect,$status_quary);
    $service = mysqli_fetch_assoc($connect);

    if($service['status'] == 'active'){
        $update_quary = "UPDATE services SET status='deactive' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: service.php");

    }else{
        $update_quary = "UPDATE services SET status='active' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: service.php");
    }

}

if(isset($_POST['service_edit'])){
    $service_title = $_POST['service_title'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];
    $id = $_POST['service_id'];

    if($service_title && $description && $icon){
       $update_quary="UPDATE services SET service_title='$service_title',description='$description',icon='$icon' WHERE id='$id'";
       mysqli_query($db_connect,$update_quary);
       $_SESSION['update_success']="Your Information Successfully Update.";

        header("location: service.php");
    }
}


?>