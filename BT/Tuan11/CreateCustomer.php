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
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <img src="image/Koala.jpg" width="300px" />
                <img src="image/Koala.jpg" width="300px" />
            </div>
            <div class="col-lg-8">
                <form method="POST" action="xl_CreateCustomer.php" ></form>
                <div class="panel-heading">
                    <h3 class="panel-title">Bài Khách Hàng</h3>
                </div>
                <label for="inputText" class="control-label">Tên Khách Hàng</label>
                <input type="text" class="form-control" id="idName" placeholder="Nhập tên khách hàng">
                <label for="inputText" class="control-label">Email</label>
                <input type="text" class="form-control" id="idEmail" placeholder="Nhập email">
                <label for="inputText" class="control-label">Địa chỉ</label>
                <input type="text" class="form-control" id="idDiaChi" placeholder="Nhập địa chỉ">
                <label for="inputText" class="control-label">Điện thoại</label>
                <input type="text" class="form-control" id="inputText" placeholder="Nhập điện thoại">
                <label for="inputText" class="control-label">Hình</label>
                <input type="file" class="form-control" id="inputText" placeholder="Nhập hình">
                <label for="inputText" class="control-label">Ghi chú</label>
                <input type="text" class="form-control" id="inputText" placeholder="Nhập ghi chú">
                <a href="CreateCusome.php?ma=<?php echo $kh["ma_khach_hang"]; ?>" class="btn btn-primary" role="button" aria-pressed="true">CreateCusome</a>
                <a href="CreateCusome.php?ma=<?php echo $kh["ma_khach_hang"]; ?>" class="btn btn-danger" role="button" aria-pressed="true">Show Cutommer</a>
            </div>
        </div>
    </div>
    </div>
    <?php include("./footer.php"); ?>
</body>

</html>