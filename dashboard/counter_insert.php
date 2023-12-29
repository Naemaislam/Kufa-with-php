<?php

include('./extends/header.php');
include('./extends/icons.php');
?>


<div class="row">
  <div class="col">
    <div class="page-description">
      <h1>Counter</h1>
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
  <form class="bg-white p-4" action="counter_post.php" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Counter Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Counter Number</label>
      <input type="number" class="form-control" rows="5" name="number"></input>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Icon</label>
      <input type="text" class="form-control" id="hello" name="icon">
      <br>
      <div class="card">
        <div class="card-body">
          <?php foreach ($fonts as $font) : ?>
            <span class="fa-2x m-3"><i onclick="myFun(event)" class="<?= $font ?>"></i></span>
          <?php endforeach; ?>
        </div>
      </div>

      <script>
        let input = document.getElementById('hello');

        function myFun() {
          // console.log(event.target.getAttribute('class'));
          input.value = event.target.getAttribute('class');
        }
      </script>


    </div>


    <button type="submit" class="btn btn-primary" name="counter_insert">INSERT</button>
  </form>
</div>
</div>



<?php

include('./extends/footer.php');
?>