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
    echo "<div class='col-10 offset-1'>";
    echo "<h2>全班共有:".mysqli_num_rows($result)."人</h2>";
    echo "<table class='table table-striped'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>編號</th>";
    echo "<th>姓名</th>";
    echo "<th>性別</th>";
    echo "<th>生日</th>";
    echo "<th>電郵</th>";
    echo "<th>電話</th>";
    echo "<th>住址</th>";
    echo "<th>身高</th>";
    echo "<th>體重</th>";
    echo "</tr>";
    echo "</thead>";
    $countSexM=0;//設定一計算男性人數的變數且預設值為0
    while($row_result=mysqli_fetch_assoc($result)){//一次取得一筆資料且放入放入$row_result陣列
        echo "<tr>";
		//foreach($row_result as $item=>$value){//再把取得的資料索引放入到$item內容放到$value
        foreach($row_result as $key=>$value){
			echo "<td>".$value."</td>";
            if(($key=='cSex') && ($value=='M')){
                $countSexM+=1;//$countSexM = $countSexM +1
            }
           		}
        echo "</tr>";
	}
    echo "</table>";
    echo "全班共有:".mysqli_num_rows($result)."人";
    echo "<br>男生有:{$countSexM}人、女生有:".(mysqli_num_rows($result)-$countSexM)."人";
    echo "</div>";
?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>