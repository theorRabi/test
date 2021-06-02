<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>
<?php 
	$products = array("t-shirt","cap","mug");

	print_r($products);
	$products[1] = "shirt";
	echo "<br/>";
	print_r($products);
	echo"<br/>";
	array_push($products,"skirt");
	print_r($products);


	echo"<br/>The item at index[2]: $products[2]";
	echo "<br/>The item at index[3]:$products[3]";

	$customer =array("custName"=> "sarah","custAge" => 23,"custGender" =>"F");
	$customer["custEmail"] = "sarah@gmail.com";
	print_r($customer);
?>