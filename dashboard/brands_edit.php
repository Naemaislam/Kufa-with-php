<?php

include('./extends/header.php');

include('../config/db.php');

$id = $_GET['edit_id'];
$brands_quary = "SELECT * FROM brands WHERE id=$id";
$connect = mysqli_query($db_connect, $brands_quary);
$brands = mysqli_fetch_assoc($connect);


?>


<div class="row">
  <div class="col">
    <div class="page-description">
      <h1>Brand Edit Page</h1>
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
  <form class="bg-white p-4" action="brands_post.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <img src="../images/brands/<?= $brands['image'] ?>" style="width: 80px; height:80px;">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Image</label>
      <input type="file" class="form-control" name="image">
      <br>
    </div>
    <button type="submit" class="btn btn-primary" name="brands_edit">UPDATE</button>
  </form>
</div>
</div>



<?php

include('./extends/footer.php');
?>