<?php
// $pdo = new PDO("mysql:host=localhost;dbname=ql_nha_hang", "root", "");
// $pdo->query("set names utf8");
// $sql = "select * from khach_hang";
// $st = $pdo->prepare($sql);
// $st->execute();
// if($st->rowCount() > 0){
//   $rs = $st->fetchAll(PDO::FETCH_ASSOC);
//   // print_r($rs);
// }
include("./mylib.php");
$rs = executeReader("ql_nha_hang", "root", "", "select * from khach_hang");
// print_r($rs);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <?php include("./header.php"); ?>
  <table class="caption-top table" width="800" border="2" cellspacing="0" cellpadding="5" align="center">
    <caption>
      <h1>THÔNG TIN KHÁCH HÀNG</h1>
    </caption>
    <tr align="center" style="font-weight: bold" bgcolor="#CCFFFF">
      <td>Mã KH</td>
      <td>Tên KH</td>
      <td>Email</td>
      <td>Địa chỉ</td>
      <td>Điện thoại</td>
      <td>Hình</td>
      <td width="20%">CRUD</td>
    </tr>
    <?php
    foreach ($rs as $kh) {
      echo '
        <tr align="center">
          <td>' . $kh["ma_khach_hang"] . '</td>
          <td>' . $kh["ten_khach_hang"] . '</td>
          <td>' . $kh["email"] . '</td>
          <td>' . $kh["dia_chi"] . '</td>
          <td>' . $kh["dien_thoai"] . '</td>
          <td align="center"><img width="100px" src="./image/' . $kh["hinh"] . '"/></td>
          <td align="center">
            <a class="btn btn-success" href="#">Update</a>
            <a class="btn btn-danger" href="#">Delete</a>
          </td>
        </tr>';
    }
    ?>
  </table>
  <?php include("./footer.php"); ?>
</body>

</html>