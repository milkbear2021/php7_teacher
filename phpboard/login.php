<?php
session_start();
//如果沒有登入Session值或是Session值為空則執行登入動作
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
	if(isset($_POST["username"]) && isset($_POST["passwd"])){
		require_once("connMysql.php");	
		//選取儲存帳號密碼的資料表
		$sql_query = "SELECT * FROM admin";
		$result = $db_link->query($sql_query);		
		//取出帳號密碼的值
		$row_result=$result->fetch_assoc();
		$username = $row_result["username"];
		$passwd = $row_result["passwd"];
		$db_link->close();
		//比對帳號密碼，若登入成功則進往管理界面，否則就退回主畫面。
		if(($username==$_POST["username"]) && ($passwd==$_POST["passwd"])){//比對所輸入的資料及從資料庫中取出的資料比較
			$_SESSION["loginMember"]=$username;//將從資料庫中取出的帳號放到session變數
			header("Location: admin.php");//登入成功前往admin.php
		}else{
			header("Location: index.php");//登入失敗前往index.php
		}
	}
}else{
	//若已經有登入Session值則前往管理界面
	header("Location: admin.php");
}
/*
     while($row_result=mysqli_fetch_row($result)){//一次取得一筆資料且放入放入$row_result陣列
        foreach($row_result as $key=>$value){
            $personalRecord[$rowNum][$key]=$value;
        }
        $rowNum++;
        }
*/
?>
<html>
<head>
<title>訪客留言版</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#ffffff">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>
    <table align="left" border="0" cellpadding="0" cellspacing="0" width="700">
        <tr>
          <td><img name="board_r1_c1" src="images/board_r1_c1.jpg" width="465" height="36" border="0" alt=""></td>
          <td><a href="index.php"><img name="board_r1_c5" src="images/read.jpg" width="110" height="36" border="0" alt="瀏覽留言"></a></td>
          <td><a href="post.php"><img name="board_r1_c7" src="images/post.jpg" width="110" height="36" border="0" alt="我要留言"></a></td>
          <td width="15"><img name="board_r1_c8" src="images/board_r1_c8.jpg" width="15" height="36" border="0" alt=""></td>
        </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td><img name="board_r2_c1" src="images/board_r2_c1.jpg" width="700" height="28" border="0" alt=""></td>
  </tr>
  <tr>
    <td background="images/board_r3_c1.jpg"><div id="mainRegion">
        <form name="form1" method="post" action="">
          <table border="0" align="center" cellpadding="4" cellspacing="0">
            <tr valign="top">
              <td colspan="2" align="center" class="heading">登入管理</td>
            </tr>
            <tr valign="top">
              <td width="80" align="center"><img src="images/login.gif" alt="我要留言" width="80" height="80"></td>
              <td valign="middle"><p>管理帳號
                  <input type="text" name="username" id="username">
                </p>
                <p>管理密碼
                  <input type="password" name="passwd" id="passwd">
                </p>
                <p align="center">
                  <input type="submit" name="button" id="button" value="登入管理">
                  <input type="button" name="button3" id="button3" value="回上一頁" onClick="window.history.back();">
                </p></td>
            </tr>
          </table>
        </form>
      </div>
    </td>
  </tr>
  <tr>
    <td>
    <table align="left" border="0" cellpadding="0" cellspacing="0" width="700">
        <tr>
          <td width="15"><img name="board_r4_c1" src="images/board_r4_c1.jpg" width="15" height="31" border="0" alt=""></td>
          <td align="center" valign="top" background="images/botbg.jpg" class="trademark">© 2016 eHappy Studio All Rights Reserved. </td>
          <td width="15"><img name="board_r4_c8" src="images/board_r4_c8.jpg" width="15" height="31" border="0" alt=""></td>
        </tr>
    </table>
    </td>
  </tr>
</table>
</body>
</html>