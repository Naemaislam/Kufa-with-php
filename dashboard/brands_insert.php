<?php

include('./extends/header.php');

?>


<div class="row">
  <div class="col">
    <div class="page-description">
      <h1>Brands</h1>
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
      <label for="exampleInputPassword1" class="form-label">Brand image</label>
      <input type="file" class="form-control" id="hello" name="image">
    </div>


    <button type="submit" class="btn btn-primary" name="brands_insert">INSERT</button>
  </form>
</div>
</div>



<?php

include('./extends/footer.php');
?>