<?php

$email=$_POST['email'];
$pass=$_POST['pass'];

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "carpool";
$prefix = "";

$bd = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");

$pass1 = md5($pass);  //encrypt the password

$q2 = "SELECT mem_id from account where email = '$email'";  //check for the avalavility of email address

$result=$bd->query($q2);


$row = $result->fetch_assoc();
$p= $row["mem_id"];

$check = "SELECT pass from login_info where same_id='$p'"; //check for the password

$result=$bd->query($check);
$row = $result->fetch_assoc();
$p= $row["pass"];

if($p!=$pass1)
{
 	echo "Invalid Credentials";
 	die();
}

else
{
 	session_start();
 	$_SESSION['email']=1;
    header('Location: home.php');
}
?>
