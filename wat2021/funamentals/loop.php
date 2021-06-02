<?php

	$counter=1;

	while($counter<6){
		echo "count: ".$counter."<br/>";
		$counter++;
	}
	$counter=1;
	$shirtPrice=9.99;

	echo '<table>'.'<tr>'.'<td>'.'<b>count</b>'.'</td>'.'<td>price</td>'.'</tr>';
	while($counter<=10){
		$total = $counter * $shirtPrice ;
		echo "<tr><td>$counter</td> <td>$total</td></tr><br/>";
		$counter++;

	}
	echo '</table>';
	$name=array("peter","kat","laura","ali","popacatapetal");
	for($count=0; $count<5;$count++){
		echo "$name[$count]<br/>";
	}
	$name = array("peter"=>"c123456", "kat"=>"c654321","laura"=>"c987654","ali"=>"c654987","popacatapetal"=>"c765984");
	foreach ($name as $key => $value) {
		echo"name:$key \t ID:$value <br/>";
		# code...
	}
	$city= array("peter"=>"LEEDS","kat"=>"bradford","laura"=>"wakeField");

	foreach($city as $key => $value){
		 strtolower($city[$key]);
		 ucfirst($city[$key]);
		

	}
	print_r($city);

	?>