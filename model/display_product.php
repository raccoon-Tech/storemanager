<?php
include_once ("config.php");

include_once(ROOT_PATH . "/controllers/DbConnection.php");

$db= new DbConnection("localhost","project","root","");
$select_db_data = $db->select("SELECT * FROM products");
  

?>