<?php
	/*
		echo "載入前...";
		include "inc3.php";//使用include載入時若查無檔案則出現警告訊息再繼續往下執行
		echo "載入後...";
	*/
	echo "載入前...";
	require "inc3.php";//使用require載入時若查無檔案則出現警告訊息且不再繼續往下執行
	echo "載入後...";
?>