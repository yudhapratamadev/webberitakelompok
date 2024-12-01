<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('koneksi.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
	$username = ($_REQUEST['username']);
    //escapes special characters in a string / mencegah sql injeqtion
	$username = mysqli_real_escape_string($conn,$username);
	$password = ($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
	$result = mysqli_query($conn,$query) or die(mysqli_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
    // Redirect user to index.php
	    header("Location: admin.php");
         }else{
	echo "<div class='form'>
<h3>Username/password Salah.</h3>
<br/>Klik Disini <a href='login.php'>Login</a></div>";
	}
    }else{
?>

<table align="center">
	<h1><th align="center">Sign In</th></h1>
<form action="" method="post" name="login">
<tr>
	<td><input type="text" name="username" placeholder="Username" required /></td>
</tr>
<tr>
	<td><input type="password" name="password" placeholder="Password" required /></td></tr>
<tr>
	<td><input name="submit" type="submit" value="Login" /><input name="reset" type="reset" value="Reset" /></td>
</tr>
</form>
<tr><td>Not registered? <a href='registrasi.php'>Register Here</a></td></tr>
</div>
<?php } ?>
</body>
</html>