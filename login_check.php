<?php
$email=$_POST['email'];
$pass=$_POST['pass'];

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "simple_login";
$prefix = "";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");


$pass1 = md5($pass);
$q2 = "Select * from member where email = '$email' and pass = '$pass1'";
$a = mysqli_query($bd, $q2);
$b = $a->num_rows;

 if($b==0)
 {
 	echo "Invalid Credentials";
 	die();
 }
 else
 {
 	session_start();
 	$_SESSION['email']=$email;
    header('Location: home.php');
}
?>
