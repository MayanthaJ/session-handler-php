<?php
include('../class/login.php');

if(isset($_POST['login-email']) && isset($_POST['login-password'])){
    $loginemail=$_POST['login-email'];
    $loginpassword=$_POST['login-password'];
    $Login = new Login;

    $res = $Login->auth($loginemail,$loginpassword);

    if($res==1){
        header("Location: ../../send_request.php?response=Login Success!");
        exit;
    }elseif($res==2){
        header("Location: ../../index.php?response=Error! Check your password.");
        exit;
    }elseif($res==3){
        header("Location: ../../index.php?response=Error! Check your email.");
        exit;
    }elseif($res==4){
        header("Location: ../../index.php?response=Error! Check your email and password.");
        exit;
    }
}else{
    header("Location: ../../index.php");
    exit;
}
?>