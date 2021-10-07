<?php
    $a=12345;
    $b ="12345";
    $typeA = gettype($a);//擷取變數a的資料型態
    $typeB = gettype($b);//擷取變數b的資料型態
    echo "變數a的資料型態為:{$typeA}、內容為:{$a}<br>";
    echo "變數b的資料型態為:{$typeB}、內容為:{$b}<br>";
    //if(($typeA==$typeB) && ($a==$b)){
    /*
    if($a===$b){//$a===$b代表資料型態相同且內容相同
        echo "變數a及變數b全等";
    }else{
        echo "變數a及變數b不完全相等";
        }
        //echo "所以<br>變數a:{$a}不等於變數b:{$b}";
    */
    if($a!==$b){//$a===$b代表資料型態或內容中有最少一個是不同的
        echo "變數a及變數b不完全相等";
        }else{
        echo "變數a及變數b全等";
        }
        //echo "所以<br>變數a:{$a}不等於變數b:{$b}";
?>