<?php
session_start();
$dbhost = 'localhost';
$dbport = 3306;
$dbuser = 'Yuanxu';
$dbpass = '123456';
$conn = mysqli_connect("{$dbhost}:{$dbport}", $dbuser, $dbpass);
if(! $conn )
{
  die('Failed to connect to MySQL: ' . mysqli_error($conn));
}
mysqli_query($conn,"set names 'utf8'");
mysqli_select_db($conn,"blog_db");
$total = mysqli_query($conn,"SELECT COUNT(*) FROM blog");
$total = mysqli_fetch_row($total);
$total = $total[0];
if($total==0){
	if($_SESSION['login']){
		header('location:addPost.html');
	}else{
		header('location:login.html');
	}
}
$time = array();
$title = array();
$content = array();
for($i=0;$i<$total;$i++){
	$result = mysqli_query($conn,"SELECT * FROM blog limit ".strval($i).",".strval($i+1));
	$rows = mysqli_fetch_array($result);
	array_push($time,$rows['time']);
	array_push($title,$rows['title']);
	array_push($content,$rows['content']);
}
mysqli_close($conn);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="Scripts.js"></script>
<title>View Blog</title>
</head>
<header>
<?php
$id = SID;
if(!$_SESSION['login']){
	echo "<button class='loginbutton' type='button' onclick='login()'>LOGIN</button>";
}else{
	echo "<button class='loginbutton' type='button' onclick='logout()'>LOG OUT</button>";
}
?>
<h1><br>Welcome!</h1>
<p>My name is Yuanxu Han and this is my website</p>
<nav class="navbar">
<a href="index.php">Home</a>
<a href="AboutMe.php">About Me</a>
<a href="Skills.php">Skills and Achievements</a>
<a href="Education.php">Education and Qualifications</a>
<a href="Experience.php">Experience</a>
<a href="Portfolio.php">Portfolio</a>
<a href="Contact.php">Contact</a>
<a href="viewBlog.php">Blog</a>
</nav>
</header>

<body>
<article class="viewBlog">
<h1>Recent Blog</h1>

<?php
echo '<section class="theblog">';
for($j=0;$j<$total;$j++){
	echo '<h1 class="phead">'.$title[$j].'</h1>';
	echo '<p class="content">'.$content[$j].'</p><br />';
	echo '<p class="time">'.$time[$j].'</p><br />';
	if($_SESSION['login']){
		echo "<form action='delPost.php' method='post'>";
		echo "<input class='tbox' type='text' name='delid' value='".$time[$j]."' />";
		echo "<input class='loginbutton' type='submit' value='Delete' /><br />";
		echo "</form>";
	}
	echo '<hr>';
}
echo '</section>';
if($_SESSION['login']){
	echo "<section class='apost'><button class='loginbutton' type='button' onclick='addpost()'>Add Post</button></section><br /><br /><br /><br />";
}
?>
</article>

</body>

<footer>
Updated by Yuanxu Han, 3rd May 2020
</footer>

</html>