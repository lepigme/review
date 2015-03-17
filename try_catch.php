<?php
/**
*自定义异常类
*/
/*
class MY_Exception extends Exception
{
	
	// function __construct($arge)
	// {
	// 	 $arge.'GGGGG';
	// }
	public function lepig($errorCode) {
		echo $errorCode;
	}

	public function errorInfo() {
		return '这是一个错误信息';
	}
}

$obj = new MY_Exception('FUCK');
var_dump($obj);


function checkNum($num) {
	if ($num > 1) {
		throw new MY_Exception("数值必须大于1", 1);
	}
}

try {
	checkNum(2);
} catch (MY_Exception $e) {
	echo $e->getMessage();
	echo '<br>';
	echo $e->errorInfo();
}
*/

/**
* 222222222
*/
class Mail
{
	
	function __construct($arge)
	{ //构造方法
		var_dump($arge);
	}
	public function index()
	{
		var_dump($_SERVER);
		$str = '?a=8/mail/lepig?f=343223';
		$arr = explode('/', $str);
		$ret = preg_replace('/\?(.*)/i','',$arr[2]);

		var_dump($ret);
	}

}
$obj = new Mail(array('uid' => 1)); //这里如果传参数，会传给构造方法
$obj->index();
?>