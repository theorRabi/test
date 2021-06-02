<?php
include('connection.php');

if(isset($_POST['submit'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(isset($_POST['gender'])){
	if($_POST['gender']=="male"){
		$gender='M';
	}
	elseif($_POST['gender']=="female"){
		$gender='F';
	}
	else{
		$gender='O';
	}
	}
	$age=$_POST['age'];


if($connection){
$query="INSERT INTO customer(firstName,lastName,email,password,gender,age)VALUES('$fname','$lname','$email','$password','$gender',$age)";
	echo "$query <br/>";
	mysqli_query($connection,$query);
	if(mysqli_query($connection,$query)){
		echo"record inserted successfully <br/>";
	}
	else{
		echo "Error:could not able to execute:". mysqli_error($connection); 
	}
}else{
echo "error connecting";
}
}

?>