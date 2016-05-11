<?php
	$db=mysql_connect('///mysqlのサーバー///','//mysqlのユーザー名///','///mysqlのパスワード///')or die('接続失敗!');
	mysql_select_db('///mysqlのデータベース///',$db);
	mysql_set_charset("utf8");
	$json = array();
	$result = mysql_query('SELECT * FROM ///mysqlのテーブル///', $db);
	while ($data = mysql_fetch_array($result)) {
		$json[]=$data;
  	}
	mysql_close($db) or die('切断失敗');
	print json_encode($json);
?>