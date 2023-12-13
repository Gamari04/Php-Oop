<?php
  require_once __DIR__ .'../../config/connection.php';

class User
{
    private $fullname;
    private $email;
    private $password;

    public function __construct($fullname,$email,$password)
    {
        $this->fullname=$fullname;
        $this->email  =$email;
        $this->password=$password;
    }

    public function getFullname()
    {
        return $this->fullname;
    }

    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}


function signup($fullname,$email,$password){
            
    $query = "INSERT INTO `user`(`fullname`, `email`,`password`) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, 'sss', $fullname, $email, $password,$connection);
    $result = mysqli_stmt_execute($stmt);

   
     return $result;
} 
?>