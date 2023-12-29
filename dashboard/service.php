<?php

include('./extends/header.php');

include("../config/db.php");
$select_service = "SELECT * FROM services";
$service = mysqli_query($db_connect,$select_service);

$serial = 0;

?>


<div class="row">
        <div class="col">
            <div class="page-description">
            <h1>Service</h1>
            </div>
        </div>
</div>
   
    <div class="row">
        <div class="col-12">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">icon</th>
      <th scope="col">Title</th>
      <th scope="col">description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach($service as $service) :?>
  <tr>
  
      <td scope="row"><?= ++$serial?></td>
      <td><i class="<?= $service['icon']?>"></i></td>
      <td><?= $service['service_title']?></td>
      <td><?= $service['description']?></td>
      <td>
        <?php if($service['status'] =="active"):?>
        <a class="badge bg-success" href="service_post.php?change_status=<?= $service['id']?>"><?= $service['status']?></a>
        <?php else: ?>
        <a class="badge bg-danger" href="service_post.php?change_status=<?= $service['id']?>"><?= $service['status']?></a>
        <?php endif; ?>
      </td>
      <td>
        <a class="btn btn-primary" href="service_edit.php?edit_id=<?= $service['id']?>">Edit</a>
        <a class="btn btn-danger" href="service_post.php?delete_id=<?= $service['id']?>">Delete</a>
      </td>
      
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
        </div>
    </div>

    <?php if(isset($_SESSION['update_success'])):?>
  <script>
  Swal.fire({
    
    position: 'top-end',
    icon: 'success',
    title: '<?=$_SESSION['update_success']?>',
    showConfirmButton: false,
    timer: 1500
  })

  </script>
  <?php endif; unset($_SESSION['update_success'])?>



<?php

include('./extends/footer.php');
?>