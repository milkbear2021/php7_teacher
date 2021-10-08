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
    <?php 
	header("Content-Type: text/html; charset=utf-8");
	include("connMysql.php");//連線引入檔，連線伺服器
	$seldb = @mysqli_select_db($db_link, "class");//連線$db_link伺服器中的指定資料庫
	if (!$seldb) die("資料庫選擇失敗！");//如果連線失敗、顯示"資料庫選擇失敗！"
    $sql_query = "SELECT * FROM students";//將SQL指令的字串放到sql_query變數
	$result = mysqli_query($db_link, $sql_query);//執行SQL指令且將資料放入$result陣列
    $rowNum =0;//設定二維陣列中第一維變數的初始值為0
     while($row_result=mysqli_fetch_assoc($result)){//一次取得一筆資料且放入放入$row_result陣列
        foreach($row_result as $key=>$value){
            $personalRecord[$rowNum][$key]=$value;
        }
        $rowNum++;
        
	}
    echo "編號:".$personalRecord[1]['cID'];
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>