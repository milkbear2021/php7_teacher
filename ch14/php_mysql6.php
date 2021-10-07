<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");//連線引入檔，連線伺服器
	$seldb = @mysqli_select_db($db_link, "class");//連線資料庫
	if (!$seldb) die("資料庫選擇失敗！");//如果連線失敗、顯示"資料庫選擇失敗！"
	$sql_query = "SELECT * FROM students";//將SQL指令的字串放到sql_query變數
	$result = mysqli_query($db_link, $sql_query);//執行SQL指令且將資料放入$result陣列
	while($row_result=mysqli_fetch_row($result)){//一次取得一筆資料且放入放入$row_result陣列
		foreach($row_result as $item=>$value){//再把取得的資料索引放入到$item內容放到$value
			echo $item."=".$value."<br />";
		}
		echo "<hr />";
	}
?>