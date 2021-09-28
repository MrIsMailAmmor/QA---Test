<?php
session_start();
include "./include/CallClass.php";
include "./include/header.php";
?>
<link rel="stylesheet" href="./include/styleExam.css">
<h1> Exam Exemple : </h1>
<form method="post">
    <p id="examZone" class="w-50 font-monospace bg-dark text-white">
        <?php

        // Récuperation des informations et affichage des resultats
        $etudiantId = $_SESSION['id'];
        $examID = $_GET['id'];
        $exam = new Exam();
        $etudiant = new Etudiant();
        $etudiant->getIds($etudiantId, $examID);
        if ($etudiant->checkIfSubmittedResult()) {
            $etudiant->fetchIdExam();
            $etudiant->transformText();
            $etudiant->presentExam();
        }
        ?>
    </p>
</form>
<?php
if (isset($_POST["submit"])) {

    // l'envoie des informations a la base de données
    $etudiant->sendAnswersTodb();
    // Redirection vers la page pour dire qu'on a bien récupérer les resultats
    echo "<script type='text/javascript'>window.location.href = 'examenReussi.php';</script>";
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./include/scriptforstudent.js"></script>
<?php require_once './include/footer.php';

?>