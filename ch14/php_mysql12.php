<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");//引入同一目錄中的connMysqlObj.php

	if ($result = $db_link->query("SELECT DATABASE()")) {
	    $row = $result->fetch_row();//將查詢的結果放入到$row陣列
	    //printf("目前連接的資料庫是「%s」<br>", $row[0]);
		echo "目前連接的資料庫「$row[0]」<br>";
	    $result->close();//把查詢所得的資料關閉
	}
	/* change db to world db */
	$db_link->select_db("test");

	/* return name of current default database */
	if ($result = $db_link->query("SELECT DATABASE()")) {
	    $row = $result->fetch_row();
	    printf("目前連接的資料庫是「%s」<br>", $row[0]);
	    $result->close();
	}
		
	$db_link->close();	
?>