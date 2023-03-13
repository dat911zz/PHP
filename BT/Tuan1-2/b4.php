<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="b4xl.php" method="get">
        Name: <input type="text" name="name" value=<?php $hoten ?>><br>
        Pass: <input type="text" name="pass" value=<?php $pass ?>><br>
        <input type="submit">
    </form>
    <div>
        <span style='color: red'>
            <?php
            //open session connection
            session_start();
            //get session data
            echo $_SESSION['err'];
            ?>
        </span>       
    </div>
</body>
</html>
