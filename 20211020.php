<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题</title>
    <script type="text/javascript">
    function sum(obj) {
        var z = document.getElementById("z");//z = $("#z").value();
        var a = document.getElementById("a");
        var b = document.getElementById("b");
        var c = document.getElementById("c");
        all.value = parseInt(z.value);
        if (a.value != '') {
            y.value = parseInt(a.value);
            h.value = parseInt(z.value) - parseInt(a.value);
        }
        if (a.value != '' && b.value != '') {
            y.value = parseInt(b.value) + parseInt(a.value);
            h.value = parseInt(z.value) - parseInt(a.value) - parseInt(b.value);
        }
        if (a.value != '' && b.value != '' && c.value != '') {
            y.value = parseInt(b.value) + parseInt(a.value) + parseInt(c.value);
            h.value = parseInt(z.value) - parseInt(a.value) - parseInt(b.value) - parseInt(c.value);
        }
    }
    </script>
</head>

<body>
    总分：<input type="text" id="z" onkeyup="sum(this);" />
    <input type="text" id="a" onkeyup="sum(this);" />
    <input type="text" id="b" onkeyup="sum(this);" />
    <input type="text" id="c" onkeyup="sum(this);" />
    总分：<input type='text' id='all' style="border:0px solid white; width:25px" />
    已选：<input type='text' id='y' style="border:0px solid white; width:25px" />
    还剩：<input type='text' id='h' style="border:0px solid white; width:25px" />
</body>

</html>