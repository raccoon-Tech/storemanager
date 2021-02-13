<?php
//set title name 
$title="Products dashboard";
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
include_once (ROOT_PATH . "/model/display_product.php");


?>

<div class="container">
<div class=" p-4 mt-4 bg-dark">
<span class="text-white text-center pt-4 h6">Dashboard/Products</span>
</div>
</div>
<!-- Add Product modal trigger -->
<div class="container text-right h6 mt-4">
<a href="" data-toggle="modal"data-target="#addProduct">Add product
<i class="fa fa-plus-circle"></i>
</a>
</div>

<!-- add product modal -->
<div class="modal fade"id="addProduct"tabindex="-1"role="dialog"aria-labelledby="addProductPage"aria-hidden="true">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title"id="addProductPage"> Add product </h5>
<button type="button"class="close" data-dismiss="modal"aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<form action="model/add_product.php" method="post">
<label for=""><b>Product name:</b></label>
<input type="text" name="prod_name" id="" class="form-control" >
<label for=""><b>Product category:</b></label>
<input type="text" name="prod_category" id="" class="form-control" >
<label for=""><b>Product cost price:</b></label>
<input type="number" name="prod_c_price" id="" class="form-control" >
<label for=""><b>Product Selling price:</b></label>
<input type="number" name="prod_s_price" id="" class="form-control" >
<label for=""><b>Product Quality:</b></label>
<input type="text" name="prod_quality" id="" class="form-control" >
<label for=""><b>Product serial number:</b></label>
<input type="text" name="prod_id" id="" class="form-control" >






</div>

<div class="modal-footer">
<button type="button"class="btn btn-secondary"data-dismiss="modal">Close</button>
<button type="submit"class="btn btn-primary">submit</button>
</form>
</div>


</div>
</div>
<!-- Product search -->
<div>

<input type="search"class="form-control mt-2" name="search_product" id=""placeholder="search product">
</div>
<!-- product Table -->
<div class="container-fluid table-responsive-md">
<table class="table table-dark table-striped">
<thead>
<tr>
<th scope="col">ID</th>
<th scope="col">productName</th>

<th scope="col">Category</th>
<th scope="col">CostPrice</th>
<th scope="col">SellingPrice</th>
<th scope="col">QuantityAvailable</th>
<th scope="col">Quality</th>
<th scope="col"></th>
<th scope="col"></th>


</tr>
</thead>
<?php while($row = $result->FETCH_ASSOC()){?>

<tbody>
<tr>
<td><?php $row['product_id']; }?></td>
<td>stats book</td>

<td>Books</td>
<td>500</td>
<td>1000</td>
<td>25 psc</td>
<td>grade A</td>
<td><a href=""class="text-danger">Remove</a></td>
<td><a href=""class="text-success">Edit</button></td>
</tr>

</tbody>

</table>
<!-- table pagination -->
<nav arial-label="...">
<ul class="pagination ">
<li class="page-item disabled">
<a href=""class="page-link"tabindex="-1">Previous</a>
</li>
<li class="page-item active">
<a href=""class="page-link">1</a>
</li>
<li class="page-item ">
<a href=""class="page-link">2</a>
</li>
<li class="page-item ">
<a href=""class="page-link">3</a>
</li>
<li class="page-item ">
<a href=""class="page-link">4</a>
</li>
<li class="page-item">
<a href=""class="page-link">Next</a>
</li>

</ul>
</nav>
</div>

<?php
include_once "layout/footer.php";
?>