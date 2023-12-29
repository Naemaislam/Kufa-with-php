<?php


include("../config/db.php");
session_start();



if(isset($_POST['brands_insert'])){
    $image = $_FILES['image']['name'];
    $explode = explode('.',$image);
    $exriansion = end($explode);
    $new_img_name = date("s-i-h").'-'.date("d-m-Y").'.'.$exriansion;
    $tmp_name = $_FILES['image']['tmp_name'];
    $path ="../images/brands/".$new_img_name;
if(move_uploaded_file($tmp_name,$path)){
    if($image){
        $insert_quary = "INSERT INTO brands (image) VALUES('$new_img_name')";
        mysqli_query($db_connect,$insert_quary);
        $_SESSION['insert_success']="Your Information Successfully Insert.";
        header("location: brands.php");
        }
    }
}


if(isset($_POST['brands_edit'])){
    $id=$_POST['brand_id'];
    print_r($id);
    $image = $_FILES['image']['name'];
    $explode = explode('.',$image);
    $exriansion = end($explode);
    $new_img_name = $id.'-'.date("s-i-h").'-'.date("d-m-Y").'.'.$exriansion;
    $tmp_name = $_FILES['image']['tmp_name'];
    $path ="../images/brands/".$new_img_name;
    

    if($image){
       $update_quary="UPDATE brands SET image='$new_img_name' WHERE id='$id'";
       mysqli_query($db_connect,$update_quary);
       $_SESSION['update_success']="Your Information Successfully Update.";

        header("location: brands.php");
    }
}

$select_query = "SELECT * FROM brands WHERE id='$id'";
$connect = mysqli_query($db_connect,$select_query);
$brand = mysqli_fetch_assoc($connect);
$path_update ="../images/brands/".$brand['image'];


if($image){
    if(move_uploaded_file($tmp_name,$path)){
        unlink('$path_update');
        $update_quary="UPDATE brands SET image='$new_img_name' WHERE id='$id'";
       mysqli_query($db_connect,$update_quary);
       $_SESSION['update_success']="Your Information Successfully Update.";

        header("location: brands.php");
    }

}

if(isset($_GET['change_status'])){
    $id=$_GET['change_status'];
    
    $status_quary = "SELECT * FROM brands WHERE id=$id";
    $connect = mysqli_query($db_connect,$status_quary);
    $brand = mysqli_fetch_assoc($connect);
    if($brand['status'] == 'active'){
        $update_quary = "UPDATE brands SET status='deactive' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: brands.php");

    }else{
        $update_quary = "UPDATE brands SET status='active' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: brands.php");
    }

}


if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $delete_quary = "DELETE FROM brands WHERE id=$id";
    mysqli_query($db_connect,$delete_quary);
    header("location: brands.php");
}
