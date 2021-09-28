<?php
session_start();
require "./include/header.php";
include "./include/CallClass.php";
?>
<body class="bg-dark">
    <div class="container h-100">
        <div class="row h-100 mt-5 justify-content-center align-items-center">
            <div class="col-md-5 mt-5 pt-2 pb-5 align-self-center border bg-light">
                <h1 class="mx-auto w-25">Login</h1>
                <?php
                if (isset($errors) && count($errors) > 0) {
                    foreach ($errors as $error_msg) {
                        echo '<div class="alert alert-danger">' . $error_msg . '</div>';
                    }
                }
                ?>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" placeholder="Enter Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Password:</label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <a href="register.php" class="btn btn-primary">Register</a>
                </form>
            </div>
        </div>
    </div>

</body>

<?php
if (isset($_POST['submit'])) {
    $dbs = new Login();
    $dbs->login();
}
require_once './include/footer.php' ?>
</html>