<?php
session_start();
require("./DBHelper.php");
require("./Pager.php");

class Product
{
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}

class Cart
{
    public $items;

    public function __construct()
    {
        $this->items = array();
    }

    public function addItem($product, $quantity)
    {
        if (isset($this->items[$product->id])) {
            $this->items[$product->id]['quantity'] += $quantity;
        } else {
            $this->items[$product->id] = array('product' => $product, 'quantity' => $quantity);
        }
    }

    public function removeItem($product)
    {
        if (isset($this->items[$product->id])) {
            unset($this->items[$product->id]);
        }
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['product']->price * $item['quantity'];
        }
        return $total;
    }

    public function getItems()
    {
        return $this->items;
    }
    public function updateQuantity($productId, $quantity)
    {
        if (isset($this->items[$productId])) {
            $this->items[$productId]['quantity'] = $quantity;
        }
    }
}


$db = new DBHelper();
$dts = $db->executeReader('SELECT * FROM loai WHERE Note = "DT"');
$laps = $db->executeReader('SELECT * FROM loai WHERE Note = "LAP"');
$pks = $db->executeReader('SELECT * FROM loai WHERE Note = "PK"');
$loaitins = $db->executeReader('SELECT * FROM loaitin');

//Pager
$pdo = $db->getConnect();
$sqlCount = 'SELECT COUNT(*) AS "count" FROM sanpham';
$sta = $pdo->prepare($sqlCount);
$sta->execute();
if ($sta->rowCount() > 0) {
    $count = ($sta->fetchAll(PDO::FETCH_OBJ)[0])->count;
} else {
    $count = 0;
}


$pager = new Pager();
$lim = 6;
$posStart = $pager->findStart($lim);
$maximumPage = $pager->findPage($count, $lim);

$curPage =  $_GET["page"] ?? 1;
$btnPage = $pager->pageList(intval($curPage), $maximumPage);

$sql = "SELECT * FROM sanpham limit $posStart, $lim";
$sta = $pdo->prepare($sql);
$sta->execute();
if ($sta->rowCount() > 0) {
    $sps = $sta->fetchAll(PDO::FETCH_OBJ);
}
$prods = array();
foreach ($sps as $sp) {
    $prods[] = new Product($sp->MaSP, $sp->TenSP, $sp->GiaBan);
}

?>

