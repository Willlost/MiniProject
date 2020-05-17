<?php
session_start();
if(!$_SESSION['login']){
	$_SESSION['login'] = false;
	$_SESSION['username'] = $_POST['user'];
	$_SESSION['password'] = $_POST['pass'];
	$dbhost = 'localhost';
	$dbport = 3306;
	$dbuser = 'Yuanxu';
	$dbpass = '123456';
	$conn = mysqli_connect("{$dbhost}:{$dbport}", $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Failed to connect to MySQL: ' . mysqli_error($conn));
	}
	echo 'Connection made! <br />';
	$sql = "SELECT * FROM login";
	mysqli_query($conn,"set names 'utf8'");
	mysqli_select_db($conn,"blog_db");
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);
	$username = $row['username'];
	$password = $row['password'];
	$getuser = $_SESSION['username'];
	$getpass = $_SESSION['password'];
	$content = file_get_contents('login.html');
	$file = fopen("login.html","w");
	$failed = "Invalid username or password!";
	if($username!=$getuser || $password!=$getpass){
		$updated = str_replace('<p class="fail"></p>','<p>'.$failed.'</p>',$content);
		fwrite($file,$updated);
		header("location: login.html");
	}else{
		$updated = str_replace('<p>'.$failed.'</p>','<p class="fail"></p>',$content);
		fwrite($file,$updated);
		$_SESSION['login'] = true;
		header("location: viewBlog.php"."?".SID);
	}
	fclose($file);
	mysqli_close($conn);
}else{
	header("location: viewBlog.php"."?".SID);
}
?>