

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


                        



    <title>Somawansa Stores -Store Management System</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>










 <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                   <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">views


<?php
 // Connects to your Database 
 @mysql_connect('localhost','root','') or die(mysql_error()); 
 mysql_select_db("user_registration") or die(mysql_error()); 
//Adds one to the counter

mysql_query("UPDATE counter SET counter = counter + 1");

//Retrieves the current count

$count = mysql_fetch_row(mysql_query("SELECT counter FROM counter"));

//Displays the count on your site

print "$count[0]";

?>




                  </div>
                  <h3>Sign up for</h3>
                  <p>Amaizing Experience..!</p>
                </div>
              </div>



  <body class="login">

  
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action ="#" method ="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name ="user" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name ="pass" />
              </div>
              <div>
                <input type ="submit" value = "Login" name ="submit" class="btn btn-dark"/>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
               
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Somawansa Stores - Store <i class="fa fa-paw"></i> Management System </h1>
                  <p>©2017 All Rights Reserved.Privacy and Terms</p>
                </div>
              </div>



            </form>

            <?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
  $user=$_POST['user'];
  $pass=$_POST['pass'];

  $con=@mysql_connect('localhost','root','') or die(mysql_error());
  mysql_select_db('user_registration') or die("cannot select DB");

  $query=mysql_query("SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");
  $numrows=mysql_num_rows($query);
  if($numrows!=0)
  {
  while($row=mysql_fetch_assoc($query))
  {
  $dbusername=$row['username'];
  $dbpassword=$row['password'];
  }

  if($user == $dbusername && $pass == $dbpassword)
  {
  session_start();
  $_SESSION['sess_user']=$user;

  /* Redirect browser */
  header("Location: production/home.php");
  }
  } else {
  echo "<h2>"."Invalid username or password!"."</h2>";
  }

} else {
  echo "<h2>"."All fields are required!"."</h2>";
}
}
?>



          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
           
          </section>
        </div>
  </body>
</html>


