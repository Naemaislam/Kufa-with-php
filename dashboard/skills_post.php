<?php

include("../config/db.php");
session_start();

if(isset($_POST['skills_insert'])){
    $title = $_POST['title'];
    $year = $_POST['year'];
    $skill_persentice = $_POST['skill_persentice'];
    if($title && $year && $skill_persentice){
        $insert_quary = "INSERT INTO skills (title,year,skill_persentice) VALUES('$title','$year','$skill_persentice')";
        mysqli_query($db_connect,$insert_quary);

        $_SESSION['insert_success'] = "Your information successfully insert complete.";

        header("location: skills.php");
    }
}

if(isset($_GET['delete_id'])){
    $id=$_GET['delete_id'];
    $delete_quary = "DELETE FROM skills WHERE id=$id";
    mysqli_query($db_connect,$delete_quary);
    header("location: skills.php");
}

if(isset($_GET['change_status'])){
    $id=$_GET['change_status'];
    print_r($id);
    $status_quary = "SELECT * FROM skills WHERE id=$id";
    $connect = mysqli_query($db_connect,$status_quary);
    $skill = mysqli_fetch_assoc($connect);

    if($skill['status'] == 'active'){
        $update_quary = "UPDATE skills SET status='deactive' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: skills.php");

    }else{
        $update_quary = "UPDATE skills SET status='active' WHERE id=$id";
        mysqli_query($db_connect,$update_quary);
        header("location: skills.php");
    }

}

if(isset($_POST['skill_edit'])){
    $title = $_POST['title2'];
    $year = $_POST['year2'];
    $skill_persentice = $_POST['skill_persentice2'];
    $id = $_POST['skill_id'];
    if($title && $year && $skill_persentice){
       $update_quary="UPDATE skills SET title='$title',year='$year',skill_persentice='$skill_persentice' WHERE id='$id'";
       mysqli_query($db_connect,$update_quary);
       $_SESSION['update_success']="Your Information Successfully Update.";
        
        header("location: skills.php");
    }
}


?>