<?php
/*
 * Represent the Connection
 */
 // DB Params
 define('DB_HOST', 'localhost');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 define('DB_NAME', 'rudraksh');
 
class Connection
{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $conn;
    private $stmt;
    private $error;

    public function __construct()
    {
        // Set DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        // Create PDO instance
        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
            echo $this->error;
        }
    }

    public function Query($query, $param = null, $returnLastID = false)
    {
        $Q1 = $this->conn->prepare("SET NAMES utf8");
        $Q1->execute();

        $Q2 = $this->conn->prepare('SET CHARACTER SET utf8');
        $Q2->execute();
        $ID = null;

        if (is_null($param)) {
            $result = $this->conn->prepare($query);
            $result->execute();
            if ($returnLastID) {
                return $this->conn->lastInsertId();
            } else {
                return $result;
            }
        } else {
            $result = $this->conn->prepare($query);
            $result->execute($param);
            if ($returnLastID) {
                return $this->conn->lastInsertId();
            } else {
                return $result;
            }
        }
    }

}
