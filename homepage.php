<?php 
session_start();
include();


$user_id = $_SESSION["id"];
$userName = $_SESSION["uName"];
?>

<html>
<head><title>home page</title>
</head>
<body>

<?php
  echo "<p> user id: <strong>". $user_id."</strong> </p>";
  echo "<p> user name: <strong>". $uName."</p> </strong>";
 ?>


<a href="home.php">HOME  </a>
<a href="loginpage.php">Login </a>

<hr/>

<h3>WELCOME TO HOME</h3>
<p>fill in the field bellow</p>


</body></html>