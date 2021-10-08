<?php
    $id=1;$name="james";$mobile="0952111541";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table table-light">
        <tbody>
            <tr>
                <td style="background-color:burlywood;"><?php echo $id;?></td>
                <td><?php echo $name;?></td>
                <td><?=$mobile;?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>