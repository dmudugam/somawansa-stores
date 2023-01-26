

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Contact Book| </title>

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

<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

 <form method ="POST" action ="#">
              <h1>Create New User</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name ="user" />
              </div>
              
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name ="pass" />
              </div>
              <div>
                <input type ="submit" value="Register" name="submit" class="btn btn-dark"/>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="login.php" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i>Online Contact Book</h1>
                  <p>©2016 All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>




<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
  $user=$_POST['user'];
  $pass=md5($_POST['pass']);

  $con=@mysql_connect('localhost','somawans_Dineth1','DINETH123') or die(mysql_error());
  mysql_select_db('somawans_user') or die("cannot select DB");

  $query=mysql_query("SELECT * FROM login WHERE username='".$user."'");
  $numrows=mysql_num_rows($query);
  if($numrows==0)
  {
  $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";

  $result=mysql_query($sql);


  if($result){
  echo "Account Successfully Created";
  } else {
  echo "Failure!";
  }

  } else {
  echo "That username already exists! Please try again with another.";
  }

} else {
  echo "All fields are required!";
}
}
?>




</body>
</html>


