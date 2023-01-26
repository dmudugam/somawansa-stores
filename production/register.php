<!DOCTYPE HTML>
<html> 
<head>
<title>Sign-In</title>\\title of the page
</head>
<body id="body-color">

<div id="Sign-In">

<fieldset style="width:30%"><legend>LOG-IN</legend>\\field setup

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">\\open form tag

Username: <br><input type="text" name="username"  maxlength="50" value="<?php echo $username;?>"><br>\\get user name

Password: <br><input type="password" name="password" maxlength="50"value="<?php echo $password;?>"><br>get the password

<input type="submit" value="Log-In">\post the details
</form>\\close form

</fieldset>

</div>

<p>If you are not a exsiting user go to <a href="reg.php">Register</a></p>\\ link to the next page

</body>

</html>\\close html file