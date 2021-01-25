<?php
    $server = "127.0.0.1";
    $user = "lucygm";
    $password = "izquierdo 1711";
    $database = "BlogInformatica";
    $db = mysqli_connect($server,$user,$password,$database);

    function ContactExist($db, $email){
        $query = 'SELECT * FROM User WHERE user_email = "'.$email.'";';
        $resultado=mysqli_query($db,$query);

        if(mysqli_num_rows($resultado)>0){
            return true;
        }else{
            return false;
        }
    }

    function InsertUser($db, $name, $lastName, $email, $password, $birthdate){

        $birthdateDate = date_create_from_format('Y-m-d',$birthdate);
        $birthdateNewFormat = date_format($birthdateDate,'Y-m-d H:i:s');

        $query = "INSERT INTO User VALUE('$email','$name','$lastName','$password','$birthdateNewFormat');";
        $result = mysqli_query($db,$query);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }
