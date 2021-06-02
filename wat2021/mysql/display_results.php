<?php
	include('connection.php');

	$sql ="SELECT * FROM customer";//sql statement for showing all the value of the table
	$result= mysqli_query($connection,$sql);//passing the sql statement to mysql and storing the result 

	echo '<table>';
	echo '<tr><td>'.'FirstName'.'</td>'.'<td>'.'LastName'.'</td>'.'<td>email</td>'.'</tr>';
	//storing data of the sql query result into asscociative array using loop
	while($res=mysqli_fetch_assoc($result)){
		echo '<tr>'.'<td>'.$res['firstName'].'</td>'.'<td> '.$res['lastName'].'</td>'.'<td>'.$res['email'].'</td>'.'</tr>';
	}
	echo '</table>';
	echo "<br/>";

	echo "<u><b>select all from the customer table whit age>22 </b></u> <br/>";
	echo "<br/>";
	$sql2="SELECT * FROM customer WHERE age>22"; //sql statement for selecting data where age is greater than 22
	$result2= mysqli_query($connection,$sql2); //passing the query to mysql using mysqli query function

	//fetching the data and storing it into array using while loop and fetch function
	while($row = mysqli_fetch_assoc($result2)){
		echo $row['firstName'].' | '.$row['lastName'] .' | ' . $row['email'].'<br/>';
	}

	//sql statement for selecting data where age is  greater than or equal to 22
	$sql3="SELECT * FROM customer WHERE age>=22";
	$result3= mysqli_query($connection,$sql3);
	echo '<h3>selec all from customer where age is greater than or equal to 22</h3><br/>';
	while($row = mysqli_fetch_assoc($result3)){
		echo $row['firstName'].' | '.$row['lastName'] .' | ' . $row['email'].'<br/>';
	}



?>