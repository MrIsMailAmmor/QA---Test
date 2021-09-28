<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qa Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
    <link href="./include/style.css" type="text/css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">QA Exam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Accueil</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='./ajouterExam.php'>nouveau exam</a>
                    </li>   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            vous êtes
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./passerExam.php">Etudiant</a></li>
                            <li><a class="dropdown-item" href="./ajouterExam.php">Professeur</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                </ul>
                <?php
                if (empty($_SESSION)) {
                    echo '<ul class="navbar-nav d-flex ">
                    <li class="nav-item"><a href="./login.php" class="nav-link">Se connecter</a></li>
                    <li class="nav-item"><a href="./register.php" class="nav-link">S\'inscrire</a> </li>
                    </ul>';
                } else {
                    echo '<ul class="navbar-nav d-flex ">
                    <li class="nav-item"><a href="./logout.php?logout=true" class="nav-link">se deconnecter</a></li>
                </ul>';
                }
                ?>

            </div>
        </div>


    </nav>
