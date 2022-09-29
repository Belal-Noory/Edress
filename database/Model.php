<?php
require("Connection.php");
class Model
{
    // Database class
    private $conn;

    public function __construct()
    {
        $this->conn = new Connection();
    }

    public function addEnq($params)
    {
        $query = "INSERT INTO enquiry(fname,phone,email,visa,country,states)
         VALUES(?,?,?,?,?,?)";
        $result = $this->conn->Query($query, $params, true);
        return $result;
    }

}
