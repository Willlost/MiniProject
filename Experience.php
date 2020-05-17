<html>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="Scripts.js"></script>
<title>Experience</title>
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
<div class="experiencehead">
<h1>Experience</h1>
</div>
<div class="experience">
<section>

<h1></h1>
<p>
I had an internship at "Zhi Teng Vehicle Software Co., Ltd." from July to August 2019.
The company is located in Suzhou, China. It is a small company made of less than 50 people.<br><br>
I studied about C language and Embedded System development at the company. <br><br>
During the time I had good communications with my colleagues and made some friends. <br><br>
For my own project, I developed a electric car that can be controlled by a virtual remote on android phones through bluetooth. 
</p>
</section>
</div>
</article>

</body>

<footer>
Updated by Yuanxu Han, 3rd May 2020
</footer>

</html>