<?php
    $a=30;
    $b=40;
    if($a>$b){//若a變數大於B變數則執行此敍述
        echo "變數A($a)大於變數B($b)";
    }elseif($a<$b){//若a變小於B變數則執行此敍述
        echo "變數A($a)小於變數B($b)";
    }else{//否則就執行此敍述
        //echo "變數A(".$a.")等於變數B(".$b.")";;
        echo "變數A($a)等於變數B($b)";;
    }
?>