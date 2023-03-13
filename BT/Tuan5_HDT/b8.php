<?php 

    $menuList = array(
        "giới thiệu chung",
        "tuyển sinh",
        "chương trình đào tạo",
        "hoạt động sinh viên",
        "tuyển dụng"
    );
    class Menu{
        public $w, $h, $txtcl, $bg;
        function __construct($w, $h, $txtcl, $bg){
            $this->w = $w;
            $this->h = $h;
            $this->txtcl = $txtcl;
            $this->bg = $bg;
        }
    }

    $menu = new Menu(1580, 80, "#ffff", 'red');
    $bgc = $_GET['bg'] ?? $menu->bg;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        .img {
            border-radius: 50%;
            width: 60px;
        }

        .nav-ico {
            padding: 10px;
        }

        .nav-item {
            padding: 10px;
            text-align: center;
            align-self: center;
            text-transform: uppercase;
            display: inherit;
            color: <?php echo $menu->txtcl ?>;
        }
        .ctn{
            display: flex;
            width: <?php echo $menu->w ?>px;
            height: <?php echo $menu->h ?>px;
            background-color: <?php echo $bgc ?>;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="ctn">
    <div class="nav">
        <div class="nav-ico">
            <img class="img" src="/BT/Tuan5_HDT/img/z4178571602358_4edc1ce3886f7ed2403d8db2b33a4eef.jpg" alt="">
            </div>
        <?php
            foreach($menuList as $item){
                echo '<div class="nav-item">'.$item.'</div>';
            }
            ?>
        </div>
        <div class="nav-item"><a href="b8.php?bg=blue">Blue</a></div>
        <div class="nav-item"><a href="b8.php?bg=red">Red</a></div>
        <div class="nav-item"><a href="b8.php?bg=yellow">Yellow</a></div>


    </div>
</body>

</html>