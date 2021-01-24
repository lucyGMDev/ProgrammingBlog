<?php
    if(!isset($_SESSION)) session_start();

    $name = isset($_POST['name']) ? htmlentities($_POST['name']) : "";
    $lastName = isset($_POST['last_name']) ? htmlentities($_POST['last_name']) : "";
    $email = isset($_POST['email']) ? htmlentities($_POST['email']) : "";
    $password = isset($_POST['password']) ? htmlentities($_POST['password']) : "";
    $birthdate = isset($_POST['birthdate']) ? htmlentities($_POST['birthdate']) : "";

    $error = array();
    $next_page = "/BlogInformatica/index.php";

    if($name == "" || $lastName == "" || $email == "" || $password == "" || $birthdate == "")
    {
        $error['formError']="You have to fill in all the form fields";
        $_SESSION['error']=$error;
    }


    header('Location: '.$next_page);
