<?php
include("/Workspace/PHP/BT/Tuan1-2/Lib/ThuVienB12.php");
$a = $_POST['txt_a'] ?? "";
$b = $_POST['txt_b'] ?? "";

$x = "";
// echo $a . " " . $b;
if (is_numeric(giai($a, $b))) {
    $x = giai($a, $b);
}else{
    echo giai($a, $b);
}

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
    <form action="b12.php" method="post">
        <table>
            <tr>
                <td colspan="2" bgcolor="#FF6600">GIẢI PHƯƠNG TRÌNH BẬC 1</td>
            </tr>
            <tr>
                <td>Phương trình</td>
                <td>
                    <input type="text" name="txt_a" value="<?php echo $a ?>" /> x +
                    <input type="text" name="txt_b" value="<?php echo $b ?>" /> = 0
                </td>
            </tr>
            <tr>
                <td>Nghiệm</td>
                <td>
                    <input type="text" name="txt_x" value="<?php echo $x ?>" readonly="readonly" />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="GIẢI PHƯƠNG TRÌNH">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>