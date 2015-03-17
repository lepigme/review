<?php 
	$arr = array(
		array('id' => 1, 'name' => 'a'),
		array('id' => 2, 'name' => 'b'),
		array('id' => 3, 'name' => 'c'),
		array('id' => 4, 'name' => 'd'),
		array('id' => 5, 'name' => ''),
		array('id' => 6, 'name' => ''),
		array('id' => 7, 'name' => 'g'),
		array('id' => 8, 'name' => 'h'),
		array('id' => 9, 'name' => 'i'),
		array('id' => 10, 'name' => 'j'),
		array('id' => 11, 'name' => 'k'),
		array('id' => 12, 'name' => 'l'),
		);

	// echo '<pre>';
	// print_r($arr);
	// echo '</pre>';

	$result = array();
	for ($i=0; $i < count($arr); $i++) { 
		if(empty($arr[$i]['name']))
		{
			continue;
		}
		else
		{
			$r = array_slice($arr, $i, 1, TRUE);
			$r[$i]['groups'] = 1020;
		}

		// $result = $result + $r;
		$result = array_merge($result, $r);
	}

	var_dump($result);

 ?>