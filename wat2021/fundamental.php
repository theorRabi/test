<!DOCTYPE html>
<html lang="en">
<head>
<title>Web Applications and Technologies</title>
<link type="text/css" rel="stylesheet" href="main.css" />
</head>
<body>
<header>
<h1>Rabi Shrestha <br/> C7202807</h1>
<p>-----------------------------</p>
</header>
<section id="container">
<h1>Fundamentals of PHP</h1>
<p>--------------------------</p>
<?php
echo "<h1>Selection</h1>";
echo "<p>-------------------</p>";
$day = date('l');
$user_date = "Tuesday";


if($day==$user_date){
echo "its midweek<br/>";

	
}else
{
	echo "its not midweek.<br/>";
}

$hour = date('H');

if($hour <12){
	echo "good morning.<br/>";

}
elseif($hour > 12 && $hour < 18){
	echo "good afternoon.<br/>";
}
else{
	echo "good night<br/>";
}
$pwd= "password";
if(strlen($pwd)>4 && strlen($pwd)<10){
	echo "password is valid.<br/>";
}
else{
	echo "password is invalid.<br/>";
}

if( $pwd == "password"){
	echo "password is valid.";
}
elseif($pwd == "username"){
	echo "password is invalid";
}
?>
</section>
<footer>
<small> <a href="../watindex.php">Home</a></small>
</footer>
</body>
</html>