<?php
$pdo = new PDO("mysql:host=localhost;dbname=ql_nha_hang", "root", "");
$pdo->query("set names utf8");

$query = "SELECT l.ma_loai, l.ten_loai, l.mo_ta FROM loai_mon_an l";
$lm = $pdo->query($query);
echo "Số mẫu tin: " . $lm->rowCount();
$pdo = null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <?php
    if ($lm->rowCount() > 0) {
    ?>
        <table class="table table-striped table-bordered">
            <tr>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Mô tả</th>
            </tr>
            <tbody>   
            <?php
            foreach ($lm as $m) {
            ?>
                <tr>
                    <td><?php echo $m[0] ?></td>
                    <td><?php echo $m[1] ?></td>
                    <td><?php echo $m[2] ?></td>
                </tr>
            <?php
            }
            ?>
            </tbody> 
        </table>
    <?php
    }
    ?>
</body>

</html>