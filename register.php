<?php 
session_start();
if(!isset($_SESSION)){
    header("location:index.php");
}
include_once "./include/CallClass.php";
include "./include/header.php" ;

 ?>

<body class="bg-dark">

    <div class="container h-100">
        <div class="row h-100 mt-5 justify-content-center align-items-center">
            <div class="col-md-5 mt-3 pt-2 pb-5 align-self-center border bg-light">
                <h1 class="mx-auto w-25">Register</h1>

                <form method="POST" action="">
                    <div class="form-group">
                        <label for="Fonction">Vous êtes : </label>
                        <select name="fonction" class="form-select">
                            <option></option>
                            <option value="Etudiant">Etudiant</option>
                            <option value="Professeur">Professeur</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">First Name:</label>
                        <input type="text" name="first_name" placeholder="Enter First Name" class="form-control" value="<?php echo ($valFirstName ?? '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Last Name:</label>
                        <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control" value="<?php echo ($valLastName ?? '') ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" placeholder="Enter Email" class="form-control" value="<?php echo ($valEmail ?? '') ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Password:</label>
                        <input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php echo ($valPassword ?? '') ?>">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <p class="pt-2"> Back to <a href="./login.php">Login</a></p>

                </form>
            </div>
        </div>
    </div>

    <?php 
    if(isset($_POST['submit']))
    {
        //  instantier la class pour entregistrer un nouveau utilisateur
     $newUser = new Register();
     $newUser->register();
    }
    ?>
</body>


 <?php require_once './include/footer.php' ?>
