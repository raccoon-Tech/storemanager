<?php


include_once(ROOT_PATH . "/controllers/DbConnection.php");

$db= new DbConnection("localhost","project","root","");

    $id = filter_var($_GET['edit'],FILTER_SANITIZE_NUMBER_INT);
 $view_product = $db->display("SELECT * FROM products WHERE id=$id");
foreach($view_product as $row)
// print_r($view_product);
if(isset($_POST['update_product'])){
 $update_product = $db->update("UPDATE  products SET Product_name=:p_name,product_category=:p_category,
 product_quality=:p_quality, product_price=:p_price,product_cost_price=:p_cost_price,product_id=:p_id WHERE id = $id",
 [
    'p_name' => htmlspecialchars(stripslashes(trim($_POST["update_prod_name"]))),
    'p_category'=>htmlspecialchars(stripslashes(trim($_POST["update_prod_category"]))),
    'p_quality'=>htmlspecialchars(stripslashes(trim($_POST["update_prod_quality"]))),
    'p_price'=>htmlspecialchars(stripslashes(trim($_POST["update_prod_s_price"]))),
    'p_cost_price'=>htmlspecialchars(stripslashes(trim($_POST["update_prod_c_price"]))),
   'p_id'=>htmlspecialchars(stripslashes(trim($_POST["update_prod_id"]))),
 ]);
 var_dump($update_product);

header("location:dashboard_product.php");
}

    ?>
