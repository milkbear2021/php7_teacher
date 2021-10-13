<?php
	//include "inc1.php";
	echo "5+3=".add(5,3)."<br />";
	//require "inc2.php";
	echo "5-3=".minus(5,3);
    //函數區
    function add($num1, $num2){
		$result = $num1 + $num2;
		return $result;//回傳return 後面的值傳回到呼叫函數的地方
	}	//執行加法
    function minus($num1, $num2){
		$result = $num1 - $num2;
		return $result;
	}	//執行減法
?>