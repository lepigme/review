<?php
	// 1.建立连接
	$conn = mysql_connect('rds6zjqba6zjqba.mysql.rds.aliyuncs.com', 'lepig', 'lepigme');
	if (!$conn) {
		echo '数据库连接失败：' . mysql_error();
		exit;
	}
	// 2.选择数据库
	if (!mysql_select_db('r8ku0nmys4kbdz28', $conn)) {
		echo '无法选择指定的数据库，请检查数据库名称' . mysql_error();
		exit;
	}

	// 3.设置字符编码
	mysql_set_charset('utf8', $conn); //或者也可以使用 mysql_query("SET NAMES 'utf8'")  推荐第一种

	// 4.准备SQL语句
	$sql = "SELECT `name`,`name_en`,`name_pinyin` FROM `ht_location`";

	// 5.进行数据库操作,返回对象结果集
	$result = mysql_query($sql, $conn);
	if (!$result) {
		echo 'SQL语句出错:' . mysql_error();
		exit;
	}

	while ($row = mysql_fetch_assoc($result)) { // $row每次被赋值以后，结果集中的指针就会向后移动一个
		$res[] = $row; //结果集变成数组
	}
	print_r($res);

	// 6.释放结果集资源
	mysql_free_result($result);

	// 7.关闭MySQL连接
	mysql_close($conn);
?>