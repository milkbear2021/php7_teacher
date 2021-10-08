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
     while($row_result=mysqli_fetch_row($result)){//一次取得一筆資料且放入放入$row_result陣列
        foreach($row_result as $key=>$value){
            $personalRecord[$rowNum][$key]=$value;
        }
        $rowNum++;
        }
    //echo "編號:".$personalRecord[1]['cID'];
?>
    <table class="table table-light table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th>編號</th>
                <th>姓名</th>
                <th>性別</th>
                <th>生日</th>
                <th>電郵</th>
                <th>電話</th>
                <th>住址</th>
                <th>身高</th>
                <th>體重</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php for($i=0;$i<count($personalRecord);$i++){?><!--count($personalRecord)共有多少筆資料-->
            <?php for($j=0;$j<=$key;$j++){?><!--$key為第二維陣列的索引也就是多少個欄位 -->
            <td><?=$personalRecord[$i][$j];?></td>
            <?php }?>
            </tr>
            <?php }?>
        </tbody>

    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>