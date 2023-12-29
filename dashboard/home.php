<?php
include('./extends/header.php');

?>


<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Dashboard</h1>
            <h5>Welcome</h5>
            <p>ID :<?= $_SESSION['admin_id']; ?></p>
            <p>NAME :<?= $_SESSION['admin_name']; ?></p>
        </div>
    </div>
</div>

<?php
include('./extends/footer.php');

?>