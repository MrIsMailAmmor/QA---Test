<?php
session_start();
include "./include/header.php";
if (!$_SESSION['id']) {
    header('location:login.php');
}
if ($_SESSION["Fonction"] === "Etudiant") {
    header("location: index.php");
}

include "./include/CallClass.php";
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<style>
    #nextBtn {
        float: right;
        margin-top: 10px;
        padding: 15px;
    }

    .zone {
        margin: auto;
    }

    #container {
        visibility: hidden;
    }
</style>

<body class="bg-dark">

    <h1 class="text-white text-center">Bonjour Professeur :<?php echo $_SESSION["first_name"] ?></h1>
    <div class="w-100 d-flex text-center">
        <div class="form-group row w-50 m-auto m-auto" id="first-row">
            <form action="ajouterExam.php" method="post">
                <label for="titre" class="text-white text-center">Titre de l'examen à trou</label>
                <input type="text" class="form-control bg-light border-light"  name="titre">

                <label for="text" class="text-white">Zone pour le texte</label>
                <textarea id="textarea" type="textarea"  class="form-control bg-light border-light" name="text" rows="15">scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ip</textarea>
                <a class="btn btn-primary w-25 m-auto mt-5" id="nextBtn">Suivant</a>
        </div>
    </div>
    <div id="container" class="d-flex m-auto">
        <div class="text-white zone w-25" id="content2">
            <h1>Selectionner les mots à caché</h1>
            <p id="paragraphe"></p>
            <a class="btn btn-danger m-auto" id="delete">effacer tout</a>
        </div>
        <div class="w-25 text-white  zone" id="content2">
            <h1> les mots selectionné</h1>
            <textarea name="motCacher" id="textCache" cols="50" rows="10" value="" placeholder="something"></textarea>
            <button class="btn btn-primary m-auto  w-50" id="finish" type="submit" name="submit">Finish</button>
            </form>
        </div>
        <?php
        if(isset($_POST["submit"])){
            $ExamSent = new Exam();
            $ExamSent->sendExam();
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./include/script.js"></script>

</body>

<?php
include "./include/footer.php"; ?>