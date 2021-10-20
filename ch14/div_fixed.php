<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
    <style>
    .float_mask {
        position: fixed;
        z-index: 19999;
        display: none;
        width: 100%;
        right: 0;
        bottom: 0;
        height: 105px;
        _bottom: auto;
        _width: 100%;
        _position: absolute;
        _top: expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop, 10)||0)-(parseInt(this.currentStyle.marginBottom, 10)||0)));
    }

    .float_layer {
        position: absolute;
        left: 0;
        top: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        background: #071828;
        filter: alpha(opacity=80);
        opacity: 0.80;
    }

    .float_content {
        position: relative;
        z-index: 2;
        width: 1005px;
        height: 100%;
        margin: 0 auto;
        padding-left: 70px;
    }

    .float_bg,
    .float_close {
        float: left;
    }

    .float_bg {
        position: relative;
        width: 820px;
        height: 135px;
        margin-top: -27px;
    }

    .float_slogan {
        position: absolute;
        background: url("footer_ad.png") 0 0 no-repeat;
    }

    .float_slogan {
        left: 0;
        bottom: 0;
        width: 800px;
        height: 135px;
        cursor: pointer;
    }

    .float_close {
        width: 60px;
        margin-top: 30px;
    }

    .float_close a {
        display: block;
        width: 53px;
        height: 52px;
        margin-left: 7px;
        background: url("close.png") 0 0 no-repeat;
        -webkit-transition: all 400ms;
    }
    </style>
</head>

<body>
    <div class="float_mask" id="float_mask">
        <div class="float_layer">
        </div>
        <div class="float_content clearfix">
            <div class="float_bg">
                <a target="_blank" href="<a href='http://www.th7.cn/'">http://www.th7.cn/</a>
                <div class="float_slogan">
                    <!--廣告內容-->
                </div>
                </a>
            </div>
            <div class="float_close">
                <a onclick="closeFootAd()" href="#" title="我知道了"></a>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script>
    window.onload = function() {
        if (getCookie("footad") == 0) {
            document.getElementById("float_mask").style.display = "none";
        } else {
            document.getElementById("float_mask").style.display = "block";
        }
    }
    //關閉底部廣告
    function closeFootAd() {
        document.getElementById("float_mask").style.display = "none";
        setCookie("footad", "0");
    }

    //設定cookie
    function setCookie(name, value) {
        var exp = new Date();
        exp.setTime(exp.getTime() + 1 * 60 * 60 * 1000); //有效期1小時
        document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
    }
    //取cookies函式
    function getCookie(name) {
        var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
        if (arr != null) return unescape(arr[2]);
        return null;
    }
    </script>
</body>

</html>