
<?php
//set title name 
$title="Main Dashboard";
// include directory configuration setup
include_once "config.php";
// database connection controller
include_once(ROOT_PATH . "/controllers/DbConnection.php");
// database connection
$db= new DbConnection("localhost","project","root","");
// login model include
include_once (ROOT_PATH . "/model/login.php");
// login restriction controller redircts to login page if accessed without user login session
include_once (ROOT_PATH . "/controllers/login_restrict.php");

// header page include
include_once (ROOT_PATH . "/layout/header.php");
// navigation bar include
include_once (ROOT_PATH . "/layout/dashboard_navs.php");
?>

<div class="container">
<div class=" p-4 mt-4 bg-dark">
<span class="text-white text-center pt-4 h6">Dashboard/Point of Sales</span>
</div>
</div>
<div  class="container">
<div class="  mt-4 p-4 bg-light">
<form action="#" method="post" >
<!-- product name input  -->
<label for="pos_goodsname"class=" ">Product name</label>
<input type="text" class="form-control -4"name="pos_goodsname" id="pos_goodsname"required>
<label for="pos_productId"class=" ">Product ID</label>
<input type="number" class="form-control -4"name="pos_productId" id="pos_productId"required>

<!-- product category input -->
<label for="pos_productCategory"class=" ">Product category</label>
<input type="text" class="form-control -4"name="pos_productCategory" id="pos_productCategory"required>
<label for="pos_productPrice"class=" ">Price</label>
<input type="number" class="form-control -4"name="pos_productPrice" id="pos_productPrice"required>
<label for="pos_productQuantity"class=" ">Product Quantity</label>
<input type="number" class="form-control -4"name="pos_productQuantity" id="pos_productQuantity"required>
<div class="form-group  ">
<input type=submit name="submit-pos" id="submit-pos"class="btn btn-success mt-4 px-4"value="Submit">
<input type="reset" value="Clear all"class="btn btn-primary px-4 mt-4">
</form>
</div>
<?php
// footer
include_once (ROOT_PATH. "/layout/footer.php");
?>