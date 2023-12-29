<?php

include('./extends/header.php');
?>

<div class="row">
    <div class="col">
        <div class="page-description">
            <h1>Profile</h1>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h1>Update Name</h1>
            </div>
            <div class="card-body">
                <form action="profile_post.php" method="POST">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

                    <button type="submit" class="btn btn-primary btn-sm mt-4" name="name_update">update</button>
                </form>
            </div>

        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h1>Update Email</h1>
            </div>
            <div class="card-body">
                <form action="profile_post.php" method="POST">
                    <label for="exampleInputEmail1" class="form-label">User Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

                    <button type="submit" class="btn btn-primary btn-sm mt-4" name="email_update">update</button>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="col-6">
    <div class="card">
        <div class="card-header">
            <h1>Update Password</h1>
        </div>
        <div class="card-body">
            <form action="profile_post.php" method="POST">
                <label for="exampleInputEmail1" class="form-label">Current_password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Current_password">

                <label for="exampleInputEmail1" class="form-label">New_password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="New_password">
                <label for="exampleInputEmail1" class="form-label">Confirm_password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Confirm_password">

                <button type="submit" class="btn btn-primary btn-sm mt-4" name="password_update">update</button>
            </form>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h1>Update Profile Image</h1>
            </div>
            <div class="card-body">
                <form action="profile_post.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <img src="../images/profile/<?= $_SESSION['admin_image'] ?>" style="width: 150px;height:150px; border-radius:50%;">
                    </div>
                    <br>
                    <label for="exampleInputEmail1" class="form-label">Image</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->

                    <button type="submit" class="btn btn-primary btn-sm mt-4" name="image_update">update</button>
                </form>
            </div>

        </div>
    </div>


    <?php

    require('./extends/footer.php');
    ?>