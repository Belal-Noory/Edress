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

    // add Enquiry
    public function addEnq($params)
    {
        $query = "INSERT INTO enquiry(fname,phone,email,visa,country,states)
         VALUES(?,?,?,?,?,?)";
        $result = $this->conn->Query($query, $params, true);
        return $result;
    }

    // add eligibility
    public function addEligibility($params)
    {
        $query = "INSERT INTO eligibility(name,phone,email,age,education,experince,visa,country,states)
         VALUES(?,?,?,?,?,?,?,?,?)";
        $result = $this->conn->Query($query, $params, true);
        return $result;
    }

}
