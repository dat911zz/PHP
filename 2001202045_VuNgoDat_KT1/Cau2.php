<!DOCTYPE html>
<html lang="en">
<?php
include('../2001202045_VuNgoDat_KT1/Lib/myLib.php');

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .card{
            width: 250px;
            margin: 20px;
        }
        .card-body {
            min-height: 150px;
        }
        .container{
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
            width: 900px;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center; color: blue">DANH SÁCH SẢN PHẨM</h2>
    <div class="container">
        <?php 
        $element = readXML('Dien_thoai.xml');
        $nodeList = $element->childNodes;
        foreach ($nodeList as $node) {
            if ($node->nodeType == XML_ELEMENT_NODE) {
                $id = $node->getAttribute('ID');
                $name = $node->nodeValue ?? '';
                $img = $node->getAttribute('Hinh') ?? '';
        ?>
                    <div class="card">
                        <img style="height: 200px; max-width: 150px; align-self: center;" src="../2001202045_VuNgoDat_KT1/Images_Cau234/<?php echo $img ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mã SP: <span style="color: blue"><?php echo $id ?></span></h5>
                            <h5 class="card-title">Tên SP: <span style="color: red"><?php echo $name ?></span></h5>
                        </div>
                    </div>
        <?php
            }
        }

        ?>
    </div>
    </div>
</body>

</html>