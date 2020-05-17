<html>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="Scripts.js"></script>
<title>Skills and Achievements</title>
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
<div class="SaA">
<div class="Skillshead">
<h1>My Skills and Achievements</h1>
</div>
<section>
<div class="Skills">
<h1>Skills</h1>
<ul>
<li>Programming in Java, Python, HTML, PHP</li>
<br>
<li>Music Production with various instruments, including electronic instruments</li>
<br>
<li>Fluent Chinese/English speaking</li>
<br>
<li>Good at communication, love to make friends</li>
</ul>
</div>
<div class="Achievements">
<h2>Achievements</h2>
<ul>
<li>2018 Best Computing Student of St. Edmund's College (A Levels)</li>
<br>
<li>ABRSM Grade 5 Music Theory</li>
<br>
<li>ABRSM Grade 8 Piano</li>
<br>
<li>Maths Challenge: <ul>
<br>
<li>Bronze: 1</li>
<br>
<li>Silver: 2</li>
<br>
<li>Gold: 1</li>
<br>
<br>
</ul></li>
</ul>
</div>
</section>
</div>

</article>

</body>

<footer>
Updated by Yuanxu Han, 3rd May 2020
</footer>

</html>