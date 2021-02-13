<?php

//set page header 
$title="Main Dashboard";
include_once "config.php";
include_once(ROOT_PATH . "/controllers/DbConnection.php");

$db= new DbConnection("localhost","project","root","");
include_once (ROOT_PATH . "/model/login.php");

include_once (ROOT_PATH . "/controllers/login_restrict.php");


include_once (ROOT_PATH . "/layout/header.php");
include_once (ROOT_PATH . "/layout/dashboard_navs.php");
?>



    
    <div class="container-fluid">
        <!-- content here -->
        <!-- 
// echo "welcome <br>";
// echo $_SESSION['username'];
// 
<a href="controllers/logout.php"  class="btn btn-danger"name="logout"id="logout">logout</button> -->
        <div class="alert alert-success text-monospace alert-dismissible fade show mt-4 pt-4" role="alert"
            style="max-width:100%;">
            <pre>WELCOME
<strong> <?php echo $_SESSION['username']; ?></strong> to the Electronic store management system 
Explore for easy analytic commercial accounting with many features to make account/management fun 
  </pre>
            <button type="button" class="close" data-dismiss="alert" arial-label="close">
                <span arial-hidden="true">&times;</span>
            </button>
        </div>
        <div>
            <h5 class="text-secondary"> Dashboard</h4>
                <h4 class="text-secondary text-center"> Point of Sale</h4>
        </div>
        <div class="container-fluid">
            <div class="row ">
          <div
                    class="col-sm-12 box-link  col-md-6 col-lg-4 border border-dark 
                    rounded shadow-lg p-3 mb-5 hovereffect bg-white">
    
                    <a href="dashboard_sales.php" >

                        <center><i class="fas fa-shopping-cart"></i></center>
                    
                    <span>
                        <center><b>Sales</b></center>
                    </span>
</a>

                </div></a>
                <div class="col-sm-12 col-md-6 col-lg-4  shadow-lg p-3 mb-5 bg-white bg-warning border hovereffect
border-dark rounded ">
                    <a href="dashboard_product.php">
                        <center><i class="fas fa-database"></i></center>
                
                    <span>
                        <center><b>Products</b></center>
                    </span></a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4  shadow-lg p-3 mb-5 bg-white bg-default border hovereffect
 border-dark rounded">
                    <a href="">
                        <center><i class="fa fa-users"></i></center>
                
                    <span>
                        <center><b>Customers</b></center>
                    </span></a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4  shadow-lg p-3 mb-5 bg-white bg-default border hovereffect
border-dark rounded ">
                    <a href="">
                        <center><i class="fas fa-users"></i></center>
                
                    <span>
                        <center><b>Surpliers</b></center>
                    </span>
</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4  shadow-lg p-3 mb-5 bg-white bg-default border hovereffect
border-dark rounded ">
                    <a href="">
                        <center><i class="fas fa-chart-bar"></i></center>
                    
                    <span>
                        <center><b>Sales Report</b></center>
                    </span>
</a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4  shadow-lg p-3 mb-5 bg-white bg-default border hovereffect
border-dark rounded ">
                    <a href="controllers/logout.php">
                        <center><i class="fa fa-power-off"></i></center>
                    
                    <span>
                        <center><b>Logout</b></center>
                    </span>
</a>
                </div>



            </div>
        </div>


        <?php
include_once "layout/footer.php";
?>