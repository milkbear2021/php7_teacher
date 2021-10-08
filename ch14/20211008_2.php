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
    //echo $a["Banana"];
    foreach($a as $eFruit=>$cFruit){
        echo "{$cFruit}的英文為({$eFruit})<br>";
    }
    $b=array("第一個値","第二個値","第三個値","第四個値","第五個値","第六個値");//宣告b陣列變數，且是數字索引
for ($i=0; $i < count($b); $i++) { //count(陣列)-->計算陣列的長度
    echo $i."=>".$b[$i]."<br>";
}
   ?>
</body>

</html>