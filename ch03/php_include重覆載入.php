<?php
	echo "載入前...";
	require_once "inc1.php";//require_once代表只會載入一次而不會重覆載入
	echo "載入後...";
    require_once "inc1.php";
    echo "再次載入"
?>