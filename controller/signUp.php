<?php
    //   require __DIR__ .'../../config/connection.php';
     include (__DIR__ .'../../model/user.php') ;
     
        include(__DIR__ .'../../views/signUp.php');

        if(isset($_POST["addUser"])){
            $fullname =$_POST['fullname'];
            $email    =$_POST['email'];
            $password = password_hash($_POST["password"],PASSWORD_BCRYPT); 
            $resultat=signup($fullname,$email,$password,$connection );
           
if ($resultat) {
    
     header("Location: ../../views/login.php");
    
 } 
        }
 ?>