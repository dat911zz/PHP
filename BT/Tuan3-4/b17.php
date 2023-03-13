<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <h2 style="text-align: center;">SHOP Hoa VND</h2>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php
        include('/Workspace/PHP/BT/Lib/myLib.php');
        $element = readXML('Res\hoa.xml');
        $nodeList = $element->childNodes;
        foreach ($nodeList as $node) {
            if ($node->nodeType == XML_ELEMENT_NODE) {
                $id = $node->getAttribute('ID') ?? '';
                $name = $node->getAttribute('TenCD') ?? '';
                $img = $node->getAttribute('Hinh') ?? '';
                $cost = $node->getAttribute('Gia') ?? '';
                // echo '<li class="dinhdang"><a href="' . $id . '">' . $name . '</a></li>';
        ?>
                <div class="col-2">
                    <div class="card">
                        <img style="height: 200px" src="/BT/Tuan3-4/images/<?php echo $img ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $name ?></h5>
                            <p class="card-text" style="color: red">Giá: <?php echo $cost ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</body>
</html>