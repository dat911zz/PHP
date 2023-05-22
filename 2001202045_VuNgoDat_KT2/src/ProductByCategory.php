<?php
    $sql = "SELECT * FROM `sanpham`  WHERE MaLoai = {$_GET['ma']}";
    $dataml = $db->executeReader($sql);
    $sta = $pdo->prepare($sql);
    $sta->execute();
    
  ?>

    <h2>Xuất Các Sản Phẩm Theo Loai</h2>
    <div class="row">

        <?php 
            if( $sta->rowCount() == 0)
            {
            ?>
            <h4>Không có Sản Phẩm Theo Loai</h4>
               <?php
            }else {
                
            foreach ($dataml as $key ){
                ?>
            <div class="col-4">
            <div class ="border">
                    <img src="../Images_KTL2/<?php echo $key->Anh?>" style="width:200px; max-height:300px">
                    <p><?php echo $key->TenSP?></p>
                    <a href="main.php?masp=<?= $key->MaSP ?>">Xem Chi Tiet</a>
            </div>
            </div>
            <?php
        }
            }
        ?>
       
        
        
    </div>