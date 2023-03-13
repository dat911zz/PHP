<?php
$hoten = $_POST['name'];
$email = $_POST['email'];
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
    <form action="bai1.php" method="post">
        Name: <input type="text" name="name" value=<?php $hoten ?>><br>
        E-mail: <input type="password" name="pass" value=<?php $pass ?>><br>
        <input type="submit">
    </form>
    <div>Xin chào <?php echo $hoten ?> <br>
    <?php echo $email ?>
    </div>
</body>

</html>