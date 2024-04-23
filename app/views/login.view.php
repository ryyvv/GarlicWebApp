<?php require('./app/partials/header.php') ?>

<main class="login">
    <div class="row justify-content-center align-items-center" style="  margin-top:10%; margin-bottom:10%; ">
       <div class="col col-3">
            <img src="../../src/garliclogo.png" width="380" height="380">
        </div>
        <div class="col col-3 cardDashboard">
            <?php
            if(isset($_SESSION['status'])){
                echo "<h5> class='alert alert-success'>" .$_SESSION['status']. "</h5>";
                unset($_SESSION['status']);
            }
            ?>
            <form method="POST" action="login.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" name="login_btn" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</main>

<?php require('./app/partials/footer.php') ?>