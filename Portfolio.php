<html>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="Scripts.js"></script>
<title>About Me</title>
</head>
<header>
<?php
session_start();
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

<article>
<div class="aboutme">
<div class="aboutmehead">
<h1>About Me</h1>
</div>

<section>

<h1>My Background</h1>
<p>
<b>Name: </b>Yuanxu Han
<br>
<br>
<b>Date of Birth: </b>31st July 2000
<br>
<br>
<b>Country: </b>China
<br>
<br>
<b>Occupation: </b>Student
<br>
<br>
<b>Education: </b>Queen Mary University London
</p>
</section>
</div>
<div class="selfie">
<img src="selfie.jpg" alt="Yuanxu Han"/>
</div>
</article>

</body>

<footer>
Updated by Yuanxu Han, 3rd May 2020
</footer>

</html>