<ul class="list-group list-group-flush text-left bg-light">
    <li class="list-group-item" style="background-color:yellowgreen"><a href="#" style="text-transform:uppercase; text-decoration:none; color:white; font-weight:bold;">Loại món</a></li>

    <li class="list-group-item bg-light"><a href="#" style="text-transform:uppercase; text-decoration:none;"></a></li>


    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=ql_nha_hang", "root", "");
    $pdo->query("set names utf8");

    $query = "SELECT l.ten_loai, l.ma_loai FROM loai_mon_an l";
    $lm = $pdo->query($query);
    if ($lm->rowCount() > 0) {
        foreach ($lm as $m) {
            echo '<li class="list-group-item bg-light"><a href="ganhxua.php?loaimon=' . $m[1] . '&tenloaimon=' . $m[0] . '" style="text-transform:uppercase; text-decoration:none;">' . $m[0] . '</a></li>';
        }
    } ?>
    <li class="list-group-item bg-light"><a href="ganhxua.php?loaimon=0" style="text-transform:uppercase; text-decoration:none;">SHOW ALL</a></li>

</ul>
<ul class="list-group list-group-flush text-left bg-light">
    <li class="list-group-item" style="background-color:yellowgreen;"><a href="#" style="text-transform:uppercase; text-decoration:none; color:white; font-weight:bold;">Chọn theo giá</a></li>
    <li class="list-group-item bg-light"><a href="ganhxua.php?max=15000&min=0">15,000đ trở xuống</a></li>
    <li class="list-group-item bg-light"><a href="ganhxua.php?max=30000&min=20000">20,000đ - 30,000đ</a></li>
    <li class="list-group-item bg-light"><a href="ganhxua.php?max=50000&min=31000">31,000đ - 50,000đ</a></li>
    <li class="list-group-item bg-light"><a href="ganhxua.php?max=100000&min=51000">51,000đ - 100,000đ</a></li>
    <li class="list-group-item bg-light"><a href="ganhxua.php?max=999999999&min=100000">Trên 100,000đ</a></li>

</ul>