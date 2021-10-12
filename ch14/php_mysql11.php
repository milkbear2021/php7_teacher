<?php 
	header("Content-Type: text/html; charset=utf-8");
	//上式為設定本網頁編碼為utf8
	//資料庫主機設定
	$db_host = "localhost:3308";
	$db_username = "root";
	$db_password = "";
	$db_name = "class";//資料庫名稱
	//連線資料庫
	$db_link = @new mysqli($db_host, $db_username, $db_password, $db_name);
	//錯誤處理
	if ($db_link->connect_error <> "") {
		echo "資料庫連結失敗！";
	}else{
		echo "資料庫連結成功！";
	}
	$db_link->query("SET NAMES utf8");//設定從資料庫讀出的資料編碼為utf8,才不會在顯示資料時出現亂碼
?>