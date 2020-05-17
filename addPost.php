<?php
session_start();
if(!$_SESSION['login']){
	header('location:login.html;');
}
$dbhost = 'localhost';
$dbport = 3306;
$dbuser = 'Yuanxu';
$dbpass = '123456';
$conn = mysqli_connect("{$dbhost}:{$dbport}", $dbuser, $dbpass);
if(! $conn )
{
  die('Failed to connect to MySQL: ' . mysqli_error($conn));
}
$month = '';
if(date('m')== '01'){
	$month = 'Jan';
}elseif(date('m')== '02'){
	$month = 'Feb';
}elseif(date('m')== '03'){
	$month = 'Mar';
}elseif(date('m')== '04'){
	$month = 'Apr';
}elseif(date('m')== '05'){
	$month = 'May';
}elseif(date('m')== '06'){
	$month = 'Jun';
}elseif(date('m')== '07'){
	$month = 'Jul';
}elseif(date('m')== '08'){
	$month = 'Aug';
}elseif(date('m')== '09'){
	$month = 'Sep';
}elseif(date('m')== '10'){
	$month = 'Oct';
}elseif(date('m')== '11'){
	$month = 'Nov';
}else{
	$month = 'Dec';
}
$dd = '';
if(date('d')==1){
	$dd = 'st';
}elseif(date('d')==2){
	$dd = 'nd';
}elseif(date('d')==3){
	$dd = 'rd';
}else{
	$dd = 'th';
}
$_SESSION['date'] = date('d').$dd.' '.$month.' '.date('Y').' '.date('h:i:sa').' BST';
$_SESSION['title'] = $_POST['title'];
$_SESSION['post'] = $_POST['post'];
$thedate = $_SESSION['date'];
$title = $_SESSION['title'];
$post = $_SESSION['post'];
mysqli_query($conn,"set names 'utf8'");
mysqli_select_db($conn,"blog_db");
$total = mysqli_query($conn,"SELECT COUNT(*) FROM blog");
$total = mysqli_fetch_row($total);
$total = $total[0];
$sql = "INSERT INTO blog(time,title,content) VALUES ('$thedate','$title','$post')";
mysqli_query($conn,$sql);
mysqli_close($conn);
header('location:viewBlog.php'."?".SID);
?>
