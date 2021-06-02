<?php
	$initial_price = 25;
	
	
	$member_discount=10;
	$age =15;
	$membership=true;

	

	switch ($age) {
		case $age<12:
			$discount = 50 ;
			break;
		case $age<18:
			$discount = 25;	
			break;
		case $age<65:
			$discount = 10;	
			break;
		default:
			echo "invalid age.";
			break;
		}
	
	if($membership){
		$discount = $discount + $member_discount;
	}
	$final_price = $initial_price -(($discount/100) *$initial_price);

	echo "Initial ticket price: $initial_price <br/>";
	echo "age: $age<br/>";
	echo "member: $membership<br/>";
	echo "final ticket price : $final_price";

	?>