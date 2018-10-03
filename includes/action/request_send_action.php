<?php
session_start();
if(!isset($_SESSION['isLogged'])){
    header('Location: index.php');
    exit();
}

if(isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['csrf_token'])){

    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $csrf_token_from_form = $_POST['csrf_token'];
    $csrf_token_from_session = $_SESSION['csrf_token'];
  
    if($csrf_token_from_session===$csrf_token_from_form){
        header("Location: ../../send_request.php?response=Request Successfully Sent! Token Matched.");
        exit;

    }else{
        header("Location: ../../index.php?response=Request Sending Failed! Token Miss-Match.");
        exit;

    }
}else{
    die();
    header("Location: ../../index.php");
    exit;
}
?>