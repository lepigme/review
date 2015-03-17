<?php 
/*
	$str = '12345';

	echo $str[3]."\r\n";

	if(!isset($str[5])) {
		echo '有值';
	}else{
		echo '没值';
	}
*/


/**
* Test
*/
// class member
// {
	
// 	const NAME = 'lePig';
// 	const SEX  = 'boy';

// 	private $age = 25;

// 	public function age()
// 	{
// 		echo self::$xueli;
// 		echo '<br>';
// 		echo self::SEX;
// 		echo '<hr>';
// 	}

// 	public static $xueli = '大专';


// }


// $ret = new member();

// echo $ret::NAME.'<br>';

// echo $ret->age().'<br>';

// echo $ret::$xueli;

// echo '<hr>';

// echo $ret->$age;
// 
// 
//-------------------------------------------------------------------



// var_dump($_POST);

// var_dump($_POST['sex']);

// var_dump(is_null($_POST['sex']));

// var_dump($_POST);

// $str = str_replace("\r\n", '<pre>' . $_POST['content'] . '</pre>', $_POST['content']);


// var_dump($str);

// echo $digital = rand(0, 9999);
// echo $A = chr(rand(65, 90)); //大写
// echo $a = chr(rand(97, 122)); //小写
// echo '<hr>';
// $result = $digital . $A . $a;
// echo str_shuffle($result);

// var_dump(intval($_POST['content']));

// echo intval($_POST['content']);


/*
$content = mysql_connect('rds6zjqba6zjqba.mysql.rds.aliyuncs.com', 'lepig', 'lepigme');
mysql_select_db('r8ku0nmys4kbdz28'); //选择库

$condition = 'f5603da9767ed032bd2d00faa909e5ed';
// $sql = "SELECT * FROM wailian WHERE key1 = '" . $condition . "'";
// $sql = "SELECT * FROM wailian WHERE key1 = '$condition'";
$sql = "SELECT * FROM `wailian` WHERE `key1` = '{$condition}'";


$result = mysql_query($sql);
$r = mysql_fetch_assoc($result);
var_dump($r);
echo $sql;
*/



// function remove_directory($dir)
// {
// 	if($handle=opendir("$dir"))
// 	{
// 		while(false!==($item=readdir($handle)))
// 		{
// 			if($item!="."&&$item!="..")
// 			{
// 				if(is_dir("$dir/$item"))
// 				{
// 					remove_directory("$dir/$item");
// 				}else{
// 					unlink("$dir/$item");
// 					echo "removing".$dir."/". $item ."<br> ";
// 				}
// 			}
// 		}
// 		closedir($handle);
// 		rmdir($dir);
// 		echo"removing" .$dir."<br> ";
// 　	}
// }

function rm_dir($dir)
{
	if($handle = opendir($dir))
	{
		while (false !== ($item = readdir($handle)))
		{
			if($item != "." && $item != "..")
			{
				if(is_dir("$dir/$item"))
				{
					rm_dir("$dir/$item");
				}
				else
				{
					unlink("$dir/$item");
					echo "removing $dir/$item<br>";
				}
			}
		}
		closedir($handle);
		rmdir($dir);
		echo "removing$dir<br>";
	}
}

/*
$arr = array(
 	'a','b','c','d','e',
);

$id = '';
foreach ($arr as $key => $val) {
	$val .= $val.'.';
}

exit('hehe');
echo $val;
echo substr_count($id, '.');
*/

/*
$cars = array
  (
  array('A' => "Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

  echo json_encode($cars);

  // var_dump($cars);
  echo serialize($cars);
  echo '<br>';
  $addr = '收复失地发顺丰';
  $arr = array($addr);

  echo serialize($arr);
*/


/*
$str = '亲爱的%s用户，您的订单%u已经生成了';
echo sprintf($str, 'lePig', -10);
echo '<hr>';

$mobile = '15955125519';
var_dump(explode(',', $mobile));
*/

/*
$arr = [1,2,3,4];
echo $r = json_encode($arr, JSON_FORCE_OBJECT);
*/


/**
 *  使用fputcsv输出到csv文件
 * @var array
 */
// $list  = array (
//     array( 'aaa' ,  'bbb' ,  'ccc' ,  'dddd' ),
//     array( '123' ,  '456' ,  '789' ),
//     array( '"aaa"' ,  '"bbb"' )
// );

// var_dump($list);
// $fp  =  fopen ( 'file.csv' ,  'w' );

// foreach ( $list  as  $fields ) {
//      fputcsv ( $fp ,  $fields );
// }

// fclose ( $fp );


$A = array(1,3,5,7,10,33,54,2,78,89);
$B = array(10,8,5,4,1);
$C = array_intersect($A, $B);
var_dump($C);
  // 0 => int 1
  // 1 => int 5
  // 2 => int 10
