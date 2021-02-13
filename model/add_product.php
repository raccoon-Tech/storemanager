<?php




 include_once ("../config.php");

include_once(ROOT_PATH . "/controllers/DbConnection.php");

$db= new DbConnection("localhost","project","root","");
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $add_product = $db->insert("INSERT INTO 
    products(product_name,product_category,product_quality,product_price,product_cost_price,product_id)
    VALUES ( :p_name, :p_category, :p_quality, :p_price, :p_cost_price, :p_id)",[
      'p_name' => $_POST["prod_name"],
       'p_category'=>$_POST["prod_category"],
       'p_quality'=>$_POST["prod_quality"],
       'p_price'=>$_POST["prod_s_price"],
       'p_cost_price'=>$_POST["prod_c_price"],
      'p_id'=>$_POST["prod_id"],
    ]);
    header("location:../dashboard_product.php");
}
?>