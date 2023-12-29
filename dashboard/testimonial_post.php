<?php
include("../config/db.php");
session_start();

if(isset($_POST['testimonial_insert'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $explode = explode('.',$image);
    $exriansion = end($explode);
    $new_img_name = $title.'-'.date("s-i-h").'-'.date("d-m-Y").'.'.$exriansion;
    $tmp_name = $_FILES['image']['tmp_name'];
    $path ="../images/testimonial/".$new_img_name;
    $name = $_POST['name'];
if(move_uploaded_file($tmp_name,$path)){
    if($title && $description && $image && $name){
        $insert_quary = "INSERT INTO testimonials (title,description,image,name) VALUES('$title','$description','$new_img_name','$name')";
        mysqli_query($db_connect,$insert_quary);
        $_SESSION['insert_success']="Your Information Successfully Insert.";
        header("location: testimonial.php");
        }
    }
}

if(isset($_POST['testimonial_edit'])){
    $id=$_POST['testimonials_id'];
    $title = $_POST['title'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $explode = explode('.',$image);
    $exriansion = end($explode);
    $new_img_name = $id.'-'.date("s-i-h").'-'.date("d-m-Y").'.'.$exriansion;
    $tmp_name = $_FILES['image']['tmp_name'];
    $path ="../images/testimonial/".$new_img_name;
    
    if(move_uploaded_file($tmp_name,$path)){
    if($title && $description && $image && $name){
       $update_quary="UPDATE testimonials SET title='$title',description='$description', image='$new_img_name',name='$name' WHERE id='$id'";
       mysqli_query($db_connect,$update_quary);
       $_SESSION['update_success']="Your Information Successfully Update.";

        header("location: testimonial.php");
    }
}
}

if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $delete_quary = "DELETE FROM testimonials WHERE id=$id";
    mysqli_query($db_connect,$delete_quary);
    header("location: testimonial.php");
}

if(isset($_GET['change_status'])){
    $id=$_GET['change_status'];
    
    $status_quary = "SELECT * FROM testimonials WHERE id=$id";
    $connect = mysqli_query($db_connect,$status_quary);
    $testimonial = mysqli_fetch_assoc($connect);

    if($skill['status'] == 'active'){
        $update_quary = "UPDATE testimonials SET status='deactive' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: testimonial.php");

    }else{
        $update_quary = "UPDATE testimonials SET status='active' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: testimonial.php");
    }

}




?>