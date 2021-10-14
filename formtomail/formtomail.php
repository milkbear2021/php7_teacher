<!DOCTYPE HTML>
<html>

<head>
    <title>線上郵寄系統</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style type="text/css">
    body {
        margin: 0px;
        background-image: url(images/formtomail_bg.png);
        background-repeat: repeat-x;
        background-position: top;
        font-size: 10pt;
        background-color: #99CCCC;
    }

    #contentDiv {
        margin-right: auto;
        margin-left: auto;
        width: 520px;
        background-image: url(images/mailmark.png);
        background-repeat: no-repeat;
        background-position: right top;
    }

    form {
        margin: 0px;
    }

    #siteinfo {
        font-size: 9pt;
        text-align: center;
        font-family: Tahoma, Geneva, sans-serif;
        color: #333;
    }
    </style>
</head>

<body bgcolor="#ffffff">
    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td><img name="formtomail_r1_c1" src="images/formtomail_r1_c1.png" width="600" height="105" border="0"
                    alt=""></td>
        </tr>
        <tr>
            <td background="images/formtomail_r2_c1.png">
                <div id="contentDiv">
                    <form action="sendmail.php" method="post" name="form1">
                        <table width="100%" border="0" cellpadding="5" cellspacing="0">
                            <tr>
                                <td width="60"><strong> 寄件者</strong></td>
                                <td><input type="text" name="mailfrom" id="mailfrom" style="width:300px" required></td>
                            </tr>
                            <tr>
                                <td><strong> 收件者</strong></td>
                                <td><input type="text" name="mailto" id="mailto" style="width:300px" required></td>
                            </tr>
                            <tr>
                                <td><strong> 副本</strong></td>
                                <td><input type="text" name="mailcc" id="mailcc" style="width:300px"></td>
                            </tr>
                            <tr>
                                <td><strong> 密件副本</strong></td>
                                <td><input type="text" name="mailbcc" id="mailbcc" style="width:300px"></td>
                            </tr>
                            <tr>
                                <td><strong>主旨</strong></td>
                                <td><input name="mailsubject" type="text" id="mailsubject" style="width:400px" required></td>
                            </tr>
                            <tr>
                                <td colspan="2"><textarea name="mailcontent" id="mailcontent" cols="40" rows="10"
                                        style="width:100%" required></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center"><input type="submit" name="button" id="button"
                                        value="送出郵件">
                                    <input type="reset" name="button2" id="button2" value="重設內容">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </td>
        </tr>
        <tr>
            <td height="52" background="images/formtomail_r4_c1.png">
                <div id="siteinfo"> 線上郵寄系統
                    <?php 
                    
                  ?>
                    版權所有 &copy; 2017 Form PHPMAILER All Rights Reserved. </div>
            </td>
        </tr>
    </table>
    <p>&nbsp;</p>
</body>

</html>