<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <form method="get" action="列表.php" class="fomr">
                    <!--=MYSQLI_BOTH;//MYSQLI_ASSOC=1、MYSQLI_NUM = 2、MYSQLI_BOTH = 3-->
                    <select name="showSelect" id="showSelect">
                        <option value="2">數字</option>
                        <option value="1">文字</option>
                        <option value="3">數字/文字</option>
                    </select>
                    <input type="submit" value="送出" class="btn btn-warning">
                </form>
            </div>
        </div>
    </div>    
</body>
</html>