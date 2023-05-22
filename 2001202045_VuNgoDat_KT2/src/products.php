<div class="row">
    <?php
    foreach ($sps as $sp) { ?>
        <div class="card col-4" style="width: 18rem;">
            <img class="card-img-top" src="../Images_KTL2/<?= $sp->Anh ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $sp->TenSP ?></h5>
                <p class="card-text">
                    <a href="main.php?masp=<?= $sp->MaSP ?>">Xem chi tiết</a>
                </p>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php
echo $btnPage;
?>