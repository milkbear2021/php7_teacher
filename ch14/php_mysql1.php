<?php 
	header("Content-Type: text/html; charset=utf-8");//設定網頁內容類型及字元集
	$db_link = mysqli_connect("localhost:3308", "root", "");
	//$db_link為自定變數存放著伺服器連線識別碼
	if (!$db_link) {
		echo "資料連結失敗";
	}else{
		echo "資料連結成功";
	}
?>