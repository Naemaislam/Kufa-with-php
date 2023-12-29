<?php

include('./extends/header.php');

include("../config/db.php");
$select_counter = "SELECT * FROM counters";
$counters = mysqli_query($db_connect, $select_counter);

$serial = 0;

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
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">icon</th>
          <th scope="col">Title</th>
          <th scope="col">Number</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($counters as $counter) : ?>
          <tr>

            <td scope="row"><?= ++$serial ?></td>
            <td><i class="<?= $counter['icon'] ?>"></i></td>
            <td><?= $counter['title'] ?></td>
            <td><?= $counter['number'] ?></td>
            <td>
              <?php if ($counter['status'] == "active") : ?>
                <a class="badge bg-success" href="counter_post.php?change_status=<?= $counter['id'] ?>"><?= $counter['status'] ?></a>
              <?php else : ?>
                <a class="badge bg-danger" href="counter_post.php?change_status=<?= $counter['id'] ?>"><?= $counter['status'] ?></a>
              <?php endif; ?>
            </td>
            <td>
              <a class="btn btn-primary" href="counter_edit.php?edit_id=<?= $counter['id'] ?>">Edit</a>
              <a class="btn btn-danger" href="counter_post.php?delete_id=<?= $counter['id'] ?>">Delete</a>
            </td>

          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php if (isset($_SESSION['update_success'])) : ?>
  <script>
    Swal.fire({

      position: 'top-end',
      icon: 'success',
      title: '<?= $_SESSION['update_success'] ?>',
      showConfirmButton: false,
      timer: 1500
    })
  </script>
<?php endif;
unset($_SESSION['update_success']) ?>



<?php

include('./extends/footer.php');
?>