<?php
include("/Workspace/PHP/BT/Lib/myLib.php");
$arr = readF_arr('/Workspace/PHP/BT/Tuan5_HDT/raw/Tin_tuc.txt');
$i = 0;
$ttArr = array();
while ($i < count($arr)) {
    //echo "</br>".$arr[$i]."</br>";
    $item = explode("|", $arr[$i++]);
    $tt = new TinTuc(str_replace("/*", "", $item[0]), $item[1], $item[2], $item[3]);
    array_push($ttArr, $tt);
}

class TinTuc
{
    public $stt, $tieuDe, $noiDung, $anh;
    public function __construct($stt, $tieuDe, $noiDung, $anh)
    {
        $this->stt = $stt;
        $this->tieuDe = $tieuDe;
        $this->noiDung = $noiDung;
        $this->anh = $anh;
    }
}


$id = $_GET['id'] ?? 0;
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
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
        }

        .img {
            float: left;
            width: 120px;
            height: 120px;
            margin: 10px;
        }

        .container {
            min-width: 300px;
        }
    </style>
</head>

<body>
    <?php
    if ($id == 0) {
        foreach ($ttArr as $item) {
    ?>
            <div class="container">
                <img class="img" src="/BT/Tuan5_HDT/img/<?php echo $item->anh ?>" alt="">
                <div class="card-header" style="color: red; font-weight: bold"><span id="nd"><?php echo $item->tieuDe ?></span></div>
                <div class="card-body"><?php echo $item->noiDung ?><a href="/BT/Tuan5_HDT/b6.php?id=<?php echo strlen($item->stt) > 1 ? substr($item->stt, 3) : $item->stt ?>">[Xem chi tiết...]</a></div>
            </div>
        <?php
        }
    } else {
        foreach ($ttArr as $item) {
        ?>
            <div class="container">
                <img class="img" src="/BT/Tuan5_HDT/img/<?php echo $item->anh ?>" alt="">
                <div class="card-header" style="color: red; font-weight: bold"><span id="nd"><?php echo $item->tieuDe ?></span></div>
                <div class="card-body"><?php echo  $id == (strlen($item->stt) > 1 ? substr($item->stt, 3) : $item->stt) ? $item->noiDung : substr($item->noiDung, 0, 355) ?><a href="/BT/Tuan5_HDT/b6.php?id=<?php echo strlen($item->stt) > 1 ? substr($item->stt, 3) : $item->stt ?>">[Xem chi tiết...]</a></div>
            </div>
    <?php
        }
    }
    ?>


</body>

</html>