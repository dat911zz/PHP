<?php
include("./mylib.php");
$ds_mon_an = executeReader("ql_nha_hang", "root", "", "select * from mon_an");
// print_r($ds_mon_an);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 4-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js"></script>
    <title>Document</title>
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

    <div class="row">
        <?php
        foreach ($ds_mon_an as $mon) {
            echo '
            <div class="col-2">
                <div class="card" style="display: flex">
                    <img height="120px" src="../Tuan9/image_MonAn/' . $mon['hinh'] . '" alt="">
                    <p>' . $mon['ten_mon'] . '</p>
                    <p>' . $mon['noi_dung_tom_tat'] . '</p>
                    <p>Giá: ' . $mon['don_gia'] . '</p>
                </div>
            </div>';
        }
        ?>
    </div>

</body>

</html>