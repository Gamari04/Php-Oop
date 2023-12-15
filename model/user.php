<?php
  require_once __DIR__ .'../../config/connection.php';

class User
{
    private $fullname;
    private $email;
    private $password;
    private $connection;

    public function __construct($fullname,$email,$password)
    {
        $this->fullname=$fullname;
        $this->email  =$email;
        $this->password=$password;
        $DB = new Database();
        $this->connection = $DB->getConnection();
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

    public function create()
    {
        $query = "INSERT INTO `user`(`fullname`, `email`,`password`) VALUES (?, ?, ?)";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('sss', $this->fullname, $this->email, $this->password);
        $result = $stmt->execute();
    
       
         return $result;
    } 

    public function view()
    {
        $query = "SELECT * FROM `user` WHERE email = '$this->email' ";
        $result = mysqli_query($this->connection, $query);
        $row = $result->fetch_assoc();
        // $users = [];

        // if ($result && mysqli_num_rows($result) > 0) {
        //     while ($userRow = mysqli_fetch_assoc($result)) {
        //         if (password_verify($this->password, $userRow['password'])) {
        //                          return $userRow;
        //                  }
        //         $users[] = $userRow;
        //     }
        // }

        return $row;
    }
    

}




// function login($email, $password, $connection) {
//     $query = "SELECT * FROM `user` WHERE email = '$email' ";
//     $result = mysqli_query($connection, $query);

//     if ($result && mysqli_num_rows($result) > 0) {
//         $user = mysqli_fetch_assoc($result);
//         if (password_verify($password, $user['password'])) {
//             return $user;
//         }
//     }

//     return false;
// }
?>