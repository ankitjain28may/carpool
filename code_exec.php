
<?php
session_start();
$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

  echo("$email is a valid email address");

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "simple_login";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");

$pass1 = md5($pass);
$query = "INSERT INTO member  VALUES(null, '$user', '$email', '$pass1', '$rpass')";
if (mysqli_query($bd, $query)){
$_SESSION['email']=1;
$_SESSION['count']=1;
header('Location: home.php');
}
}
//mysql_close($bd);
else {
	
  echo("$email is not a valid email address");
}

?>