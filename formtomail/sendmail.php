<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>線上郵寄系統</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
<!--
body {
	margin: 0px;
	background-image: url(images/formtomail_bg.png);
	background-repeat: repeat-x;
	background-position: top;
	font-size: 10pt;
	background-color: #99CCCC;
}
form {
	margin: 0px;
}
#contentDiv {
	margin-right: auto;
	margin-left: auto;
	width: 520px;
	background-image: url(images/mailmark.png);
	background-repeat: no-repeat;
	background-position: right top;
}
#siteinfo {
	font-size: 9pt;
	text-align: center;
	font-family: Tahoma, Geneva, sans-serif;
	color: #333;
}
.info {
	font-size: 11pt;
	background-color: #FF6;
	background-image: url(images/icon_info.png);
	background-repeat: no-repeat;
	background-position: 5px center;
	padding-top: 5px;
	padding-right: 5px;
	padding-bottom: 5px;
	padding-left: 24px;
	color: #F00;
	border-radius: 10px;
	width: 480px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
	margin-top: 10px;
}
.showdata {	font-size: 11pt;
	line-height: 150%;
	font-weight: normal;
	color: #F60;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>

</head>
<body bgcolor="#ffffff">

<table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
   <td><img name="formtomail_r1_c1" src="images/formtomail_r1_c1.png" width="600" height="105" border="0" alt=""></td>
  </tr>
  <tr>
    <td background="images/formtomail_r2_c1.png"><div class="info">恭禧你，郵寄成功！</div>
      <div id="contentDiv">
      <table width="100%" border="0" cellpadding="5" cellspacing="0">
          <tr>
            <td width="60"><strong> 寄件者</strong></td>
            <td><?php echo $_POST['mailfrom'];?></td>
          </tr>
          <tr>
            <td><strong> 收件者</strong></td>
            <td><?=$_POST['mailto'];?></td>
          </tr>
          <tr>
            <td><strong> 副本</strong></td>
            <td><?php echo $_POST['mailcc'];?></td>
          </tr>
          <tr>
            <td><strong> 密件副本</strong></td>
            <td><?php echo $_POST['mailbcc'];?></td>
          </tr>
          <tr>
            <td><strong>主旨</strong></td>
            <td><?php echo $_POST['mailsubject'];?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo $_POST['mailcontent'];?></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="button" name="button2" id="button2" value="再寄一封" onclick="window.history.back();"></td>
          </tr>
        </table>
    </div></td>
  </tr>
  <tr>
   <td height="52" background="images/formtomail_r4_c1.png"><div id="siteinfo">線上郵寄系統&nbsp;版權所有 &copy; 2017 Form PHPMAILER All Rights Reserved. </div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
