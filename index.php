<?php
session_start();
if(!isset($_SESSION['login'])){
	$_SESSION['login'] = false;
}
?>
<html>
<head>
<script src="Scripts.js"></script>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Home</title>
</head>
<header>
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

<article class="indexarticle">
<div class="album">
<figure>
<img src="oooo.png" alt="album" href="Skills.html"/>
</figure>
</div>

<div class="albuminfo">
<section>
<h1>See My Achievements</h1>
<ul>
<li><a href="Skills.php">Music Productions</a></li>
<li><a href="Skills.php">Winned Awards</a></li>
<li><a href="Skills.php">Skills</a></li>
<li><a href="Skills.php">More...</a></li>
</ul>
</section>
</div>
</article>

<div class="asidelogin">
<aside>
<form class="f" action="login.php" method="post">
<p>Email: <br><input type="text" name="user" /></p>
<p>Password: <br><input type="text" name="pass" /></p>
<input class="loginpbutton" type="submit" value="Login" />
</form>
</aside>
</div>

</body>

<footer>
Updated by Yuanxu Han, 3rd May 2020
</footer>

</html>