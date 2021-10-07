<?php
    $a=12345.45;
    $b ="12345";
    $c = True;
    $typeA=justifyType(gettype($a));//呼叫函數justifyType
    $typeB=justifyType(gettype($b));
    $typeC=justifyType(gettype($c));
    echo "變數a的資料型態為:{$typeA}、內容為:{$a}<br>";
    echo "變數b的資料型態為:{$typeB}、內容為:{$b}<br>";
    echo "變數c的資料型態為:{$typeC}、內容為:{$c}<br>";
       if($a!==$b){//$a===$b代表資料型態或內容中有最少一個是不同的
        echo "變數a及變數b不完全相等";
        }else{
        echo "變數a及變數b全等";
        }

        function justifyType($typeA){
            switch ($typeA){
                case "Integer":
                    $typeA = "整數";
                    return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                    break;
                case "double":
                    $typeA = "浮點數";
                    return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                    break;
                case "boolean":
                    $typeA = "布林值";
                    return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                    break;
                case "string":
                    $typeA = "字串";
                    return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                    break;
                case "array":
                    $typeA = "陣列";
                    return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                    break;
                case "object":
                    $typeA = "物件";
                    return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                    break;
                case "NULL":
                    $typeA = "NULL";
                    return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                    break;
                case "unknown type":
                    $typeA = "未知型態";
                    return $typeA;//回傳 $typeA的值到呼叫函數且指定到左側變數中
                    break;
                default:
                    echo "資料型態有誤";
                }
        }
    
?>