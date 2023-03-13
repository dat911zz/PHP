<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Hoa </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<?php
include("/Workspace/PHP/BT/Lib/myLib.php");
$arr = readF_arr('/Workspace/PHP/BT/Tuan5_HDT/raw/hoa.txt');
$hArr = array();
$i = 0;
while ($i < count($arr)) {
    //echo "</br>".$arr[$i]."</br>";
    $item = explode("|", $arr[$i++]);
    $tt = new Hoa(str_replace("/*", "", $item[0]), $item[1], $item[2], $item[3], $item[4], $item[5], $item[6], $item[7]);
    array_push($hArr, $tt);
}
class Hoa
{
    var $mahoa, $maloai, $tenHoa, $tenLoai, $noiDung, $donGia, $tieuBieu, $hinh;
    function __construct($mahoa, $maloai, $tenHoa, $tenLoai, $donGia, $hinh, $noiDung, $tieuBieu)
    {
        $this->mahoa = $mahoa;
        $this->maloai = $maloai;
        $this->tenHoa = $tenHoa;
        $this->tenLoai = $tenLoai;
        $this->noiDung = $noiDung;
        $this->donGia = $donGia;
        $this->tieuBieu = $tieuBieu;
        $this->hinh = $hinh;
    }
}
?>

<body>
    <h2>Hiểu thị tất cả các loại hoa</h2>
    <form name="from" action="Hoa.php" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <?php
            foreach ($hArr as $h) {
            ?>

                <div class="card mb-3 p-3 col-md-3" style="max-width: 520px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="/BT/Tuan5_HDT/B7_images/<?php echo $h->hinh  ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Card title</h5> -->
                                <p class="card-text"> Mã Hoa: <?php echo $h->mahoa ?></p>
                                <p class="card-text"> Mã Loại: <?php echo $h->maloai ?></p>
                                <p class="card-text"> Tên Hoa: <?php echo $h->tenHoa ?></p>
                                <p class="card-text"> Tên Loại: <?php echo $h->tenLoai ?></p>
                                <p class="card-text"> Nội Dung: <?php echo $h->noiDung ?></p>
                                <p class="card-text"> Đơn Giá: <?php echo $h->donGia ?></p>
                                <p class="card-text"> Tiêu Biểu: <?php echo $h->tieuBieu ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>