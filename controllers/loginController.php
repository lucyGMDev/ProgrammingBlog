<?php
    require_once '../includes/databaseManager.php';
    if(!isset($_SESSION)) session_start();

    $email = isset($_POST['email']) ? mysqli_escape_string($db,htmlentities($_POST['email'])) : "";
    $password = isset($_POST['password']) ? mysqli_escape_string($db,htmlentities($_POST['password'])) : "";

    $error = array();
    $nextPage = "/BlogInformatica/index.php";

    if($email == "" || $password == ""){
        $error['formError'] = "The password or email can't be void";
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error['email']= "Email is invalid";
    }else{
        if(!ContactExist($db,$email)){
            $error['email']="There aren't any user with this email";
        }else{
            echo $password.'<br/>';
            if(CheckPassword($db,$email,$password)){
                $_SESSION['user']['email']=$email;
            }else{
                $error['password']="Password doesn't correspond to any user";
            }
        }
    }

    if(count($error)>0){
        $_SESSION['loginError']=$error;
    }

    header('Location: '.$nextPage);