<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <title>Test</title>
    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <div class="text-center">
        <!--NAVIGATION-->
        <!-- <div class="container-fluid"> -->

        <div class="row" style="background-color:red; height:100px;">
            <div class="col-4 mt-2">
                <a href="#"><img src="../Images_KTL2/LogoFpt.png" width="70%" class="rounded" /></a>
            </div>
            <div class="col-4 mt-4">
                <form action="main.php" method="get" enctype="multipart/form-data">
                    <div>
                        <input class="form-control mx-auto" type="search" placeholder="Search" aria-label="Search" name="txt_Search">
                    </div>
                </form>
            </div>
            <div class="col-1 mt-3">
                <button class="btn btn-link" type="submit"><img style="width: 40px; height: 40px;" src="../Images_KTL2/search-icon.png" class="rounded" /></button>
            </div>
            <div class="col-3">

            </div>
        </div>

        <div class="row" style="background-color:black; height:60px;">
            <div class="col-12 mt-3 mx-auto">
                <ul>
                    <li style="float:left; position:relative; display:block; width:150px; color:white; ">
                        <a href="#" style="color:white;">TRANG CHỦ</a>
                    </li>
                    <li style="float:left; position:relative;  display:block; width:150px; color:white; ">
                        <a href="#" style="color:white;">ĐĂNG KÝ</a>
                    </li>
                    <li style="float:left; position:relative;  display:block; width:150px; color:white; ">
                        <a href="#" style="color:white;">ĐĂNG NHẬP</a>
                    </li>
                    <li style="float:left; position:relative; display:block;width:150px;color:white;">
                        <a href="#" style="color:white;">LIÊN HỆ</a>
                    </li>
                    <li style="float:left; position:relative; display:block;width:150px;color:white;">
                        <a href="#" style="color:white;">TIN TỨC</a>
                    </li>
                    <li style="float:left; position:relative; display:block;width:150px;color:white;">
                        <a href="Cart.php" style="color:white;">GIỎ HÀNG</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- </div> -->
        <!--CONTAIN-->
        <div class="row">
            <div class="col col-md-2  card">
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item" style="background-color:red;"><a href="#" style="text-transform:uppercase; text-decoration:none; color:white; font-weight:bold;">Điện Thoại</a></li>
                    <?php foreach ($dts as $dt) {
                        echo '<li class="list-group-item"><a href="main.php?ma=' . $dt->MaLoai . '" style="text-transform:uppercase; text-decoration:none;">' . $dt->TenLoai . '</a></li>';
                    }
                    ?>

                </ul>


                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item" style="background-color:red;"><a href="#" style="text-transform:uppercase; text-decoration:none; color:white; font-weight:bold;">Laptop</a></li>
                    <?php foreach ($laps as $lap) {
                        echo '<li class="list-group-item"><a href="main.php?ma=' . $lap->MaLoai . '" style="text-transform:uppercase; text-decoration:none;">' . $lap->TenLoai . '</a></li>';
                    }
                    ?>
                </ul>


                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item" style="background-color:red;"><a href="#" style="text-transform:uppercase; text-decoration:none; color:white; font-weight:bold;">Phụ kiện</a></li>
                    <?php foreach ($pks as $pk) {
                        echo '<li class="list-group-item"><a href="main.php?ma=' . $pk->MaLoai . '" style="text-transform:uppercase; text-decoration:none;">' . $pk->TenLoai . '</a></li>';
                    }
                    ?>
                </ul>

            </div>
            <div class="col col-md-8" style="background-color:lavender;">
                <div class="row">
                    <div class="col">

                        <div id="carouselExampleControls" class="carousel w-100 mx-auto mt-3" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../Images_KTL2/Banner/Banner1.jpg" class="d-block w-100 " alt="Ảnh 1" />
                                </div>
                                <div class="carousel-item">
                                    <img src="../Images_KTL2/Banner/Banner2.jpg" class="d-block w-100" alt="Ảnh 2" />
                                </div>
                                <div class="carousel-item">
                                    <img src="../Images_KTL2/Banner/Banner3.jpg" class="d-block w-100 " alt="Ảnh 3" />
                                </div>
                                <div class="carousel-item">
                                    <img src="../Images_KTL2/Banner/Banner4.jpg" class="d-block w-100 " alt="Ảnh 4" />
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div>

                    <?php
                    if (isset($_GET["ma"])) {
                        include 'ProductByCategory.php';
                    } else {
                        if (isset($_GET["masp"])) {
                            include 'Details.php';
                        } else {
                            if (isset($_GET["cart_id"])) {
                                $idSp = $_GET["cart_id"];
                                foreach ($prods as $p) {
                                    if ($p->id == $idSp) {
                                        $_SESSION["cart"]->addItem($p, 1);
                                    }
                                }
                            } else {
                                if (isset($_GET["txt_Search"])) {
                                    include 'Search.php';
                                } else {
                                    include 'products.php';
                                }
                            }
                        }
                    }

                    ?>
                </div>
            </div>
            <div class="col col-md-2 card">
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item" style="background-color:red;"><a href="#" style="text-transform:uppercase; text-decoration:none; color:white; font-weight:bold;">Tin Tức</a></li>
                    <?php
                    foreach ($loaitins as $lt) {
                        echo '<li class="list-group-item"><a href="#" style="text-transform:uppercase; text-decoration:none;">' . $lt->TLTin . '</a></li>';
                    }
                    ?>
                </ul>


            </div>
        </div>
        <!--Footer-->
        <div class="row" style="background-color:red; text-align:center;">
            <div class="col text-light mt-3 mb-3" style="text-align:center;">© 2007 - 2020 Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số FPT /<br />Địa chỉ: 261 - 263 Khánh Hội, P5, Q4, TP. Hồ Chí Minh / GPĐKKD số 0311609355 do Sở KHĐT TP.HCM cấp ngày 08/03/2012.<br /> GP số 47/GP-TTĐT do sở TTTT TP HCM cấp ngày 02/07/2018. Điện thoại: (028)73023456. Email: fptshop@fpt.com.vn. Chịu trách nhiệm nội dung: Nguyễn Trịnh Nhật Linh. </div>
        </div>
    </div>

</body>

</html>