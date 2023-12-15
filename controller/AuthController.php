<?php
include (__DIR__ .'../../model/user.php') ;
     
class AuthController 
{
        public function register($fullname,$email,$password)
        {
            $hashedPassword = password_hash($password,PASSWORD_BCRYPT); 
            $user=new User($fullname,$email,$hashedPassword);
            $user->create();
        }
        public function login($email,$password)
        {
           
            $user=new User(null,$email,null);
            $row=$user->view();
            if(isset($row)){
                echo "error";
            }else{
                 if(password_verify($password,$row['password'])){
                    header("Location: ../index.php");
                    }
            }
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

    if(isset($_POST["login"])){
        $email    =$_POST['email'];
        $password =$_POST['password'];
        $auth = new AuthController();
        $auth->login($email,$password);
    }
 ?>