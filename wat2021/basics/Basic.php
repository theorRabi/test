<html>
	<head><title>PHP EXERCISES:basics</title>
	</head>
	<body>
		<h1><?php echo"Rabi shrestha <br/> 77202807";//my first php code ?></h1>
		<p>-------------------------------------------------</p>

		<p><?php echo"<strong>most programmers say it's better to use  'echo' rather than ' print ' says who??</strong>";?></p>
		<br>
		<h2><?php echo" <u>variables</u>";?></h2>
		<?php
			$name = "Rabi";
			$age=23;

		?>
		<p><?php echo"hi my name is $name and i am $age years old";?></p>
		<p><?php printf("Mi nombre es %s y tengo %u anos de edad ",$name,$age);?></p>

		<h2><u>Functions</u></h2>

		<?php 

			//function of stirngs
			echo gettype($name);
			echo "<br/>";
			echo gettype($age);
			echo "<br/>";
			echo strlen($name);
			echo "<br/>";
			echo strtolower($name);
			echo "<br/>";
			echo strrev($name);
		?>
		<p>---------------------------------</p>
		<h2>Arithmetic</h2>
		<?php
			$num1=9;
			$num2=12;

			#$multiple=null;
			#$percent = null;
			#$remainder= null;

			$multiple = $num1 * $num2 ;
			$percent = ($num1*100)/$num2;
			$remainder = $num2 % $num1;
			echo "<p> multiple of $num1 and $num2 is $multiple </p>";
			echo "<p>  $num1 percentage of  $num2 is $percent </p>";
			echo "<p> remainder of $num1 and $num2 is $remainder </p>";

			echo"<p>---------------------------------------------</p>";

			$height_metre=1.8;
			$height_in=($height_metre*100)/2.54; //hegiht in inches 
			$height_feet = $height_in/12;	//height in feet
			$remaining_height=$height_in%12; // remainder after calculating feet from metre
			$height= floor($height_feet); //rounding the hieght in feet to whole number

			//display block

			echo "<h2>last output</h2>";
			echo "<p>Name: $name <br/></p>";
			echo "<p>age: $age</p>";
			echo "<p>height in metre: $height_metre <br/></p>" ;
			echo"<p>height in feet and inches:$height ft and $remaining_height in</p><br/>";
			echo "git test";
			?>


	</body>
</html>