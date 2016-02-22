
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

	unset($_SESSION);
    header('Location: login.php');
}

?>
