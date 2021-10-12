<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <button class="btn btn-info" onclick="history.go(-1);">回上一頁</button>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysqlObj.php");
	$sql_query = "SELECT * FROM students";
	$result = $db_link->query($sql_query);	
  //while($row_result=mysqli_fetch_array($result)){
	//$type =MYSQLI_BOTH;//MYSQLI_ASSOC=1、MYSQLI_NUM = 2、MYSQLI_BOTH = 3
    	$type =$_GET['showSelect'];//要$_GET一定要有表單傳來的資料
		while($row_result=$result->fetch_array($type)){
		foreach($row_result as $item=>$value){
			echo $item."=".$value."<br>";
		}
		echo "<hr>";
	}
		$db_link->close();
?>