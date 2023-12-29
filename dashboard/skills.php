<?php

include('./extends/header.php');

include("../config/db.php");
$select_skill = "SELECT * FROM skills";
$skills = mysqli_query($db_connect,$select_skill);

$serial = 0;


?>


<div class="row">
        <div class="col">
            <div class="page-description">
            <h1>Skills</h1>
            </div>
        </div>
</div>
   
    <div class="row">
        <div class="col-12">
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Year</th>
      <th scope="col">skill_persentice</th></th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  foreach($skills as $skill) :?>
      
  <tr>
  
      <td scope="row"><?= ++$serial?></td>
      <td><i class=""></i><?=$skill['title']?></td>
      <td><?= $skill['year']?></td>
      <td><?= $skill['skill_persentice']?> %</td>
      <td>
        <?php if($skill['status'] =="active"):?>
        <a class="badge bg-success" href="skills_post.php?change_status=<?= $skill['id']?>"><?= $skill['status']?></a>
        <?php else: ?>
        <a class="badge bg-danger" href="skills_post.php?change_status=<?= $skill['id']?>"><?= $skill['status']?></a>
        <?php endif; ?>
      </td>
      <td>
        <a class="btn btn-primary" href="skills_edit.php?edit_id=<?= $skill['id']?>">Edit</a>
        <a class="btn btn-danger" href="skills_post.php?delete_id=<?= $skill['id']?>">Delete</a>
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