<?php 
	echo memory_get_usage(). '<br>';

	$a = array(1,2,343,43,24234,24,324234,242,424,2,42,4,24,2,4,234,2,4324,4,2423423,4234);
	echo memory_get_usage(). '<br>';

	unset($a);

	echo memory_get_usage();

	switch ($list) {
		case '1':
			$this->user_model->get_list();
			break;
								
		default:
			fsdf
			break;
	}

	
 ?>