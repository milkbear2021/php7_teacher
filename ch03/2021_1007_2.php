<?php
$dataType = "array";
switch ($dataType){
    case "Integer":
        echo "整數";
        break;
    case "double":
        echo "浮點數";
        break;
    case "boolean":
        echo "布林值";
        break;
    case "string":
        echo "浮點數";
        break;
    case "array":
        echo "陣列";
        break;
    case "object":
        echo "物件";
        break;
    case "NULL":
        echo "NULL";
        break;
    case "unknown type":
        echo "未知型態";
        break;
    default:
        echo "資料型態有誤";
}
?>