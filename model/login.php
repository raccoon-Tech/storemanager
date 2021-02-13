<?php

include_once "config.php";
// include_once "../controllers/Dbconnection.php";

$db= new DbConnection("localhost","project","root","");
// include_once "model/register.php";
$password_login_error="";
$email_login_error="";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $email_check= $db->select("SELECT password FROM users WHERE email = :email",
    ['email'=>$_POST["login_email"],
    
    ]);
    if(!empty($email_check) ){
       
    $pass = $_POST["login_pswd"];
// $hashed = password_hash($password,PASSWORD_DEFAULT);
// print_r($row);
// print_r($pass);
    if(password_verify($pass, $email_check[0]['password'])){
        echo "match";
     $pswd_check = $db->select("SELECT * FROM users WHERE password = :password LIMIT 1",
         ['password'=>$email_check[0]['password'],
         ]);
         $_SESSION['username'] = $pswd_check[0]['name'];
        
    }
    }else{
        $email_login_error = "email does not match";
    }
    
   if(!empty($pswd_check)){

         header("location:dashboard.php");
    }else {
        $password_login_error = "password does not match";
    }
     
}


?>