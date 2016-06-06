<?php
session_start();
require_once("Controller/class.user.php");
$login = new USER();

if($login->is_loggedin()!="")
{
    $login->redirect('compte.php');
}

if(isset($_POST['btn-login']))
{
    $uname = strip_tags($_POST['txt_uname_email']);
    $umail = strip_tags($_POST['txt_uname_email']);
    $upass = strip_tags($_POST['txt_password']);

    if($login->doLogin($uname,$umail,$upass))
    {
        $login->redirect('compte.php');
    }
    else
    {
        $error = "Mauvais éléments";
    }
}
