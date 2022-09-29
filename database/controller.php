<?php
require("Model.php");

$model = new Model();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Add new bank
    if (isset($_POST["addenq"])) {
        $fname = $_POST["fname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $visa = $_POST["visa"];
        $country = $_POST["country"];
        $res = $model->addEnq([$fname,$phone,$email,$visa,$country,0]);
        echo $res;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    

}
