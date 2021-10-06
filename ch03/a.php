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
            <div class="col-4 offset-4">
                <form action="b.php" method="post" class="form">
                    <table class="table table-striped table-hover">
                        <div class="form-group">
                            <tr>
                            <td class="col-2"><label for="username">帳號</label></td>
                            <td><input calss="col-7" type="text" id="username" name="username" placeholder="請輸入帳號" class="form-control"></td>
                            </tr>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <td class="col-2"><label for="password">密碼</label></td>
                            <td><input calss="col-7" type="password" id="password" name="password" placeholder="請輸入密碼" class="form-control"></td>
                            </tr>
                        </div>
                        <p></p>
                        <div class="form-group">
                            <tr>
                            <td class="col-2">&nbsp;</td>
                            <td class="col-7 "><input type="submit" name="sub1" id="sub1" value="確定" class="btn btn-sm btn-warning"></td>
                            </tr>
                        </div>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>