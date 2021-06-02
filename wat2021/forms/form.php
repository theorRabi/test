<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>

<html>
	<head>
		<title>
			PHP exercise: forms
		</title>
	</head>
	<body>
		<h1>processing Input from HTML Forms</h1>
		<h2>Login from Using Get</h2>

		<form method="POST" action="form.php">
			<fieldset>
				<legend>
					login
				</legend>
				<label for="email">email:</label>
				<input type="text" name="txtEmail" /><br/>
				<label for="password">password:</label>
				<input type="password" name="txtPass"><br/>
				<input type="submit" name="loginsubmit" value="submit">
				<input type="reset" value="clear">
			</fieldset>
		</form>
			<?php
				
				if(isset($_POST['loginsubmit'])){
					$email = $_POST['txtEmail'];
					$password = $_POST['txtPass'];
					echo "email:$email <br/> password:$password";

				}
				
			?>

		<form method="POST" action="form.php">
			<fieldset>
				<legend>Comments</legend>
				<label for="">Email: </label>
				<input type="text" name="email" value="" /><br />
				<textarea rows="4" cols="50" name="txtArea"></textarea><br />
				<label for="">Click to Confirm: </label>
				<input type="checkbox" name="chkBtn" value="agree"><br />
				<input type="submit" value="Submit" name="cmntSubmit"/>
				<input type="reset" value="Clear" />
			</fieldset>
		</form>
		<?php
			if(isset($_POST['cmntSubmit'])){
				
				

				if(isset($_POST['chkBtn'])){
					$confirm = "agreed";
				}
				else{
					$confirm = "not agreed";
				}
				if(isset($_POST['email'])){
				if(empty($_POST['email'])){
					echo "email must not be empty";

				}
				else{
					$email=$_POST['email'];
					$cmnt=$_POST['txtArea'];
					echo "E-mail: $email <br/> comments: $cmnt <br/> confirm: $confirm " ;
				}
			}


				
			}
		?>

	</body>
</html>