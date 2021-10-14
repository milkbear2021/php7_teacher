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

    .showdata {
        font-size: 11pt;
        line-height: 150%;
        font-weight: normal;
        color: #F60;
        font-family: Arial, Helvetica, sans-serif;
    }
    -->
    </style>

</head>

<body bgcolor="#ffffff">
<?php
    require_once('PHPMailer/PHPMailerAutoload.php'); //引入phpMailer 記得將路徑換成您自己的path
    $mail= new PHPMailer(); //初始化一個PHPMailer物件
    $mail->Host = "smtp.gmail.com"; //SMTP主機 (這邊以gmail為例，所以填寫gmail stmp)
    $mail->IsSMTP(); //設定使用SMTP方式寄信
    $mail->SMTPAuth = true; //啟用SMTP驗證模式
    $mail->Username = "milkbear2021@gmail.com"; //您的 gamil 帳號
    $mail->Password = "XXXxxxxxxxxxxXX"; //您的 gmail 密碼
    $mail->SMTPSecure = "ssl"; // SSL連線 (要使用gmail stmp需要設定ssl模式) 
    $mail->Port = 465; //Gamil的SMTP主機的port(Gmail為465)。
    $mail->CharSet = "utf-8"; //郵件編碼
      
    $mail->From = $_POST['mailfrom']; //寄件者信箱
    //$mail->FromName = "牛奶熊"; //寄件者姓名
    $mail->AddAddress($_POST['mailto'],""); //收件人郵件和名稱
    $mail->AddCC($_POST['mailcc']); //設定 密件副本收件人 
    $mail->AddBCC($_POST['mailbcc']); //設定 密件副本收件人 
    
    $mail->IsHTML(true); //郵件內容為html 
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //添加附件(若不需要則註解掉就好)
     
    $mail->Subject = $_POST['mailsubject']; //郵件標題
    $mail->Body =$_POST['mailcontent']; //郵件內容
    $mail->AltBody = '當收件人的電子信箱不支援html時，會顯示這串~~';
?>
    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td><img name="formtomail_r1_c1" src="images/formtomail_r1_c1.png" width="600" height="105" border="0"
                    alt=""></td>
        </tr>
        <tr>
            <td background="images/formtomail_r2_c1.png">
             
                <?php
                    if(!$mail->send()) {//執行寄信的功能
                      echo '<div class="info">不幸的，郵寄失敗！</div>';
                    } else {    
                     echo '<div class="info">恭禧你，郵寄成功！</div>';
                    }
                ?>
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
                            <td colspan="2" align="center"><input type="button" name="button2" id="button2" value="再寄一封"
                                    onclick="window.history.back();"></td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td height="52" background="images/formtomail_r4_c1.png">
                <div id="siteinfo">線上郵寄系統&nbsp;版權所有 &copy; 2017 Form PHPMAILER All Rights Reserved. </div>
            </td>
        </tr>
    </table>
    
    <p>&nbsp;</p>
</body>

</html>