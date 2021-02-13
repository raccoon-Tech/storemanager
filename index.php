

                                       
<?php

//set page header 
$title="Login Page";
include_once("config.php");
include_once(ROOT_PATH . "/controllers/DbConnection.php");
$db= new DbConnection("localhost","project","root","");
include_once(ROOT_PATH ."/model/login.php");
include_once(ROOT_PATH ."/layout/header.php");

?>
<body class="formspage">
<h1>
  <span class="bg-primary px-2 ">E</span> 
<span class="text-success">store</span> 
 </h1>

  <div class="container">
  <img src="asset/images/usericon.png" alt="" srcset=""class="img-fluid rounded mx-auto d-block">
<!-- content here -->
 <div class="login_form">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"class="card container login-form shadow-lg p-3 mb-1  rounded">
<div class="form-group ">
<label for="email"class="text-white">Email address:</label>
<input type="email" name="login_email" id="login_email"class="form-control border"required>
<span class="text-danger"><?php echo $email_login_error;?></span>
</div>

<div class="form-group  ">
<label for="password"class="text-white">Password:</label>
<input type="password" name="login_pswd" id="login_pswd"class="form-control"required>
<span class="text-danger"><?php echo $password_login_error;?></span>

</div>
<div class="form-group form-check ">
<input type="checkbox" name="remember_pswd" id="remember_pswd"class="form-check-input">
<label for="remember_pswd"class="form-check-label text-white">Remember Password</label>
<span class="float-right"><a href="">Forget Password?</a></span>

</div>
<div class="form-group  ">
<input type=submit name="login_btn" id="login_btn"class="btn btn-success px-4"value="Login">
<a href="register_form.php"><input type="button" name="" id=""class="btn btn-primary float-right"value="Sign up">


</div>


</form>
</div>


<!-- // set page footer -->
<?php
include_once "layout/footer.php";
?>