<?php

include('./extends/header.php');

include("../config/db.php");
$select_testimonial = "SELECT * FROM testimonials";
$testimonials = mysqli_query($db_connect,$select_testimonial);

$serial = 0;

?>


<div class="row">
        <div class="col">
            <div class="page-description">
            <h1>Testimonials</h1>
            </div>
        </div>
</div>
   
    <div class="row">
        <div class="col-12">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">Title</th>
      <th scope="col">Name</th>
      <th scope="col">description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach($testimonials as $testimonial) :?>
  <tr>
  
      <td scope="row"><?= ++$serial?></td>
      <td>
        <img src="../images/testimonial/<?= $testimonial['image']?>" alt="" style="width: 80px; height:80px;">
    </td>
      <td><?= $testimonial['title']?></td>
      <td><?= $testimonial['name']?></td>
      <td><?= $testimonial['description']?></td>
      <td>
        <?php if($testimonial['status'] =="active"):?>
        <a class="badge bg-success" href="testimonial_post.php?change_status=<?= $testimonial['id']?>"><?= $testimonial['status']?></a>
        <?php else: ?>
        <a class="badge bg-danger" href="testimonial_post.php?change_status=<?= $testimonial['id']?>"><?= $testimonial['status']?></a>
        <?php endif; ?>
      </td>
      <td>
        <a class="btn btn-primary" href="testimonial_edit.php?edit_id=<?= $testimonial['id']?>">Edit</a>
        <a class="btn btn-danger" href="testimonial_post.php?delete_id=<?= $testimonial['id']?>">Delete</a>
      </td>
      
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
        </div>
    </div>

    <?php if(isset($_SESSION['insert_success'])):?>
  <script>
  Swal.fire({
    
    position: 'top-end',
    icon: 'success',
    title: '<?=$_SESSION['insert_success']?>',
    showConfirmButton: false,
    timer: 1500
  })

  </script>
  <?php endif; unset($_SESSION['insert_success'])?>



<?php

include('./extends/footer.php');
?>