<?php

class Register
{
    private $pdo;

    function __construct()
    {
        $db = new Config();
        $connection = $db->connect();
        $this->pdo = $connection;
    }

    function register()
    {
        if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
            $firstName = trim($_POST['first_name']);
            $lastName = trim($_POST['last_name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $fonction = trim($_POST['fonction']);
            $options = array("cost" => 4);
            $hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);
            $date = date('Y-m-d H:i:s');

            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $sql = 'select * from members where email = :email';
                $stmt = $this->pdo->prepare($sql);
                $p = ['email' => $email];
                $stmt->execute($p);

                if ($stmt->rowCount() == 0) {
                    $sql = "insert into members (Fonction,first_name, last_name, email, `password`, created_at,updated_at) values(:fonction,:fname,:lname,:email,:pass,:created_at,:updated_at)";

                    try {
                        $handle = $this->pdo->prepare($sql);
                        $params = [
                            ':fonction' => $fonction,
                            ':fname' => $firstName,
                            ':lname' => $lastName,
                            ':email' => $email,
                            ':pass' => $hashPassword,
                            ':created_at' => $date,
                            ':updated_at' => $date
                        ];

                        $handle->execute($params);

                        $success = 'User has been created successfully';
                    } catch (PDOException $e) {
                        $errors[] = $e->getMessage();
                    }
                } else {
                    $valFirstName = $firstName;
                    $valLastName = $lastName;
                    $valEmail = '';
                    $valPassword = $password;

                    $errors[] = 'Email address already registered';
                }
            } else {
                $errors[] = "Email address is not valid";
            }
        } else {
            if (!isset($_POST['first_name']) || empty($_POST['first_name'])) {
                $errors[] = 'First name is required';
            } else {
                $valFirstName = $_POST['first_name'];
            }
            if (!isset($_POST['last_name']) || empty($_POST['last_name'])) {
                $errors[] = 'Last name is required';
            } else {
                $valLastName = $_POST['last_name'];
            }

            if (!isset($_POST['email']) || empty($_POST['email'])) {
                $errors[] = 'Email is required';
            } else {
                $valEmail = $_POST['email'];
            }

            if (!isset($_POST['password']) || empty($_POST['password'])) {
                $errors[] = 'Password is required';
            } else {
                $valPassword = $_POST['password'];
            }
        }
    }
}
