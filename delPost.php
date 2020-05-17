<?php
session_start();
if(!$_SESSION['login']){
	header('location:login.html;');
}
$delid = $_POST['delid'];
$dbhost = 'localhost';
$dbport = 3306;
$dbuser = 'Yuanxu';
$dbpass = '123456';
$conn = mysqli_connect("{$dbhost}:{$dbport}", $dbuser, $dbpass);
if(! $conn )
{
  die('Failed to connect to MySQL: ' . mysqli_error($conn));
}
mysqli_select_db($conn,"blog_db");
mysqli_query($conn,"DELETE FROM blog WHERE time='".$delid."'");
mysqli_close($conn);
header('location:viewBlog.php');
?>
