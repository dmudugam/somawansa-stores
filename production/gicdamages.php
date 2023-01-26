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

$sql = "SELECT * from gicustomer";
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

    <title>Somawansa Stores - Ganemulla(Interim) Customer Damages</title>
                            

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
                    <h1 style="color: blue;">Ganemulla(Interim) - Customer Damage Report </h1> <small>Online Somawansa Stores Warehouse Management System</small>
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

                            <th class="column-title" rowspan="2">Damage ID</th>  
                             <th class="column-title" rowspan="2">Date</th>
                            <th class="column-title" rowspan="2" >Product</th>
                            
                            <th class="column-title" colspan="2">Damages</th>
                            <th class="column-title" rowspan="2">Value</th>
                            <tr>
                            <th class="column-title">Cases</th>
                            <th class="column-title">Units</th>
                            
                             </tr>
                            
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>



                         <tbody>
              <?php if (mysqli_num_rows($result) > 0) {



    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

    if ($row["product"]==="Anchor 18g") 
{
  
  $units = $row["dunits"]%400;
  $cases = ($row["dunits"]-$units)/400;
  $value = $row["dunits"]*17.05;
} 
elseif ($row["product"]==="Anchor 75g") 
{
  $units = $row["dunits"]%168;
  $cases = ($row["dunits"]-$units)/168;
  $value = $row["dunits"]*66.25;

}
elseif ($row["product"]==="Anchor 250g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*192.06;
}
elseif ($row["product"]==="Anchor 400g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*307.52;
}
elseif ($row["product"]==="Anchor 1kg") 
{
  $units = $row["dunits"]%12;
  $cases = ($row["dunits"]-$units)/12;
  $value = $row["dunits"]*766.67;
}
elseif ($row["product"]==="Raththi 18g") 
{
  $units = $row["dunits"]%400;
  $cases = ($row["dunits"]-$units)/400;
  $value = $row["dunits"]*17.05;
}
elseif ($row["product"]==="Raththi 70g") 
{
  $units = $row["dunits"]%180;
  $cases = ($row["dunits"]-$units)/180;
  $value = $row["dunits"]*56.69;
}
elseif ($row["product"]==="Raththi 160g") 
{
  $units = $row["dunits"]%96;
  $cases = ($row["dunits"]-$units)/96;
  $value = $row["dunits"]*122.82;
}
elseif ($row["product"]==="Raththi 250g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*192.06;
}
elseif ($row["product"]==="Raththi 400g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*307.65;
}
elseif ($row["product"]==="Raththi 1kg") 
{
  $units = $row["dunits"]%12;
  $cases = ($row["dunits"]-$units)/12;
  $value = $row["dunits"]*767.16;
}
elseif ($row["product"]==="Raththi Smart 400g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*307.65;
}
elseif ($row["product"]==="Raththi Smart 1kg") 
{
  $units = $row["dunits"]%12;
  $cases = ($row["dunits"]-$units)/12;
  $value = $row["dunits"]*767.16;
}
elseif ($row["product"]==="Anchor(+) 400g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*432.45;
}
elseif ($row["product"]==="PediaPro(1-2) 200g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*325.50;
}
elseif ($row["product"]==="PediaPro(1-2) 400g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*604.50;
}
elseif ($row["product"]==="PediaPro(1-2) 1kg") 
{
  $units = $row["dunits"]%6;
  $cases = ($row["dunits"]-$units)/6;
  $value = $row["dunits"]*1464.75;
}
elseif ($row["product"]==="PediaPro(2-5) 200g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*325.50;
}
elseif ($row["product"]==="PediaPro(2-5) 400g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*604.50;
}
elseif ($row["product"]==="PediaPro(2-5) 1kg") 
{
  $units = $row["dunits"]%6;
  $cases = ($row["dunits"]-$units)/6;
  $value = $row["dunits"]*1464.75;
}
elseif ($row["product"]==="Anchor Instant 400g") 
{
  $units = $row["dunits"]%24;
  $cases = ($row["dunits"]-$units)/24;
  $value = $row["dunits"]*307.65;
}
elseif ($row["product"]==="Anchor Instant 1kg") 
{
  $units = $row["dunits"]%12;
  $cases = ($row["dunits"]-$units)/12;
  $value = $row["dunits"]*766.75;
}
elseif ($row["product"]==="Anlene 80g") 
{
  $units = $row["dunits"]%162;
  $cases = ($row["dunits"]-$units)/162;
  $value = $row["dunits"]*92.07;
}
elseif ($row["product"]==="Anlene 200g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*241.78;
}
elseif ($row["product"]==="Anlene 400g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*437.10;
}
elseif ($row["product"]==="Anchor PediaPro Mama 400g") 
{
  $units = $row["dunits"]%24;
  $cases = ($row["dunits"]-$units)/24;
  $value = $row["dunits"]*706.80;
}
elseif ($row["product"]==="Anchor Shape Up 400g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)/36;
  $value = $row["dunits"]*419.04;
}
elseif ($row["product"]==="Newdale Yogurt 80g") 
{
  $units = $row["dunits"]%48;
  $cases = ($row["dunits"]-$units)/48;
  $value = $row["dunits"]*30.80;
}
elseif ($row["product"]==="Newdale Yogurt Tub 480g") 
{
  $units = $row["dunits"]%12;
  $cases = ($row["dunits"]-$units)/12;
  $value = $row["dunits"]*171.60;
}
elseif ($row["product"]==="Newdale Flavoured Milk Vanilla") 
{
  $units = $row["dunits"]%42;
  $cases = ($row["dunits"]-$units)/42;
  $value = $row["dunits"]*40.50;
}
elseif ($row["product"]==="Newdale Flavoured Milk Chocolate") 
{
  $units = $row["dunits"]%42;
  $cases = ($row["dunits"]-$units)/42;
  $value = $row["dunits"]*40.50;
}
elseif ($row["product"]==="Newdale Flavoured Milk Vanilla Promotion") 
{
  $units = $row["dunits"]%40;
  $cases = ($row["dunits"]-$units)/40;
  $value = $row["dunits"]*36.00;
}
elseif ($row["product"]==="Newdale Flavoured Milk Chocolate Promotion") 
{
  $units = $row["dunits"]%40;
  $cases = ($row["dunits"]-$units)/40;
  $value = $row["dunits"]*36.00;
}
elseif ($row["product"]==="Anchor Butter Salted 100g") 
{
  $units = $row["dunits"]%80;
  $cases = ($row["dunits"]-$units)/80;
  $value = $row["dunits"]*238.50;
}
elseif ($row["product"]==="Anchor Butter Salted 227g") 
{
  $units = $row["dunits"]%40;
  $cases = ($row["dunits"]-$units)/40;
  $value = $row["dunits"]*468.00;
}
elseif ($row["product"]==="Curd 480g") 
{
  $units = $row["dunits"]%12;
  $cases = ($row["dunits"]-$units)/12;
  $value = $row["dunits"]*132.00;
}
elseif ($row["product"]==="Fresh Milk 1litre") 
{
  $units = $row["dunits"]%12;
  $cases = ($row["dunits"]-$units)/12;
  $value = $row["dunits"]*180.00;
}

elseif ($row["product"]==="Red Cow 18g") 
{
  $units = $row["dunits"]%400;
  $cases = ($row["dunits"]-$units)/400;
  $value = $row["dunits"]*14.19;
}
elseif ($row["product"]==="Red Cow 400g") 
{
  $units = $row["dunits"]%36;
  $cases = ($row["dunits"]-$units)%36;
  $value = $row["dunits"]*264.94;
}
elseif ($row["product"]==="Red Cow 1kg") 
{
  $units = $row["dunits"]%12;
  $cases = ($row["dunits"]-$units)%12;
  $value = $row["dunits"]*662.34;
}
elseif ($row["product"]==="Strawberry Yogurt 80g") 
{
  $units = $row["dunits"]%48;
  $cases = ($row["dunits"]-$units)%48;
  $value = $row["dunits"]*30.80;
}
elseif ($row["product"]==="Mango Yogurt 80g") 
{
  $units = $row["dunits"]%48;
  $cases = ($row["dunits"]-$units)%48;
  $value = $row["dunits"]*30.80;
}
elseif ($row["product"]==="Cheese 100g") 
{
  $units = $row["dunits"]%48;
  $cases = ($row["dunits"]-$units)%48;
  $value = $row["dunits"]*259.60;
}
elseif ($row["product"]==="Newdale Flavoured Milk Strawberry") 
{
  $units = $row["dunits"]%42;
  $cases = ($row["dunits"]-$units)%42;
  $value = $row["dunits"]*40.50;
}
elseif ($row["product"]==="Newdale Flavoured Milk Mango") 
{
  $units = $row["dunits"]%42;
  $cases = ($row["dunits"]-$units)%42;
  $value = $row["dunits"]*40.50;
}
elseif ($row["product"]==="Drinking Yogurt Vanilla") 
{
  $units = $row["dunits"]%24;
  $cases = ($row["dunits"]-$units)%24;
  $value = $row["dunits"]*61.60;
}
elseif ($row["product"]==="Drinking Yogurt Mango") 
{
  $units = $row["dunits"]%24;
  $cases = ($row["dunits"]-$units)%24;
  $value = $row["dunits"]*66.00;
}
?>
                <tr>
                  <td><?php echo $row["damageid"] ?></td>
                  <td><?php echo $row["date1"] ?></td>
                  <td><?php echo $row["product"] ?></td>
                  <td><?php echo $cases ?></td>
                  <td><?php echo $units ?></td>
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
