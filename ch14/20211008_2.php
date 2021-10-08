<?php
    $id=1;$name="james";$mobile="0952111541";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    $a=array("Banana"=>"香蕉","Apple"=>"蘋果","Watermelon"=>"西瓜");//宣告a陣列變數，且是文字索引
    echo $a["Banana"];
    $b=array("第一個値",1=>"第二個値","第三個値");//宣告b陣列變數，且是數字索引
    echo "<br>".$b[1];
   ?>
</body>
</html>