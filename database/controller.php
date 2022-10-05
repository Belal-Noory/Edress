<?php
session_start();
require("Model.php");

$model = new Model();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Add new Enquiry
    if (isset($_POST["addenq"])) {
        $fname = $_POST["fname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $visa = $_POST["visa"];
        $country = $_POST["country"];
        $res = $model->addEnq([$fname,$phone,$email,$visa,$country,0,time()]);
        echo $res;
    }

    // Add new Eligibility
    if (isset($_POST["addeligi"])) {
        if(isset($_POST["name"]) && isset($_POST["phone"]) && isset($_POST["email"]) && isset($_POST["age"]) && 
        isset($_POST["education"]) && isset($_POST["experince"]) && isset($_POST["visa"]) && isset($_POST["country"]))
        {
            $fname = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $age = $_POST["age"];
            $education = $_POST["education"];
            $experince = $_POST["experince"];
            $visa = $_POST["visa"];
            $country = $_POST["country"];
            $res = $model->addEligibility([$fname,$phone,$email,$age,$education,$experince,$visa,$country,0,time()]);
            echo $res;
        }
        else{
            echo 0;
        }
    }

    // add post
    if(isset($_POST["addpost"]))
    {
        $title = $_POST["title"];
        $desc = $_POST["desc"];
        $img = $_FILES["img"]["name"];
        $date = time();
        $res = $model->addPost([$title,$desc,$img,$date]);
        move_uploaded_file($_FILES["img"]["tmp_name"],"../assets/uploads/$img");
        echo $res;
    }

    // delete post
    if(isset($_POST["deletepost"]))
    {
        $id = $_POST["id"];
        $img = $_POST["img"];
        $res = $model->deletePost($id);
        unlink("../assets/uploads/$img");
        echo $res;
    }

     // delete enq
     if(isset($_POST["deleteenq"]))
     {
         $id = $_POST["id"];
         $res = $model->deleteEnq($id);
         echo $res;
     }

     // delete eligibility
     if(isset($_POST["deleteelg"]))
     {
         $id = $_POST["id"];
         $res = $model->deleteElig($id);
         echo $res;
     }

      // login
    if(isset($_POST["login"]))
    {
        $username = $_POST["loginUsername"];
        $password = $_POST["loginPassword"];
        if($username == "rudraksh" && $password == "rudraksh@123")
        {
            $_SESSION["userlogin"] = "logined";
            echo 1;
        }else{
            echo 0;
        }
    }

     // logout
     if(isset($_POST["logout"]))
     {
        session_destroy();
        echo 1;
     }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    

}
