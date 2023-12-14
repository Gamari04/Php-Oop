<?php

require __DIR__ .'../../config/connection.php';
include (__DIR__ .'../../model/user.php') ;
include('../../views/login.php');

if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = login($email, $password, $connection);

    if ($user) {

        header("Location: ../index.php");
        

    } else {
        

        echo 'Identifiants incorrects.';
    }
}
