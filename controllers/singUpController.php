<?php
    require_once '../includes/databaseManager.php';
    if(!isset($_SESSION)) session_start();

    $name = isset($_POST['name']) ? mysqli_escape_string($db,htmlentities($_POST['name'])) : "";
    $lastName = isset($_POST['last_name']) ? mysqli_escape_string($db,htmlentities($_POST['last_name'])) : "";
    $email = isset($_POST['email']) ? mysqli_escape_string($db,htmlentities($_POST['email'])) : "";
    $password = isset($_POST['password']) ? mysqli_escape_string($db,htmlentities($_POST['password'])) : "";
    $confirmPasword = isset($_POST['confirmPassword']) ? mysqli_escape_string($db,htmlentities($_POST['confirmPassword'])) : "";
    $birthdate = isset($_POST['birthdate']) ? mysqli_escape_string($db,htmlentities($_POST['birthdate'])) : "";

    $error = array();
    $next_page = "/BlogInformatica/index.php";

    if($name == "" || $lastName == "" || $email == "" || $password == "" || $birthdate == "")
    {
        $error['formError']="You have to fill in all the form fields";
        $_SESSION['error']=$error;
    }

    if(preg_match('/[0-9]/',$name)){
        $error['name'] = "Name can't contains numbers";
    }
    if(preg_match('/[0-9]/', $lastName)){
        $error['lastName'] = "Last Name can't contains numbers";
    }

    if(ContactExist($db,$email)){
        $error['email'] = "Exists an user with this email";
    }



    if($password !== $confirmPasword){
        $error['password']="Passwords have to be the same";
    }

    if(count($error)==0){
        $secure_password = password_hash($password,PASSWORD_BCRYPT,['cost'=>4]);
        $ret = InsertUser($db,$name,$lastName,$email,$secure_password,$birthdate);

        if(!$ret){
            $error['save_user'] = "Error saving user";
        }
    }

    if(count($error)!=0){
        $_SESSION['error']=$error;
    }else{
        $_SESSION['successMessage']="You have registered successfully";
        $_SESSION['user']['email']=$email;
    }

    header('Location: '.$next_page);
