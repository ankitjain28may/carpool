
<?php 

session_start();
#setcookie('email', 'pass' ,10, "/"); // 86400 = 1 day
$u = $_SESSION['email'];
if(empty($u))
{
echo "Please Login";
die();
}
else
{

	unset($_SESSION['email']);
    header('Location: http://10.60.81.65:8080/carpool/login.html');
}

?>
