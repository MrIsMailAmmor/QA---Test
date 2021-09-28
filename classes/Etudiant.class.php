<?php
class Etudiant extends Exam
{
    private $pdo;
    private $etudiantId;
    private $examID;
    private $text;
    private $hiddenValue;

// constructeur pour se connecter a la base de donnée
    function __construct()
    {
        $db = new Config();
        $connection = $db->connect();
        $this->pdo = $connection;
    }

    //Recuperation des IDs
    function getIds($etudiantId, $examID)
    {
        $this->etudiantId = $etudiantId;
        $this->examID = $examID;
    }
    // verifier dans la base de donnée si l'etudiant à deja passer l'examen ou non, si oui on affiche pas l'examen mais un message, sinon on passe l'examen
    function checkIfSubmittedResult()
    {
        $data = $this->pdo->query("SELECT * FROM correctionetudiant WHERE motExamId = $this->examID AND EtudiantId = $this->etudiantId")->fetch();

        if ($data) {
            echo "<p class='text-white fs-2 text-center '> Vous avez deja passé l'examen " . $_SESSION["first_name"] . "<a href='./passerExam.php' class='text-white '><br>  Revenir à la page des examens</a>" . "</p>";
            return false;
        }
        return true;
        // si l'etudiant n'a pas passé l'examen, on lui present l'examen

    }

    // on cherche l'examen dans la base de donnée, avec une ID, 

    public function fetchIdExam()
    {
        $data = $this->pdo->query("SELECT * FROM exam WHERE ExamId = $this->examID")->fetchAll();
        // and somewhere later:
        foreach ($data as $row) {
            $this->title = $row['Title'];
            $this->text = $row['TextArea'];
            $this->hiddenValue =  explode(",", $row['motCacher']);
        }
    }

    //envoyer les reponses d'étudiant a la base de donné aprés une transformation
    function sendAnswersTodb()
    {
        $reponse = $_POST["reponse"];
        $reponseString = "";
        for ($i = 0; $i < count($reponse); $i++) {
            $reponseString .= $reponse[$i] . ",";
        }
        $query = 'INSERT INTO correctionetudiant(EtudiantId,motExam,motExamId) VALUES(?,?,?) ';
        $statement = $this->pdo->prepare($query);
        $statement->execute([
            $this->etudiantId,
            $reponseString,
            $this->examID,
        ]);
    }

// afficher tout les exams disponibles
    function presentExam()
    {
?>
        <div class="w-75 m-auto">
            <h1 class="fw-bold"><?php echo $this->title ?></h1>
            <p class="lh-lg fs-4 " id="TextExam"><?php echo $this->text ?></p>
            <button class="btn btn-primary" type="submit" name="submit"> submit </button>
        </div>;
<?php
    }

    //transformer le text, remplacer les mots caché par les buttons
    function transformText()
    {
        $anchor =  "<a id='btnMot' class='btn btn-danger btnMot '>Mot</a>";
        $anchorMoreThanTwo = "<a id='btnMot' class='btn btn-danger  btnMotLarge  '>Expression</a>";


        for ($i = 0; $i < count($this->hiddenValue); $i++) {
            if (stripos($this->hiddenValue[$i], ' ')) {
                $this->text = str_replace($this->hiddenValue[$i], $anchorMoreThanTwo, $this->text);
            } else {
                $this->text =  str_replace($this->hiddenValue[$i], $anchor, $this->text);
            }
        }
    }
}
