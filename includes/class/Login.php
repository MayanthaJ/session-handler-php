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
            return 2;
        }elseif(($this->password == $password)){
            return 3;
        }else{
            return 4;
        }
    } 
    
    function setSessionVariables($status){
        if($status==true){
            $_SESSION['isLogged']=true;
            $_SESSION['csrf_token'] = md5(uniqid(rand(), TRUE));

            $cookie_name = "SessionHandlerAuth";
            $cookie_value =session_id();
            $_SESSION['cookie_value'] =$cookie_value;
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        }
    }

}

?>