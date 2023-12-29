<?php


include("../config/db.php");
session_start();

if(isset($_POST['portfolios_insert'])){
    $portfolios_title = $_POST['portfolios_title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $explode = explode('.',$image);
    $exriansion = end($explode);
    $new_img_name = $portfolios_title.'-'.date("s-i-h").'-'.date("d-m-Y").'.'.$exriansion;
    $tmp_name = $_FILES['image']['tmp_name'];
    $path ="../images/portfolios/".$new_img_name;
if(move_uploaded_file($tmp_name,$path)){
    if($portfolios_title && $description && $image){
        $insert_quary = "INSERT INTO portfolios (title,description,image) VALUES('$portfolios_title','$description','$new_img_name')";
        mysqli_query($db_connect,$insert_quary);
        $_SESSION['insert_success']="Your Information Successfully Insert.";
        header("location: portfolios.php");
        }
    }
}

if(isset($_POST['portfolios_edit'])){
    $id=$_POST['Portfolios_id'];
    $Portfolios_title = $_POST['Portfolios_title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $explode = explode('.',$image);
    $exriansion = end($explode);
    $new_img_name = $id.'-'.date("s-i-h").'-'.date("d-m-Y").'.'.$exriansion;
    $tmp_name = $_FILES['image']['tmp_name'];
    $path ="../images/portfolios/".$new_img_name;
    

    if($Portfolios_title && $description && $image){
       $update_quary="UPDATE Portfolios SET title='$Portfolios_title',description='$description', image='$new_img_name' WHERE id='$id'";
       mysqli_query($db_connect,$update_quary);
       $_SESSION['update_success']="Your Information Successfully Update.";

        header("location: portfolios.php");
    }
}

$select_query = "SELECT * FROM Portfolios WHERE id='$id'";
$connect = mysqli_query($db_connect,$select_query);
$portfolio = mysqli_fetch_assoc($connect);
$path_update ="../images/portfolios/".$portfolio['image'];


if($image){
    if(move_uploaded_file($tmp_name,$path)){
        unlink('$path_update');
        $update_quary="UPDATE Portfolios SET image='$new_img_name' WHERE id='$id'";
       mysqli_query($db_connect,$update_quary);
       $_SESSION['update_success']="Your Information Successfully Update.";

        header("location: portfolios.php");
    }

}

if(isset($_GET['change_status'])){
    $id=$_GET['change_status'];
    
    $status_quary = "SELECT * FROM portfolios WHERE id=$id";
    $connect = mysqli_query($db_connect,$status_quary);
    $portfolio = mysqli_fetch_assoc($connect);
    if($portfolio['status'] == 'active'){
        $update_quary = "UPDATE portfolios SET status='deactive' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: portfolios.php");

    }else{
        $update_quary = "UPDATE portfolios SET status='active' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: portfolios.php");
    }

}


if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $delete_quary = "DELETE FROM portfolios WHERE id=$id";
    mysqli_query($db_connect,$delete_quary);
    header("location: portfolios.php");
}
