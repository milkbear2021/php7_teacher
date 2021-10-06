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
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4" style="background-color:lightgray;">
                <form action="b.php" method="get" class="form">
                    <div class="form-group form-inline">
                        <label for="usename">帳號</label>
                        <input type="text" id="username" name="username" placeholder="請輸入帳號" class="form-control">
                    </div>
                    <p></p>
                    <div class="form-group form-inline">
                        <label for="password">密碼</label>
                        <input type="text" id="password" name="password" placeholder="請輸入密碼" class="form-control">
                    </div>
                    <p></p>
                    <div class="form-group">
                        <input type="submit" name="sub1" id="sub1" value="確定" class="btn btn-warning">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>