//--------------------------------------
foreach ($A as $key => $val) {
	if (in_array($val, $B)) { //还是用到了数组函数
		$result1[] = $val;
	}
}
//--------------------------------------
foreach ($A as $key => $val) {
	foreach ($B as $k => $v) { //2层循环，效率最低
		if ($val == $v) {
			$result2[] = $val;
		}
	}
}
//--------------------------------------

// var_dump($result1);

/*
$r = array(
	'client' => 789,
	'client_secret' => '5ebe2294ecd0e0f08eab7690d2a6ee69',
	'option' => array(
		'trusted' => false,
		'active' => true,
	),
);

var_dump($r);
*/

// $defaults = [
//     'id'            => 123456,
//     'client_id'     => null,
//     'client_secret' => null,
//     'options'       => [
//         'trusted' => false,
//         'active'  => false
//     ]
// ];

// $options = [
//     'client_id'       => 789,
//     'client_secret'   => '5ebe2294ecd0e0f08eab7690d2a6ee69',
//     'client_password' => '5f4dcc3b5aa765d61d8327deb882cf99', // ignored
//     'client_name'     => 'IGNORED',                          // ignored
//     'options'         => [
//         'active' => true
//     ]
// ];

// print_r($defaults);
// print_r($options);
// var_dump(array_merge_recursive($defaults, array_intersect_key($options, $defaults)));

// echo prdfsf22(0);

/**
 * 冒泡排序---核心就是找个中间量来做替换
 * @var array
 */
$arr = array(9, 3, 8, 22, 100, 10, 76, 1, 999, 'a', 'A', 'b', 'B');
for ($i=0; $i<count($arr); $i++)
{
	for ($j=$i+1; $j<count($arr); $j++)
	{
		if ($arr[$i] < $arr[$j])
		{
			$tmp     = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $tmp;
		}
	}
}
// var_dump($arr);

for ($i=0; $i < count($arr); $i++) { 
	for ($j=$i+1; $j < count($arr); $j++) { 
		if ($arr[$i] < $arr[$j]) {
			$tmp = $arr[$i];
			$arr[$i] = $arr[$j];
			$arr[$j] = $tmp;
		}
	}
}
// var_dump($arr);

function time2string($timestamp, $h = 0, $m = 0)
{
    if(empty($timestamp) || $timestamp <= 60) {
        return false;
    }
    $day = floor($timestamp / (3600*24));
    $hour = floor(($timestamp % (3600*24)) / 3600);

    if($h && $m) {
        $minutes = floor((($timestamp % (3600*24)) % 3600) / 60);
        return $day.'天'.$hour.'小时'.$minutes.'分';
    }

    if($h) {
        return $day.'天'.$hour.'小时';

    }
    return $day.'天';
}

// echo time2string(3659,1,1);

/**
 * a b c d 
 *  a说我不是小偷
 *  b说c是小偷
 *  c说小偷肯定是d
 *  d说c胡说！
 *  中有3个人说的是实话，一个人说的是话，编程推断谁是小偷。
 */
	$xt = array('a', 'b', 'c', 'd');
	for ($i=0; $i<count($xt); $i++)
	{
		$thief = $xt[$i];
		$thief = (int)($thief != 'a') + (int)($thief == 'c') + (int)($thief == 'd') + (int)($thief != 'd');	
		if ($thief == 3) {
			// echo '小偷是:' . $xt[$i];
		}
	}
echo '<hr>';
	



/*
$numArr = [3, 7, 23, 98, 96, 103, 72];

for ($i=0; $i<count($numArr); $i++)
{
	if ($numArr[$i] > $numArr[$i + 1])
	{
		$tmp = $numArr[$i];
		$numArr[$i] = $numArr[$i + 1];
		$numArr[$i + 1] = $tmp;
	}
}

var_dump($numArr);
*/

/*
$n = 100;
for ($i=0; $i < 100; $i++) { 
	if ($n % 2 == 0)
	{
		$n = $n / 2;
		echo $n . '<br>';
		if ($n == 1) exit('偶数');
	}
	else
	{
		$n = $n * 3 + 1;
		echo $n . '<br>';
		if ($n == 1) exit('奇数');
	}
}
*/


// (exp1) ? (exp2) : (exp3); (exp1) ? : (exp3) 


/*
$str = 'http%3A%2F%2Fwww.harda.cn%2Fwx%2F';
echo urldecode($str);
*/

/*
$content = '我的名字叫%s,我今年%d岁了,%s';
$name = 'lepig';
$age  = 25;

echo sprintf($content, $name, $age, $result);
*/

$code = sprintf("%6d", substr(mt_rand(),0,6));
echo $code;
?>