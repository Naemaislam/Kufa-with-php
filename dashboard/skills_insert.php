<?php

include('./extends/header.php');
include('./extends/icons.php');
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
    <label for="exampleInputEmail1" class="form-label">Skills Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
     
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Skills Archive</label>
    <textarea class="form-control" rows="5" name="year"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Skills Persentice</label>
    <!-- <input type="text" class="form-control" id="hello" name="skill_persentice"> -->
    <select name="skill_persentice" class="form-control">
    <?php for($i=1; $i <= 100;$i++) :?>
    <option value="<?= $i ?>">Your Skills Rate is <?= $i ?> %</option>
    <?php endfor ;?>
</select>
  <!-- <div class="card">
    <div class="card-body">
      <?php foreach($fonts as $font) :?>
      <span class="fa-2x m-3"><i onclick="myFun(event)" class="<?= $font ?>"></i></span>
      <?php endforeach; ?>
    </div>
  </div> -->




  </div>
 
  
  <button type="submit" class="btn btn-primary" name="skills_insert">INSERT</button>
</form>
        </div>
    </div>



<?php

include('./extends/footer.php');
?>