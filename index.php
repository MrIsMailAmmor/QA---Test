<?php
session_start();
if (!$_SESSION['id']) {
    header('location:login.php');
}
include './include/header.php' ?>
<div class="text-center ">
    <h1>Bonjour <?php echo ucfirst($_SESSION['first_name']); ?></h1>
    <h2> Vous êtes <?php echo ucfirst($_SESSION['Fonction']); ?></h2>
    <?php
    if ($_SESSION['Fonction'] == "Professeur") {
        echo '<a href="./ajouterExam.php"> Créer un examen </a>';
    } else {
        echo "<p> vous n'avez pas le droit de créer des examens, mais vous pouvez passer les examens</p>";
        echo '<a class="btn btn-info" href="./passerExam.php">Passez les examens</a>';
    }
    ?>
</div>
<?php include './include/footer.php' ?>
<?php
