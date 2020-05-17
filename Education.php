<html>
<head>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="Scripts.js"></script>
<title>Education and Qualifications</title>
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
<h1>Education and Qualifications</h1>
</div>
<section>
<div class="Skills">
<h1>Education</h1>
<ul>
<li><b>Primary School: </b>International School Kunshan (Suzhou, Jiangsu, China)</li>
<br>
<li><b>GCSE: </b>St. Edmund's College</li>
<br>
<li><b>A Levels: </b>St. Edmund's College</li>
<br>
<li><b>University: </b>Queen Mary University London (current)</li>
<br>
</ul>
</div>
<div class="Achievements">
<h2>Qualifications</h2>
<ul>
<li><b>GCSE: </b><ul>
<br>
<li>Mathematics: 8</li>
<br>
<li>Chinese: A</li>
<br>
<li>ESL: B</li>
<br>
<li>Music: B</li>
<br>
<li>Computing: A</li>
<br>
<li>Biology: B</li>
<br>
<li>Physics: B</li>
<br>
<li>Chemistry: C</li>
<br>
</ul></li>
<li><b>A Levels: </b><ul>
<br>
<li>Mathematics: A</li>
<br>
<li>Chinese: B</li>
<br>
<li>Computing: B</li>
<br>
<li>Music: B</li>
<br>
</ul></li>
<li><b>IELTS: </b><ul>
<br>
<li>Overall: 7.5</li>
<br>
<li>Listening: 8.5</li>
<br>
<li>Reading: 8.0</li>
<br>
<li>Speaking: 7.0</li>
<br>
<li>Writing: 6.0</li>
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