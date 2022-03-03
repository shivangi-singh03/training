<?php
class Register_Model
{   
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database="register";
    private $con;

    function __construct()
    {
        $this->con=$this->connectDB();
    }

    function connectDB()
    {
        $con=mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        return $con;
    }

    public function check_user($username,$email)
    {
    $result= $this->con->select("SELECT * FROM `user` WHERE username = '".$username."' OR email = '".$email."'");
    $count = count($result);
    return $count;
    }
    public function insert_user($data)
    {
    $this->con->insert('user', $data);
    }

}