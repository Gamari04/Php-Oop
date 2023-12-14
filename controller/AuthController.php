<?php
include (__DIR__ .'../../model/user.php') ;
     
class AuthController 
{
        public function register($fullname,$email,$password){
            $hashedPassword = password_hash($password,PASSWORD_BCRYPT); 
            $user=new User($fullname,$email,$hashedPassword);
            $user->create();
        }
} 

if(isset($_POST["addUser"])){
     $fullname =$_POST['fullname'];
     $email    =$_POST['email'];
     $password =$_POST['password'];
          
     $auth = new AuthController ();
     $auth->register($fullname,$email,$password);
           
    if ($auth) {
            
        header("Location: ./../views/login.php");
            
    } 
        
    }
 ?>