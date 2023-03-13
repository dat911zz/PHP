<?php
    $chuoiNhap = $_POST['chuoiNhap'];
    $tuNhap = $_POST['tuNhap'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <div class="container" style="background-color: aqua">
        <div class="head row">Tìm từ trong chuỗi</div>
        <div class="body">
            <form action="b5.php" method="post">
                <div class="row">
                    <div class="col-2">Nhập chuỗi</div>
                    <div class="col-4">
                        <input type="text" name="chuoiNhap">
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">Nhập từ</div>
                    <div class="col-4">
                        <input type="text" name="tuNhap">
                    </div>
                </div>
                <input type="submit" value="Tìm">
            </form>
        </div>
        <div class="footer row">
            <div>
                <?php 
                    $resultPos = strpos($chuoiNhap, $tuNhap);
                    log($resultPos);
                    if(empty($chuoiNhap) || empty($tuNhap)){
                        echo "<span style='color: red'>Vui lòng nhập đầy đủ!</span>";
                    }
                    else{
                        if($resultPos)
                        {
                            echo "Tìm thấy từ: ".$tuNhap." trong chuỗi tại vị trí ".$resultPos;
                        }
                        else{
                            echo "<span style='color: red'>Không tìm thấy từ ".$tuNhap."</span>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
