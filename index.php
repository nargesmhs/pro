<?php
session_start();
require "config.php" ;

$message='';

if (isset($_POST['_Login'])) 
{
    $adm = new admin();
    $adm->set_username($_POST['_Username']);
    $adm->set_password($_POST['_Password']);

    if(check_user_pass())
    {
        
    }

    $message = 'invalid username or password';

}

include $viewpath."login.html";



?>