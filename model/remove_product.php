<?php
include_once ("../config.php");

include_once(ROOT_PATH . "/controllers/DbConnection.php");

$db= new DbConnection("localhost","project","root","");

// $remove_product = $db->remove("SELECT * FROM products");
  
if(isset($_GET['id'])){
    $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
 $remove_product = $db->remove("DELETE FROM products WHERE id=$id");
 header('location:../dashboard_product.php');
    
}
?>