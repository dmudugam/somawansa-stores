<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
  header("location:login.php");
} else {
?>


<?php
require 'dbware.php';





if(isset($_POST['display']))


{
                  
        

             

$date = $_POST['Date'];
$type = $_POST['type'];



if ($type==="Anchor 18g") 
{
  $cases = $_POST['cases']*400 + ($units = $_POST['units']);
  $value = ($_POST['cases']*400 + ($units = $_POST['units']))*17.05;
}
elseif ($type==="Anchor 75g") 
{
   $cases = $_POST['cases']*168 + ($units = $_POST['units']);
   $value = ($_POST['cases']*168 + ($units = $_POST['units']))*66.25;
}
elseif ($type==="Anchor 250g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*192.06;
}
elseif ($type==="Anchor 400g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*307.52;
}
elseif ($type==="Anchor 1kg") 
{
   $cases = $_POST['cases']*12 + ($units = $_POST['units']);
   $value = ($_POST['cases']*12 + ($units = $_POST['units']))*766.67;
}
elseif ($type==="Raththi 18g") 
{
   $cases = $_POST['cases']*400 + ($units = $_POST['units']);
   $value = ($_POST['cases']*400 + ($units = $_POST['units']))*17.05;
}
elseif ($type==="Raththi 70g") 
{
   $cases = $_POST['cases']*180 + ($units = $_POST['units']);
   $value = ($_POST['cases']*180 + ($units = $_POST['units']))*56.69;
}
elseif ($type==="Raththi 160g") 
{
   $cases = $_POST['cases']*96 + ($units = $_POST['units']);
   $value = ($_POST['cases']*96 + ($units = $_POST['units']))*122.82;
}
elseif ($type==="Raththi 250g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*192.06;
}
elseif ($type==="Raththi 400g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*307.65;
}
elseif ($type==="Raththi 1kg") 
{
   $cases = $_POST['cases']*12 + ($units = $_POST['units']);
   $value = ($_POST['cases']*12 + ($units = $_POST['units']))*767.16;
}
elseif ($type==="Raththi Smart 400g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
    $value = ($_POST['cases']*36 + ($units = $_POST['units']))*307.65;
}
elseif ($type==="Raththi Smart 1kg") 
{
   $cases = $_POST['cases']*12 + ($units = $_POST['units']);
   $value = ($_POST['cases']*12 + ($units = $_POST['units']))*767.16;
}
elseif ($type==="Anchor(+) 400g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*432.45;
}
elseif ($type==="PediaPro(1-2) 200g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*325.50;
}
elseif ($type==="PediaPro(1-2) 400g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*604.50;
}
elseif ($type==="PediaPro(1-2) 1kg") 
{
   $cases = $_POST['cases']*6 + ($units = $_POST['units']);
   $value = ($_POST['cases']*6 + ($units = $_POST['units']))*1464.75;
}
elseif ($type==="PediaPro(2-5) 200g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*325.50;
}
elseif ($type==="PediaPro(2-5) 400g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*604.50;
}
elseif ($type==="PediaPro(2-5) 1kg") 
{
   $cases = $_POST['cases']*6 + ($units = $_POST['units']);
   $value = ($_POST['cases']*6 + ($units = $_POST['units']))*1464.75;
}
elseif ($type==="Anchor Instant 400g") 
{
   $cases = $_POST['cases']*24 + ($units = $_POST['units']);
   $value = ($_POST['cases']*24 + ($units = $_POST['units']))*307.65;
}
elseif ($type==="Anchor Instant 1kg") 
{
   $cases = $_POST['cases']*12 + ($units = $_POST['units']);
   $value = ($_POST['cases']*12 + ($units = $_POST['units']))*766.75;
}
elseif ($type==="Anlene 80g") 
{
   $cases = $_POST['cases']*162 + ($units = $_POST['units']);
   $value = ($_POST['cases']*162 + ($units = $_POST['units']))*92.07;
}
elseif ($type==="Anlene 200g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*241.78;
}
elseif ($type==="Anlene 400g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*437.10;
}
elseif ($type==="Anchor PediaPro Mama 400g") 
{
   $cases = $_POST['cases']*24 + ($units = $_POST['units']);
   $value = ($_POST['cases']*24 + ($units = $_POST['units']))*706.80;
}
elseif ($type==="Anchor Shape Up 400g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*419.04;
}
elseif ($type==="Newdale Yogurt 80g") 
{
   $cases = $_POST['cases']*48 + ($units = $_POST['units']);
   $value = ($_POST['cases']*48 + ($units = $_POST['units']))*30.80;
}
elseif ($type==="Newdale Yogurt Tub 480g") 
{
   $cases = $_POST['cases']*12 + ($units = $_POST['units']);
   $value = ($_POST['cases']*12 + ($units = $_POST['units']))*171.60;
}
elseif ($type==="Newdale Flavoured Milk Vanilla") 
{
   $cases = $_POST['cases']*42 + ($units = $_POST['units']);
   $value = ($_POST['cases']*42 + ($units = $_POST['units']))*40.50;
}
elseif ($type==="Newdale Flavoured Milk Chocolate") 
{
   $cases = $_POST['cases']*42 + ($units = $_POST['units']);
   $value = ($_POST['cases']*42 + ($units = $_POST['units']))*40.50;
}
elseif ($type==="Newdale Flavoured Milk Vanilla Promotion") 
{
   $cases = $_POST['cases']*40 + ($units = $_POST['units']);
   $value = ($_POST['cases']*40 + ($units = $_POST['units']))*36.00;
}
elseif ($type==="Newdale Flavoured Milk Chocolate Promotion") 
{
   $cases = $_POST['cases']*40 + ($units = $_POST['units']);
   $value = ($_POST['cases']*40 + ($units = $_POST['units']))*36.00;
}
elseif ($type==="Anchor Butter Salted 100g") 
{
   $cases = $_POST['cases']*80 + ($units = $_POST['units']);
   $value = ($_POST['cases']*80 + ($units = $_POST['units']))*238.50;
}
elseif ($type==="Anchor Butter Salted 227g") 
{
   $cases = $_POST['cases']*40 + ($units = $_POST['units']);
   $value = ($_POST['cases']*40 + ($units = $_POST['units']))*468.00;
}
elseif ($type==="Curd 480g") 
{
   $cases = $_POST['cases']*12 + ($units = $_POST['units']);
   $value = ($_POST['cases']*12 + ($units = $_POST['units']))*132.00;
}
elseif ($type==="Fresh Milk 1litre") 
{
   $cases = $_POST['cases']*12 + ($units = $_POST['units']);
   $value = ($_POST['cases']*12 + ($units = $_POST['units']))*180.00;
}
elseif ($type==="Red Cow 18g") 
{
   $cases = $_POST['cases']*400 + ($units = $_POST['units']);
   $value = ($_POST['cases']*400 + ($units = $_POST['units']))*14.19;
}
elseif ($type==="Red Cow 400g") 
{
   $cases = $_POST['cases']*36 + ($units = $_POST['units']);
   $value = ($_POST['cases']*36 + ($units = $_POST['units']))*264.94;
}
elseif ($type==="Red Cow 1kg") 
{
   $cases = $_POST['cases']*12 + ($units = $_POST['units']);
   $value = ($_POST['cases']*12 + ($units = $_POST['units']))*662.34;
}
elseif ($type==="Strawberry Yogurt 80g") 
{
   $cases = $_POST['cases']*48 + ($units = $_POST['units']);
   $value = ($_POST['cases']*48 + ($units = $_POST['units']))*30.80;
}
elseif ($type==="Mango Yogurt 80g") 
{
   $cases = $_POST['cases']*48 + ($units = $_POST['units']);
   $value = ($_POST['cases']*48 + ($units = $_POST['units']))*30.80;
}
elseif ($type==="Cheese 100g") 
{
   $cases = $_POST['cases']*48 + ($units = $_POST['units']);
   $value = ($_POST['cases']*48 + ($units = $_POST['units']))*259.60;
}
elseif ($type==="Newdale Flavoured Milk Strawberry") 
{
   $cases = $_POST['cases']*42 + ($units = $_POST['units']);
   $value = ($_POST['cases']*42 + ($units = $_POST['units']))*40.50;
}
elseif ($type==="Newdale Flavoured Milk Mango") 
{
   $cases = $_POST['cases']*42 + ($units = $_POST['units']);
   $value = ($_POST['cases']*42 + ($units = $_POST['units']))*40.50;
}
elseif ($type==="Drinking Yogurt Vanilla") 
{
   $cases = $_POST['cases']*24 + ($units = $_POST['units']);
   $value = ($_POST['cases']*24 + ($units = $_POST['units']))*61.60;
}
elseif ($type==="Drinking Yogurt Mango") 
{
   $cases = $_POST['cases']*24 + ($units = $_POST['units']);
   $value = ($_POST['cases']*24 + ($units = $_POST['units']))*66.00;
}





$sql = "UPDATE kadawatha SET date1='$date',units = units+'$cases',value = value+'$value' WHERE product='$type' ";

if(mysqli_query($conn,$sql)){

echo "<h2>"."Loading Successful"."</h2>";

}else{

echo "<h2>"."Loading Unsuccesful"."</h2>";

echo "Error: " . $sql ."<br>" .mysqli_error($conn);
}



}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Warehouse - Kadawatha</title>

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
    <script type="text/javascript">
      function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57) && num <= 10)
        return false;
        return true;}
    </script>
  </head>

  <body class="nav-md">
   <h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logout.php">Logout</a></h2>
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="profile.php" class="site_title"><i class="fa fa-paw"></i> <span>Warehouse</span></a>
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
                  <li><a href ="home.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  </li>

                <li><a href ="warehousek.php"><i class="fa fa-edit"></i>Kadawatha Loading <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href ="warehouseg.php"><i class="fa fa-edit"></i>Ganemulla Loading <span class="fa fa-chevron-down"></span></a>
                  </li>
                  <li><a href ="warehouseh.php"><i class="fa fa-edit"></i>Horeca Loading <span class="fa fa-chevron-down"></span></a>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                    <h1 style="color: red;">Kadawatha - Warehouse Loading </h1><small> Online Somawansa Stores Warehouse Management System</small></h1>
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
                    <br>
                    <form class="form-horizontal form-label-left"
                    action ="#" method="POST">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date<span class="required" style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="Date" required="required" class="form-control col-md-7 col-xs-12" value="<?php date_default_timezone_set("Asia/Colombo"); echo date("Y/m/d") ?>">
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Product<span class="required" style="color: red;">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="type" required="required" class="form-control col-md-7 col-xs-12">
                          <option style="color: red;">Select Product</option>
                           <?php $sql = "SELECT itemname FROM products";
                      $link = mysqli_connect('localhost','somawans_Dineth1','DINETH123','somawans_stores');

$done = mysqli_query($link, $sql);
                    
                    while($output = mysqli_fetch_assoc ($done)) { ?>
    
                      <option value="<?php echo $output['itemname']; ?>"> <?php echo $output['itemname']; ?></option>
                      <?php }  ?>
                          </select>
                        </div>
                      </div>



                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cases<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="cases"  class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Units<span ></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="units" class="form-control col-md-7 col-xs-12" id="phone1">
                        </div>
                      </div>


                     


                       


                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <input type ="submit" value = "submit" name = "display" class="btn btn-success"/>
                            <button class="btn btn-primary" type="reset">Reset</button>
                          
                        </div>
                      </div>

                      </form>
                      


          
       <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            © by Somawansa Stores
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
<?php
}
?>
