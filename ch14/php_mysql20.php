<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlPdo.php");
	$sql_query = "SELECT * FROM students";
	$result = $db_link->query($sql_query);
	//$result = $db_link->query("SELECT * FROM students");由3及4列合併而成
	while($row_result=$result->fetch()){
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br>";
		}
		echo "<hr>";
	}
?>