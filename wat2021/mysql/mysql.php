<!DOCTYPE html>
<html>
<head>
	<title>MY data base</title>
</head>
<body>
	<form method="POST" action="data.php" >
		<fieldset>
			<legend><b>Enter Customer Details</b></legend>
			<label for="name">FirstName:</label>
			<input type="text" name="fname"/><br/>
			<label for="name">LastName:</label>
			<input type="text" name="lname"/><br/>
			<label for="email">Email:</label>
			<input type="email" name="email"/><br/>
			<label for="password">password:</label>
			<input type="password" name="password"/><br/>
			<label for="gender">gender:</label>
			<input type="radio" value="male" name="gender"/>Male
			<input type="radio" value="female" name="gender"/>Female
			<input type="radio" value ="other" name="gender"/>Other<br/>
			<label for="age">age:</label>
			<input type="number" name="age"/><br/>
			<input type="submit" value="submit" name="submit"/> 
			<input type="reset" value="clear">
		</fieldset>
	</form>
	<?php include('display_results.php');?>
</body>
</html>

