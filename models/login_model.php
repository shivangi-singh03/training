<?php
require_once('models/conn.php');
require_once('models/login_model.php');
class Login{
    
    public function getfunc(){
        if(isset($_REQUEST['uname']) && isset($_REQUEST['psw']))
        {
            
            if($_REQUEST['uname'] == $username && $_REQUEST['psw'] == $password)
            {
                return 'logged in';
            }
            else
            {
                return 'Invalid attempt';
            }
        }
    }
}
?>