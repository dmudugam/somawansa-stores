<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
  header("location:login.php");
} else {
?>





<?php
$servername = "localhost";
$username = "somawans_Dineth1";
$password = "DINETH123";
$dbname = "somawans_area";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT giloading.loadingid ,giloading.date1, giloading.product, giloading.units, giunloading.ulunits, gicustomer.dunits  from giloading  LEFT JOIN giunloading on giloading.date1 = giunloading.date1 AND giloading.product = giunloading.product LEFT JOIN gicustomer on giunloading.date1=gicustomer.date1 AND giunloading.product=gicustomer.product where giloading.date1=cast(now() as date)";
$result = mysqli_query($conn, $sql);


?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Somawansa Stores - Ganemulla(Interim) Sales Report</title>
                            

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">


<!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">



  </head>

  <body class="nav-md">
   <h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="profile.php" class="site_title"><i class="fa fa-paw"></i> <span>Ganemulla</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/checked-user-xxl.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span></span>
                <h2></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href ="home.php"><i class="fa fa-home"></i> Home <span ></span></a>
                  </li>

                <li><a href ="kloadingr.php">Kadawatha(RD) Loading<span ></span></a>
                  </li>
                   <li><a href ="kiloadingr.php">Kadawatha(Interim) Loading<span ></span></a>
                  </li>

                  <li><a href ="gloadingr.php">Ganemulla(RD) Loading<span></span></a>
                  </li>
                  <li><a href ="giloadingr.php">Ganemulla(Interim) Loading<span></span></a>
                  </li>

                  <li><a href ="hloadingr.php">Horeca Loading<span></span></a>
                    
                  </li>
                  
                      <li><a href ="kldamages.php">Kadawatha(RD) Lorry Damages<span></span></a>
                      </li>
                      <li><a href ="kildamages.php">Kadawatha(INT) Lorry Damages<span></span></a>
                      </li>
                      <li><a href ="gldamages.php">Ganemulla(RD) Lorry Damages<span></span></a>
                      </li>
                      <li><a href ="gildamages.php">Ganemulla(INT) Lorry Damages<span></span></a>
                      </li>
                      <li><a href ="hldamages.php">Horeca Lorry Damages<span></span></a>
                      </li>
                      <li><a href ="kcdamages.php">Kadawatha(RD) Customer Damages</a>
                      </li>
                      <li><a href ="kicdamages.php">Kadawatha(INT) Customer Damages</a>
                      </li>
                      <li><a href ="gcdamages.php"></i>Ganemulla(RD) Customer Damages<span></span></a>
                      </li>
                      <li><a href ="gicdamages.php"></i>Ganemulla(INT) Customer Damages<span></span></a>
                      </li>
                      <li><a href ="hcdamages.php"></i>Horeca Customer Damages<span></span></a>
                      </li>
                      <li><a href ="kadawathasales.php"></i>Kadawatha(RD) Sales<span></span></a>
                      </li>
                      <li><a href ="ikadawathasales.php"></i>Kadawatha(Interim) Sales<span></span></a>
                      </li>
                      <li><a href ="ganemullasales.php"></i>Ganemulla(RD) Sales<span></span></a>
                      </li>
                      <li><a href ="iganemullasales.php"></i>Ganemulla(Interim) Sales<span></span></a>
                      </li>
                      <li><a href ="horecasales.php"></i>Horeca Sales<span></span></a>
                      </li>



               
              </div>
              <div class="menu_section">
                
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                  Logged In :
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <span class="glyphicon-class"><?=$_SESSION['sess_user'];?></span>
                    <span class=" fa fa-angle-down"></span>

                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->





<div class="x_panel">
                  <div class="x_title">
                    <h1 style="color: blue;">Ganemulla(Interim) Sales Report</h1><small>Online Somawansa Stores Warehouse Management System</small>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    
                    
                    <div class="table-responsive">
                      <table   id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                          <tr class="headings">

                            <th class="column-title">Sales ID</th>
                            <th class="column-title"  >Date</th>
                            <th class="column-title" >Product</th>
                            <th class="column-title" >Loading</th>
                            <th class="column-title" >Unloading</th>
                            <th class="column-title" >Damages</th>
                            <th class="column-title">Sales</th>
                            <th class="column-title" >Amount</th>


                            
                            
                            
                          </tr>
                        </thead>



                         <tbody>
              <?php if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
    {

     if ($row["product"]==="Anchor 18g") 
{
  
  $units = $row["units"]%400;
  $cases = ($row["units"]-$units)/400;
  $ulunits = $row["ulunits"]%400;
  $ulcases = ($row["ulunits"]-$ulunits)/400;
  $dunits =  $row["dunits"]%400;
  $dcases = ($row["dunits"]-$dunits)/400;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%400;
  $scases = ($s1units-$sunits)/400;
  $value = $s1units*17.05;
} 
elseif ($row["product"]==="Anchor 75g") 
{
  $units = $row["units"]%168;
  $cases = ($row["units"]-$units)/168;
  $ulunits = $row["ulunits"]%168;
  $ulcases = ($row["ulunits"]-$ulunits)/168;
  $dunits =  $row["dunits"]%168;
  $dcases = ($row["dunits"]-$dunits)/168;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%168;
  $scases = ($s1units-$sunits)/168;
  $value = $s1units*66.25;

}
elseif ($row["product"]==="Anchor 250g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*192.06;
}
elseif ($row["product"]==="Anchor 400g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*307.52;
}
elseif ($row["product"]==="Anchor 1kg") 
{
  $units = $row["units"]%12;
  $cases = ($row["units"]-$units)/12;
  $ulunits = $row["ulunits"]%12;
  $ulcases = ($row["ulunits"]-$ulunits)/12;
  $dunits =  $row["dunits"]%12;
  $dcases = ($row["dunits"]-$dunits)/12;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%12;
  $scases = ($s1units-$sunits)/12;
  $value = $s1units*766.67;
}
elseif ($row["product"]==="Raththi 18g") 
{
  $units = $row["units"]%400;
  $cases = ($row["units"]-$units)/400;
  $ulunits = $row["ulunits"]%400;
  $ulcases = ($row["ulunits"]-$ulunits)/400;
  $dunits =  $row["dunits"]%400;
  $dcases = ($row["dunits"]-$dunits)/400;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%400;
  $scases = ($s1units-$sunits)/400;
  $value = $s1units*17.05;
}
elseif ($row["product"]==="Raththi 70g") 
{
  $units = $row["units"]%180;
  $cases = ($row["units"]-$units)/180;
  $ulunits = $row["ulunits"]%180;
  $ulcases = ($row["ulunits"]-$ulunits)/180;
  $dunits =  $row["dunits"]%180;
  $dcases = ($row["dunits"]-$dunits)/180;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%180;
  $scases = ($s1units-$sunits)/180;
  $value = $s1units*56.69;
}
elseif ($row["product"]==="Raththi 160g") 
{
  $units = $row["units"]%96;
  $cases = ($row["units"]-$units)/96;
  $ulunits = $row["ulunits"]%96;
  $ulcases = ($row["ulunits"]-$ulunits)/96;
  $dunits =  $row["dunits"]%96;
  $dcases = ($row["dunits"]-$dunits)/96;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%96;
  $scases = ($s1units-$sunits)/96;
  $value = $s1units*122.82;
}
elseif ($row["product"]==="Raththi 250g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*192.06;
}
elseif ($row["product"]==="Raththi 400g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*307.65;
}
elseif ($row["product"]==="Raththi 1kg") 
{
  $units = $row["units"]%12;
  $cases = ($row["units"]-$units)/12;
  $ulunits = $row["ulunits"]%12;
  $ulcases = ($row["ulunits"]-$ulunits)/12;
  $dunits =  $row["dunits"]%12;
  $dcases = ($row["dunits"]-$dunits)/12;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%12;
  $scases = ($s1units-$sunits)/12;
  $value = $s1units*767.16;
}
elseif ($row["product"]==="Raththi Smart 400g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*307.65;
}
elseif ($row["product"]==="Raththi Smart 1kg") 
{
  $units = $row["units"]%12;
  $cases = ($row["units"]-$units)/12;
  $ulunits = $row["ulunits"]%12;
  $ulcases = ($row["ulunits"]-$ulunits)/12;
  $dunits =  $row["dunits"]%12;
  $dcases = ($row["dunits"]-$dunits)/12;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%12;
  $scases = ($s1units-$sunits)/12;
  $value = $s1units*767.16;
}
elseif ($row["product"]==="Anchor(+) 400g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*432.45;
}
elseif ($row["product"]==="PediaPro(1-2) 200g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*325.50;
}
elseif ($row["product"]==="PediaPro(1-2) 400g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*604.50;
}
elseif ($row["product"]==="PediaPro(1-2) 1kg") 
{
  $units = $row["units"]%6;
  $cases = ($row["units"]-$units)/6;
  $ulunits = $row["ulunits"]%6;
  $ulcases = ($row["ulunits"]-$ulunits)/6;
  $dunits =  $row["dunits"]%6;
  $dcases = ($row["dunits"]-$dunits)/6;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%6;
  $scases = ($s1units-$sunits)/6;
  $value = $s1units*1464.75;
}
elseif ($row["product"]==="PediaPro(2-5) 200g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*325.50;
}
elseif ($row["product"]==="PediaPro(2-5) 400g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*604.50;
}
elseif ($row["product"]==="PediaPro(2-5) 1kg") 
{
  $units = $row["units"]%6;
  $cases = ($row["units"]-$units)/6;
  $ulunits = $row["ulunits"]%6;
  $ulcases = ($row["ulunits"]-$ulunits)/6;
  $dunits =  $row["dunits"]%6;
  $dcases = ($row["dunits"]-$dunits)/6;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%6;
  $scases = ($s1units-$sunits)/6;
  $value = $s1units*1464.75;
}
elseif ($row["product"]==="Anchor Instant 400g") 
{
  $units = $row["units"]%24;
  $cases = ($row["units"]-$units)/24;
  $ulunits = $row["ulunits"]%24;
  $ulcases = ($row["ulunits"]-$ulunits)/24;
  $dunits =  $row["dunits"]%24;
  $dcases = ($row["dunits"]-$dunits)/24;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%24;
  $scases = ($s1units-$sunits)/24;
  $value = $s1units*307.65;
}
elseif ($row["product"]==="Anchor Instant 1kg") 
{
  $units = $row["units"]%12;
  $cases = ($row["units"]-$units)/12;
  $ulunits = $row["ulunits"]%12;
  $ulcases = ($row["ulunits"]-$ulunits)/12;
  $dunits =  $row["dunits"]%12;
  $dcases = ($row["dunits"]-$dunits)/12;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%12;
  $scases = ($s1units-$sunits)/12;
  $value = $s1units*766.75;
}
elseif ($row["product"]==="Anlene 80g") 
{
  $units = $row["units"]%162;
  $cases = ($row["units"]-$units)/162;
  $ulunits = $row["ulunits"]%162;
  $ulcases = ($row["ulunits"]-$ulunits)/162;
  $dunits =  $row["dunits"]%162;
  $dcases = ($row["dunits"]-$dunits)/162;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%162;
  $scases = ($s1units-$sunits)/162;
  $value = $s1units*92.07;
}
elseif ($row["product"]==="Anlene 200g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*241.78;
}
elseif ($row["product"]==="Anlene 400g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*437.10;
}
elseif ($row["product"]==="Anchor PediaPro Mama 400g") 
{
  $units = $row["units"]%24;
  $cases = ($row["units"]-$units)/24;
  $ulunits = $row["ulunits"]%24;
  $ulcases = ($row["ulunits"]-$ulunits)/24;
  $dunits =  $row["dunits"]%24;
  $dcases = ($row["dunits"]-$dunits)/24;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%24;
  $scases = ($s1units-$sunits)/24;
  $value = $s1units*706.80;
}
elseif ($row["product"]==="Anchor Shape Up 400g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*419.04;
}
elseif ($row["product"]==="Newdale Yogurt 80g") 
{
  $units = $row["units"]%48;
  $cases = ($row["units"]-$units)/48;
  $ulunits = $row["ulunits"]%48;
  $ulcases = ($row["ulunits"]-$ulunits)/48;
  $dunits =  $row["dunits"]%48;
  $dcases = ($row["dunits"]-$dunits)/48;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%48;
  $scases = ($s1units-$sunits)/48;
  $value = $s1units*30.80;
}
elseif ($row["product"]==="Newdale Yogurt Tub 480g") 
{
  $units = $row["units"]%12;
  $cases = ($row["units"]-$units)/12;
  $ulunits = $row["ulunits"]%12;
  $ulcases = ($row["ulunits"]-$ulunits)/12;
  $dunits =  $row["dunits"]%12;
  $dcases = ($row["dunits"]-$dunits)/12;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%12;
  $scases = ($s1units-$sunits)/12;
  $value = $s1units*171.60;
}
elseif ($row["product"]==="Newdale Flavoured Milk Vanilla") 
{
  $units = $row["units"]%42;
  $cases = ($row["units"]-$units)/42;
  $ulunits = $row["ulunits"]%42;
  $ulcases = ($row["ulunits"]-$ulunits)/42;
  $dunits =  $row["dunits"]%42;
  $dcases = ($row["dunits"]-$dunits)/42;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%42;
  $scases = ($s1units-$sunits)/42;
  $value = $s1units*40.50;
}
elseif ($row["product"]==="Newdale Flavoured Milk Chocolate") 
{
  $units = $row["units"]%42;
  $cases = ($row["units"]-$units)/42;
  $ulunits = $row["ulunits"]%42;
  $ulcases = ($row["ulunits"]-$ulunits)/42;
  $dunits =  $row["dunits"]%42;
  $dcases = ($row["dunits"]-$dunits)/42;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%42;
  $scases = ($s1units-$sunits)/42;
  $value = $s1units*40.50;
}
elseif ($row["product"]==="Newdale Flavoured Milk Vanilla Promotion") 
{
  $units = $row["units"]%40;
  $cases = ($row["units"]-$units)/40;
  $ulunits = $row["ulunits"]%40;
  $ulcases = ($row["ulunits"]-$ulunits)/40;
  $dunits =  $row["dunits"]%40;
  $dcases = ($row["dunits"]-$dunits)/40;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%40;
  $scases = ($s1units-$sunits)/40;
  $value = $s1units*36.00;
}
elseif ($row["product"]==="Newdale Flavoured Milk Chocolate Promotion") 
{
  $units = $row["units"]%40;
  $cases = ($row["units"]-$units)/40;
  $ulunits = $row["ulunits"]%40;
  $ulcases = ($row["ulunits"]-$ulunits)/40;
  $dunits =  $row["dunits"]%40;
  $dcases = ($row["dunits"]-$dunits)/40;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%40;
  $scases = ($s1units-$sunits)/40;
  $value = $s1units*36.00;
}
elseif ($row["product"]==="Anchor Butter Salted 100g") 
{
  $units = $row["units"]%80;
  $cases = ($row["units"]-$units)/80;
  $ulunits = $row["ulunits"]%400;
  $ulcases = ($row["ulunits"]-$ulunits)/80;
  $dunits =  $row["dunits"]%80;
  $dcases = ($row["dunits"]-$dunits)/80;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%80;
  $scases = ($s1units-$sunits)/80;
  $value = $s1units*238.50;
}
elseif ($row["product"]==="Anchor Butter Salted 227g") 
{
  $units = $row["units"]%40;
  $cases = ($row["units"]-$units)/40;
  $ulunits = $row["ulunits"]%40;
  $ulcases = ($row["ulunits"]-$ulunits)/40;
  $dunits =  $row["dunits"]%40;
  $dcases = ($row["dunits"]-$dunits)/40;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%40;
  $scases = ($s1units-$sunits)/40;
  $value = $s1units*468.00;
}
elseif ($row["product"]==="Curd 480g") 
{
  $units = $row["units"]%12;
  $cases = ($row["units"]-$units)/12;
  $ulunits = $row["ulunits"]%12;
  $ulcases = ($row["ulunits"]-$ulunits)/12;
  $dunits =  $row["dunits"]%12;
  $dcases = ($row["dunits"]-$dunits)/12;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%12;
  $scases = ($s1units-$sunits)/12;
  $value = $s1units*132.00;
}
elseif ($row["product"]==="Fresh Milk 1litre") 
{
  $units = $row["units"]%12;
  $cases = ($row["units"]-$units)/12;
  $ulunits = $row["ulunits"]%12;
  $ulcases = ($row["ulunits"]-$ulunits)/12;
  $dunits =  $row["dunits"]%12;
  $dcases = ($row["dunits"]-$dunits)/12;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%12;
  $scases = ($s1units-$sunits)/12;
  $value = $s1units*180.00;
} 
elseif ($row["product"]==="Red Cow 18g") 
{
  $units = $row["units"]%400;
  $cases = ($row["units"]-$units)/400;
  $ulunits = $row["ulunits"]%400;
  $ulcases = ($row["ulunits"]-$ulunits)/400;
  $dunits =  $row["dunits"]%400;
  $dcases = ($row["dunits"]-$dunits)/400;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%400;
  $scases = ($s1units-$sunits)/400;
  $value = $s1units*14.19;
} 
elseif ($row["product"]==="Red Cow 400g") 
{
  $units = $row["units"]%36;
  $cases = ($row["units"]-$units)/36;
  $ulunits = $row["ulunits"]%36;
  $ulcases = ($row["ulunits"]-$ulunits)/36;
  $dunits =  $row["dunits"]%36;
  $dcases = ($row["dunits"]-$dunits)/36;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%36;
  $scases = ($s1units-$sunits)/36;
  $value = $s1units*264.94;
} 
elseif ($row["product"]==="Red Cow 1kg") 
{
  $units = $row["units"]%12;
  $cases = ($row["units"]-$units)/12;
  $ulunits = $row["ulunits"]%12;
  $ulcases = ($row["ulunits"]-$ulunits)/12;
  $dunits =  $row["dunits"]%12;
  $dcases = ($row["dunits"]-$dunits)/12;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%12;
  $scases = ($s1units-$sunits)/12;
  $value = $s1units*662.34;
} 
elseif ($row["product"]==="Strawberry Yogurt 80g") 
{
  $units = $row["units"]%48;
  $cases = ($row["units"]-$units)/48;
  $ulunits = $row["ulunits"]%48;
  $ulcases = ($row["ulunits"]-$ulunits)/48;
  $dunits =  $row["dunits"]%48;
  $dcases = ($row["dunits"]-$dunits)/48;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%48;
  $scases = ($s1units-$sunits)/48;
  $value = $s1units*30.80;
} 
elseif ($row["product"]==="Mango Yogurt 80g") 
{
  $units = $row["units"]%48;
  $cases = ($row["units"]-$units)/48;
  $ulunits = $row["ulunits"]%48;
  $ulcases = ($row["ulunits"]-$ulunits)/48;
  $dunits =  $row["dunits"]%48;
  $dcases = ($row["dunits"]-$dunits)/48;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%48;
  $scases = ($s1units-$sunits)/48;
  $value = $s1units*30.80;
} 
elseif ($row["product"]==="Cheese 100g") 
{
  $units = $row["units"]%48;
  $cases = ($row["units"]-$units)/48;
  $ulunits = $row["ulunits"]%48;
  $ulcases = ($row["ulunits"]-$ulunits)/48;
  $dunits =  $row["dunits"]%48;
  $dcases = ($row["dunits"]-$dunits)/48;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%48;
  $scases = ($s1units-$sunits)/48;
  $value = $s1units*259.60;
} 
elseif ($row["product"]==="Newdale Flavoured Milk Strawberry") 
{
  $units = $row["units"]%42;
  $cases = ($row["units"]-$units)/42;
  $ulunits = $row["ulunits"]%42;
  $ulcases = ($row["ulunits"]-$ulunits)/42;
  $dunits =  $row["dunits"]%42;
  $dcases = ($row["dunits"]-$dunits)/42;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%42;
  $scases = ($s1units-$sunits)/42;
  $value = $s1units*40.50;
} 
elseif ($row["product"]==="Newdale Flavoured Milk Mango") 
{
  $units = $row["units"]%42;
  $cases = ($row["units"]-$units)/42;
  $ulunits = $row["ulunits"]%42;
  $ulcases = ($row["ulunits"]-$ulunits)/42;
  $dunits =  $row["dunits"]%42;
  $dcases = ($row["dunits"]-$dunits)/42;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%42;
  $scases = ($s1units-$sunits)/42;
  $value = $s1units*40.50;
} 
elseif ($row["product"]==="Drinking Yogurt Vanilla") 
{
  $units = $row["units"]%24;
  $cases = ($row["units"]-$units)/24;
  $ulunits = $row["ulunits"]%24;
  $ulcases = ($row["ulunits"]-$ulunits)/24;
  $dunits =  $row["dunits"]%24;
  $dcases = ($row["dunits"]-$dunits)/24;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%24;
  $scases = ($s1units-$sunits)/24;
  $value = $s1units*61.60;
} 
elseif ($row["product"]==="Drinking Yogurt Mango") 
{
  $units = $row["units"]%24;
  $cases = ($row["units"]-$units)/24;
  $ulunits = $row["ulunits"]%24;
  $ulcases = ($row["ulunits"]-$ulunits)/24;
  $dunits =  $row["dunits"]%24;
  $dcases = ($row["dunits"]-$dunits)/24;
  $s1units = ($row["units"]-$row["ulunits"]-$row["dunits"]);
  $sunits = ($row["units"]-$row["ulunits"]-$row["dunits"])%24;
  $scases = ($s1units-$sunits)/24;
  $value = $s1units*66.00;
} 


      ?>
                <tr>
                   <td><?php echo $row["loadingid"] ?></td>
                  <td><?php echo $row["date1"]  ?></td>
                  <td><?php echo $row["product"] ?></td>
                  <td><?php echo $cases ?> <?php echo "/" ?> <?php echo $units ?></td>
                  <td><?php echo $ulcases ?> <?php echo "/" ?> <?php echo $ulunits ?></td> 
                  <td><?php echo $dcases ?> <?php echo "/" ?> <?php echo $dunits ?></td> 
                  <td><?php echo $scases ?> <?php echo "/" ?> <?php echo $sunits ?></td>
                  <td><?php echo $value ?></td>
                  
                  
                </tr>

                <?php }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
               </tbody>


 </table>                                  

     
                    </div>
                  </div>
                </div>


<div></div>






          
       <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            © by <a href="https://www.facebook.com/dineth.mithuranga"> Dineth Mithuranga </a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>




    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>




    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
<?php
}
?>
