<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bài 5</title>

    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <style>
        .dd_mon {
            width: 32%;
            border: 1px solid grey;
            float: left;
            margin: 5px;
        }
    </style>

</head>

<body>
    <?php
    session_start();
    $carts = $_SESSION["cart_items"] ?? [];
    $pdo = new PDO("mysql:host=localhost;dbname=ql_nha_hang", "root", "");
    $pdo->query("set names utf8");
    $sql = "select ma_loai, ten_loai, mo_ta from loai_mon_an";
    $loai_mon = $pdo->query($sql);
    ?>

    <div id="Wrapper" class="container">
        <br />
        <?php include("./Header.php"); ?>

        <br />
        <div id="Content" class="row">
            <div class="col-3">
                <?php include("./SideNav.php"); ?>
            </div>
            <div class="col-9">
                <?php
                if (count($carts) == 0) {
                ?>
                    <div style="text-transform: uppercase;">
                        <h2>giỏ hàng đang rỗng</h2>
                    </div>
                <?php
                } else {
                ?>
                    <div style="text-transform: uppercase;">
                        <h2>thông tin giỏ hàng của bạn</h2>
                    </div>
                <?php
                }
                ?>
                <div class="row">
                    <?php
                    
                    if (count($carts) > 0) {
                    ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $amountItem = 0;
                                    $totalAll = 0;
                                    for($i = 0; $i < count($arr); $i++) {
                                        if(isset($arr[$i])) {
                                            $amountItem += $arr[$i]["so_luong"];
                                            $totalAll += $arr[$i]["so_luong"] * $arr[$i]["gia"];
                                            ?>
                                        <tr>
                                            <td>
                                                <div style="display:flex; align-items: center;">
                                                    <img style="width:50px; object-fit:cover;" src="image_MonAn/<?php echo $arr[$i]["hinh_anh"]; ?>" />
                                                    <span style="margin-left:8px;"><?php echo $arr[$i]["ten_mon"] ?></span>
                                                    <a href="XoaMotMonKhoiGioHang.php?id=<?php echo $arr[$i]["ma_mon"]; ?>" style="color:red; margin-left: 10px;" class="btn"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo number_format(floatval($arr[$i]["gia"]), 0, ',', '.'); ?> VNĐ
                                            </td>
                                            <td>
                                                <input type="number" min="1" value="<?php echo $arr[$i]["so_luong"]; ?>" />
                                            </td>
                                            <td style="text-align: right;">
                                                <?php echo number_format(floatval($arr[$i]["so_luong"] * $arr[$i]["gia"]), 0, ',', '.'); ?>
                                            </td>
                                        </tr>
                                            <?php
                                        }
                                    }
                                ?>
                                <tr>
                                    <td colspan="2">
                                        <a href="ClearCart.php" class="btn btn-danger">Clear Cart</a>
                                    </td>
                                    <td style="font-weight: bold;"><?php echo $amountItem; ?></td>
                                    <td style="font-weight: bold; text-align: right;"><?php echo number_format(floatval($totalAll), 0, ',', '.'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php
                    }
                    ?>
                </div>
                <div style="text-align: right;">
                    <button class="btn btn-primary">Checkout</button>
                </div>
            </div>


        </div>

    </div>
    <div id="Footer" class="row" style="background-color:yellowgreen;">
        <div class="col text-light mt-3 mb-3" style="text-align:center;">
            Liên hệ: Khoa Công nghệ Thông tin - Trường Đại học Công nghiệp Thực phẩm Tp.HCM Link: fanpage và link: youtube <br />
            Địa chỉ: 140 Lê Trọng Tấn, Phường Tây Thạnh, Quận Tân Phú, Tp.HCM. ĐT: (028).38161673 (ext 136) Mail: kcntt@hufi.edu.vn
        </div>
    </div>
    </div>

</body>

</html>