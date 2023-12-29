<?php

include('./extends/header.php');

include("../config/db.php");
$select_brands = "SELECT * FROM brands";
$brands = mysqli_query($db_connect, $select_brands);
$serial = 0;

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
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">image</th>
          <!-- <th scope="col">Title</th>
      <th scope="col">description</th> -->
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($brands as $brand) : ?>
          <tr>

            <td scope="row"><?= ++$serial ?></td>
            <td>
              <img src="../images/brands/<?= $brand['image'] ?>" alt="" style="width: 80px; height:80px;">
            </td>
            <td>
              <?php if ($brand['status'] == "active") : ?>
                <a class="badge bg-success" href="brands_post.php?change_status=<?= $brand['id'] ?>"><?= $brand['status'] ?></a>
              <?php else : ?>
                <a class="badge bg-danger" href="brands_post.php?change_status=<?= $brand['id'] ?>"><?= $brand['status'] ?></a>
              <?php endif; ?>
            </td>
            <td>
              <a class="btn btn-primary" href="brands_edit.php?edit_id=<?= $brand['id'] ?>">Edit</a>
              <a class="btn btn-danger" href="brands_post.php?delete_id=<?= $brand['id'] ?>">Delete</a>
            </td>

          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php if (isset($_SESSION['insert_success'])) : ?>
  <script>
    Swal.fire({

      position: 'top-end',
      icon: 'success',
      title: '<?= $_SESSION['insert_success'] ?>',
      showConfirmButton: false,
      timer: 1500
    })
  </script>
<?php endif;
unset($_SESSION['insert_success']) ?>



<?php

include('./extends/footer.php');
?>