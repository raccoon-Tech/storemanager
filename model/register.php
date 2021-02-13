
<?php



// include configuration for  start session() and for  base url
include_once "config.php";
// include database connection and query template controller
include_once "controllers/DbConnection.php";
// for error email value which is void utill email is incorrect
$emailError="";
// assign data base
$db= new DbConnection("localhost","project","root","");
// ensures if server form request method is post
if($_SERVER["REQUEST_METHOD"]== "POST"){
    //Query to check if email alrready exist
    
 $emailExit= $db->select("SELECT * FROM users WHERE email = :email",['email'=>$_POST["reg_email"]
 ]);
//  insert registration form into database user table
 if(empty($emailExit)){

$id = $db->Insert("INSERT into users(name,email,password,shop_name,shop_type)  VALUES 
( :reg_fullname, :reg_email, :reg_pswd, :reg_storename, :reg_storetype)",[
    'reg_fullname'=> $_POST["reg_fullname"],
    'reg_email'=> $_POST["reg_email"],
    'reg_pswd'=> password_hash($_POST["reg_pswd"],PASSWORD_DEFAULT),
    'reg_storename'=> $_POST["reg_storename"],
    'reg_storetype'=> $_POST["reg_storetype"],
]);
//  head back to login page after registration
header("location:index.php");
 }
//  if email exists displays "Email already exits"
 else{
$emailError = "* Email already exits!";


 }}
 ?>
