<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");
	$sql_query = "SELECT * FROM students";
	$result = $db_link->query($sql_query);	
  //while($row_result=mysqli_fetch_array($result)){
	//$type =MYSQLI_BOTH;//MYSQLI_ASSOC=1、MYSQLI_NUM = 2、MYSQLI_BOTH = 3
	$type =1;
		while($row_result=$result->fetch_array($type)){
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br>";
		}
		echo "<hr>";
	}
	
	$db_link->close();
?>