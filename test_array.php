<?php
	$str = 'a:1:{s:2:"id";s:10:"1002159770";}';

	$r = unserialize($str);

	var_dump($r);
?>