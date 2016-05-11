<?php
	if(empty($_POST['namephp'])){
		$name='匿名';
	}else{
		$name=$_POST['namephp'];
	}
	
	$db=mysql_connect('///mysqlのサーバー///','//mysqlのユーザー名///','///mysqlのパスワード///)or die('接続失敗');
	mysql_select_db('///mysqlのデータベース///',$db);
	mysql_set_charset("utf8");
	$conv_txt=mysql_real_escape_string((htmlspecialchars($_POST['textphp'],ENT_QUOTES)));
	$conv_name=mysql_real_escape_string((htmlspecialchars($name,ENT_QUOTES)));
	mysql_query("INSERT INTO ///mysqlのテーブル/// VALUES('','$conv_name','$conv_txt',now())")or die('ダメじゃん'.$conv_txt.$conv_name);
	mysql_close($db) or die('切断失敗');
	exit;
?>