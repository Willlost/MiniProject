<html>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="Scripts.js"></script>
<title>Contact</title>
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
<h1>Contact</h1>
</div>

<section>

<h1>My contact detail</h1>
<p>
<b>phone(UK): </b>+44 07482072161 
<br>
<br>
<b>phone(China): </b>+86 13024504922 
<br>
<br>
<br>
<b>Email: </b>willlosth@gmail.com
<br>
<br>
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