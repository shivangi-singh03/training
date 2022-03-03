<?php
require_once("models/register_model.php");

$db_handle=new Register_Model();

$name=$_POST['name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$count=$this->con->check_user($username,$email);
if($count > 0)
{
echo 'This User Already Exists';
}
else
{
$data = array('id' =>null, 'name' =>$_POST['name'], 'username' =>$_POST['username'], 'email' =>$_POST['email'], 'password' =>$_POST['password']);
$this->con->insert_user($data);
}
header('location:index.php');

