<?php 
	$json_firstName = '{"firstName":"le"}';
	$json_lastName = '{"lastName":"pig"}';
	$r = json_decode($json_firstName, true);
	print_r($r);
echo '<br>';	
	$last = json_decode($json_lastName);

	print_r((array)$last);



?>