<?php 
/**
* ff
*/
class myTest
{
	const NAME = 'CaoDaPeng';
	const AGE = 26;

	public $name = 'lepig';

	static $age = 26;

	static $sex = 'boy';

	public function myHome() {
		echo 'AnHui ChuZhou';
	}
	static function myName() {

		echo 'My Name Is ' . self::$age;
	}

	static function getInfo() {
		echo 'My Info:' . self::myHome();
	}


}

$obj = new myTest();
echo $obj->name . '<br>';

echo $obj::$sex . '<br>';

echo $obj::NAME . '<br>';

echo $obj::getInfo();


?>