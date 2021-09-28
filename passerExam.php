<?php
session_start();
include "./include/header.php";
include "./include/CallClass.php";
if (!$_SESSION['id']) {
    header('location:login.php');
}




?>
<link rel="stylesheet" href="./include/styleExam.css">
<h1> Exam Exemple : </h1>
<form method="post" action="">
    <p id="examZone" class="w-50 font-monospace bg-dark text-white">
        <?php
        if ($_SESSION["Fonction"] === "Professeur") {
            echo "Vous êtes Professeur, vous ne pouvez pas passer d'examen, Revenez en tant qu'étudiant.";
            header("location:ajouterExam.php");
        }
        $exam = new Exam();
        $exam->getExams();
        ?>
    </p>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./include/scriptforstudent.js"></script>
<?php require_once './include/footer.php' ?>