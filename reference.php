<?php
class reference
{
	public $value = 100;
	function &getValue() {
		return $this->value;
	}
}

$obj = new reference();
$myValue = &$obj->getValue();
$obj->value = 2;

echo $myValue;

var_dump($obj->value);
?>