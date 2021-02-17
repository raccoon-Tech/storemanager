<?php
//set title name 
$title="update-Products dashboard";
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
// include_once (ROOT_PATH . "/layout/dashboard_navs.php");
include_once (ROOT_PATH . "/model/update_product.php");


?>
<h2  class="text-center text-success">Update product</h2>
<div class="container"> 
<form action="" method="post">
<label for=""><b>Product name:</b></label>
<input type="text" name="update_prod_name" id="" class="form-control" value="<?php echo $row['product_name'] ?>"  required>
<label for=""><b>Product category:</b></label>
<input type="text" name="update_prod_category" id="" class="form-control"value="<?php echo $row['product_category'] ?>"   required >
<label for=""><b>Product cost price:</b></label>
<input type="number" name="update_prod_c_price" id="" class="form-control"value="<?php echo $row['product_cost_price'] ?>"   required >
<label for=""><b>Product Selling price:</b></label>
<input type="number" name="update_prod_s_price" id="" class="form-control"value="<?php echo $row['product_price'] ?>"  required >
<label for=""><b>Product Quality:</b></label>
<input type="text" name="update_prod_quality" id="" class="form-control"value="<?php echo $row['product_quality'] ?>"   required >
<label for=""><b>Product serial number:</b></label>
<input type="text" name="update_prod_id" id="" class="form-control" value="<?php echo $row['product_id'] ?>"  required >
<input type="submit" value="Update"name="update_product">

<?php
include_once "layout/footer.php";
?>

