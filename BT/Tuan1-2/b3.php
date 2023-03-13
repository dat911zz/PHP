<?php
$a = $_POST['so_a'];
$b = $_POST['so_b'];
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
    <form action="b3.php" method="POST">
        Chiều dài: <input type="number" name="so_a" value=<?php echo $a ?> ><br>
        Chiều rộng: <input type="number" name="so_b" value=<?php echo $b ?> ><br>
        Diện tích: <input type="number" value=<?php echo $a * $b ?> readonly> 
        <input type="submit">
    </form>
</body>
</html>