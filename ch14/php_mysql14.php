<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");
	$sql_query = "SELECT * FROM students";
	$result = $db_link->query($sql_query);
	//while($row_result=mysqli_fetch_row($result)){-->mysqli的寫法
	while($row_result = $result->fetch_row()){//這是mysqli Object的寫法
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br>";
		}
		echo "<hr>";
	}
	
	$db_link->close();
?>