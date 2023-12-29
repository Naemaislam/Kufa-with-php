<?php

include('./extends/header.php');

include('../config/db.php');

$id =$_GET['edit_id'];
$testimonials_quary = "SELECT * FROM testimonials WHERE id=$id";
$connect = mysqli_query($db_connect,$testimonials_quary);
$testimonials =mysqli_fetch_assoc($connect);


?>


<div class="row">
        <div class="col">
            <div class="page-description">
            <h1>testimonial Uplode Page</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
        <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Library</li>
  </ol>
</nav>
        </div>
    </div>

    <div class="row">
    <form class="bg-white p-4" action="testimonial_post.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Testimonial Title-[<?=$testimonials['id']?>]</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="<?=$testimonials['title']?>">
    <input type="hidden" value="<?=$testimonials['id']?>" name="testimonials_id">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Testimonial Description</label>
    <textarea class="form-control" rows="5" name="description"><?=$testimonials['description']?></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Testimonial Name</label>
    <textarea class="form-control" rows="5" name="name"><?=$testimonials['name']?></textarea>
  </div>
  <div class="mb-3">
    <img src="../images/testimonial/<?=$testimonials['image']?>" style="width: 80px; height:80px; border-radius:50%;">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file" class="form-control" name="image">
    <br>
 




  </div>
 
  
  <button type="submit" class="btn btn-primary" name="testimonial_edit">UPDATE</button>
</form>
        </div>
    </div>



<?php

include('./extends/footer.php');
?>