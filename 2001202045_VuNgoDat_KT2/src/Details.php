<?php

$sql = "SELECT * FROM `sanpham`  WHERE MaSP = ".$_GET['masp'];
$ctsp = $db->executeReader($sql);

?>

<h1> THÔNG TIN CHI TIẾT SẢN PHẢM </h1>
<div class="border border-black w-100">
    <div class="row">
        <?php
        foreach ($ctsp as $item) {
        ?>
            <div class="col-5">
                <img src="../Images_KTL2/Apple2.JPG">
                <form method="POST" action="Cart.php">
                    <input type="hidden" name="add" value="1">
                    <a type="submit" class="btn btn-primary" href="#">Mua Ngay</a>               
                </form>
                <a class="btn btn-primary" href="main.php?cart_id=<?php echo $item->MaSP; ?>">Mua Tiếp</a>
            </div>
            <div class="col-7">
                <table class="table">

                    <tbody>
                        <tr>
                            <th scope="row">Tên Sản Phẩm</th>
                            <td><?php echo $item->TenSP; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Hãng Điện Thoại</th>
                            <td><?php echo $item->TenSP; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Mô Tả Kỹ THuật</th>
                            <td><?php echo $item->MoTa; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Giá Bán</th>
                            <td><?php echo $item->GiaBan; ?></td>
                        </tr>
                        <tr>
                            <th scope="row">Số Lượng Còn</th>
                            <td><?php echo $item->SLTon; ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        <?php

        }
        ?>

    </div>
</div>