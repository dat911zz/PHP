<?php
$sql = "SELECT * FROM `sanpham` WHERE TenSP Like '%".$_GET['txt_Search']."%'";
$dataml = $db->executeReader($sql);
$sta = $pdo->prepare($sql);
$sta->execute();
?>

<h2>Tìm sản phẩm</h2>
<div class="row">

    <?php
    if ($sta->rowCount() == 0) {
    ?>
        <h4>Không tìm thấy sp</h4>
        <?php
    } else {

        foreach ($dataml as $key) {
        ?>
            <div class="col-4">
                <div class="border">
                    <img src="../Images_KTL2/<?php echo $key->Anh ?>" style="width:200px; max-height:300px">
                    <p><?php echo $key->TenSP ?></p>
                    <a href="main.php?masp= <?php echo $key->MaSP ?>">Xem Chi Tiet</a>
                </div>
            </div>
    <?php
        }
    }
    ?>
</div>
<div class="text-danger"> Có Số SP Tìm Dc là: <?php echo $sta->rowCount() ?></div>