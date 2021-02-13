

                                       
<?php




//set page header 
$title="Registration Page";
include_once "config.php";
// i
include_once "controllers/DbConnection.php";
$db= new DbConnection("localhost","project","root","");
include_once "model/register.php";

// $emailError =" MAIL"

include_once "layout/header.php";
?>
<body class="formspage">
<h1>
  <span class="bg-primary px-2 ">E</span> 
<span class="text-success">store</span> 
 </h1>
 
  <div class="container">
<!-- content here -->






<img src="asset/images/registericon.jpg" alt="" srcset=""class="img-fluid rounded mx-auto d-block">


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"class="card container  shadow-lg p-3 mb-1 bg-dark rounded">
<div class="form-group ">
<label for="reg_fullname"class="text-white"class="text-white">Fullname:</label>
<input type=text name="reg_fullname" id="reg_fullname"class="form-control border"placeholder="Your full name..."required>
</div>
<div class="form-group ">
<label for="reg_storename"class="text-white">Storename:</label>
<input type=text name="reg_storename" id="reg_storename"class="form-control border"placeholder="Your store name"required>
</div>
<div class="form-group ">
<label for="reg_storetype"class="text-white">Storetype:</label>
<input type=text name="reg_storetype" id="reg_storetype"class="form-control border"placeholder="Example(bookstore,fishstore etc..)"required>
</div>

<div class="form-group">
<label for="reg_email"class="text-white">Email address:</label>
<input type="email" name="reg_email" id="reg_email"class="form-control border"placeholder="Your Email Address"required>
<span class="text-danger"> <?php echo  $emailError ;?></span>
</div>

<div class="form-group  ">
<label for="reg_pswd"class="text-white">Password:</label>
<input type="password" name="reg_pswd" id="reg_pswd"class="form-control"placeholder="Your password"required>
</div>
<div class="form-group  ">
<input type="submit" name="reg_submit" id=""class="btn btn-primary "value="Sign up">


<span class="float-right text-white">Already have an account ?<a href="index.php">Login</a></span>


</div>


</form>
</div>


<!-- // set page footer -->
<?php
include_once "layout/footer.php";
?>