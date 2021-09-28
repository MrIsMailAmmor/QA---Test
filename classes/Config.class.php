<?php



class Config
{
    private $host;
    private $db;
    private $user;
    private $pass;
    private $port;
    private $charset;

    public function connect()
    {
        $this->host = '127.0.0.1';
        $this->db   = 'test';
        $this->user = 'root';
        $this->pass = '';
        $this->port = "3306";
        $this->charset = 'utf8mb4';

        try {
            $dsn = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset.";port=".$this->port;
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (\PDOException $e) {
            echo "connection failed: " . $e->getMessage();
        }
    }

   
}
