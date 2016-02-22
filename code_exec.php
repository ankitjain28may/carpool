
<?php
session_start();
$user=$_POST['user'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$rpass=$_POST['rpass'];


$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "simple_login";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");

$query = "INSERT INTO member  VALUES(null, '$user', '$email', '$pass', '$rpass')";
mysqli_query($bd, $query);
$_SESSION['email']=$email;
$_SESSION['count']=1;
header('Location: home.php');
//mysql_close($bd);


?>