<?php

class Login
{
    private $pdo;

    function __construct()
    {
        $db = new Config();
        $connection = $db->connect();
        $this->pdo =$connection;
    }


    function login()
    {
        if (isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $sql = "select * from members where email = :email";
                $handle = $this->pdo->prepare($sql);
                $params = ['email' => $email];
                $handle->execute($params);
                if ($handle->rowCount() > 0) {
                    $getRow = $handle->fetch(PDO::FETCH_ASSOC);
                    if (password_verify($password, $getRow['password'])) {
                        unset($getRow['password']);
                        $_SESSION = $getRow;
                        header("location:index.php");
                        exit;
                    } else {
                        $errors[] = "Wrong Email or Password";
                    }
                } else {
                    $errors[] = "Wrong Email or Password";
                }
            } else {
                $errors[] = "Email address is not valid";
            }
        } else {
            $errors[] = "Email and Password are required";
        }
    }
}
