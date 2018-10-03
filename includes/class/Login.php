<?php
session_start();

class Login{

    private $email = 'test@test.com'; 
    private $password = 'test123'; 
    
    function auth($email,$password) { 
        if(($this->email==$email) && ($this->password == $password)){
            $status = true;
            $this->setSessionVariables($status);
            return 1;
        }elseif(($this->email==$email)){
            $status = false;
            $this->setSessionVariables($status);
            return 2;
        }elseif(($this->password == $password)){
            $status = false;
            $this->setSessionVariables($status);
            return 3;
        }else{
            $status = false;
            $this->setSessionVariables($status);
            return 4;
        }
    } 
    
    function setSessionVariables($status){
        if($status==true){
            $_SESSION['isLogged']=true;
        }else{
            $_SESSION['isLogged']=false;
        }
    }

}

?>