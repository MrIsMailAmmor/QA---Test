<?php

class Exam extends Config
{
    private $pdo;
    private $title;
    //constructeur pour se connecter quand on initialise la classe
    function __construct()
    {
        $db = new Config();
        $connection = $db->connect();
        $this->pdo = $connection;
    }

    // recupére les exams de la base de données, et puis les affiche chacun son ID pour pouvoir les reconnaitres
    function getExams()
    {
        $data = $this->pdo->query("SELECT * FROM exam")->fetchAll();
        // and somewhere later:
        foreach ($data as $row) {
            $this->title = $row['Title'];
            $this->id = $row["Examid"];
?>
            <div class=" w-50 m-auto ">
                <h1 class="fw-bold"><?php echo $this->title ?></h1>

                <a class="btn btn-primary" type="submit" name="submit" href="./Exam.php?id=<?php echo $this->id ?>"> passer l'exam </a>
            </div>


<?php }
    }

    function sendExam()
    {
        $title = $_POST["titre"];
        $text = $_POST["text"];
        $motCacher = $_POST["motCacher"];
        $id = $_SESSION["id"];


        $sql = 'INSERT INTO exam (Title,TextArea,motCacher,professorID) VALUES(:title, :textArea, :motCacher,:id)';

        $statement = $this->pdo->prepare($sql);

        $statement->execute([
            ':title' => $title,
            ':textArea' => $text,
            ':motCacher' => $motCacher,
            ':id' => $id
        ]);
    }
}
