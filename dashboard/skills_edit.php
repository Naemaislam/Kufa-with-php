<?php

include('./extends/header.php');
include('./extends/icons.php');
include('../config/db.php');

$id =$_GET['edit_id'];
$skill_quary = "SELECT * FROM skills WHERE id=$id";
$connect = mysqli_query($db_connect,$skill_quary);
$skill =mysqli_fetch_assoc($connect);

?>


<div class="row">
        <div class="col">
            <div class="page-description">
            <h1>Skills Edit Page</h1>
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
    <form class="bg-white p-4" action="skills_post.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Skills Title-[<?=$skill['id']?>]</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title2" value="<?=$skill['title']?>" >
    <input type="hidden" value="<?=$skill['id']?>" name="title">
    <input type="hidden" value="<?=$skill['id']?>" name="skill_id">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Skills Archive</label>
    <textarea class="form-control" rows="5" name="year2"><?=$skill['year']?></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Skills Persentice</label>
    <select name="skill_persentice2" class="form-control">
    <?php for($i=1; $i <= 100;$i++) :?>
    <option value="<?= $i ?>">Your Skills Rate is <?= $i ?> %</option>
    <?php endfor ;?>
</select>
    <br>
 


  </div>
 
  
  <button type="submit" class="btn btn-primary" name="skill_edit">UPDATE</button>
</form>
        </div>
    </div>



<?php

include('./extends/footer.php');
?>