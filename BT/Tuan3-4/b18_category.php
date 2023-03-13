<!DOCTYPE html>
<html lang="en">
<?php
include('/Workspace/PHP/BT/Lib/myLib.php');
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_components = parse_url($url);

// Use parse_str() function to parse the
// string passed via URL

$parts = parse_url($url);
parse_str($parts['query'], $params);
// echo $url . '</br>ID = ' . $params['id'];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .card-body {
            min-height: 120px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h2 style="text-align: center;">Chủ đề: <?php echo $params['category'] ?></h2>
        <br>
        <!-- <div><?php echo $params['id'] ?></div> -->

        <h2 style="text-align: center;">Danh mục hoa</h2>
        <ul>
            <?php
            $element = readXML('Res\hoatheocd.xml');
            $nodeList = $element->childNodes;
            foreach ($nodeList as $node) {
                if ($node->nodeType == XML_ELEMENT_NODE) {
                    $category = $node->getAttribute('TenCD');
                    $id = $node->getAttribute('ID');
                    echo '<li><a href="b18_category.php?id=' . $id . '&category=' . $category . '">' . $category . '</a></li>';
                }
            }
            ?>
        </ul>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            $element = readXML('Res\hoatheocd.xml');
            $parent = $element->childNodes;

            foreach ($parent as $categoryNode) {
                if (
                    $categoryNode->nodeType == XML_ELEMENT_NODE
                    && $categoryNode->getAttribute('ID') == $params['id']
                ) {
                    $nodeList = $categoryNode->childNodes;
                    foreach ($nodeList as $node) {
                        if ($node->nodeType == XML_ELEMENT_NODE) {
                            $id = $node->getAttribute('ID');
                            $name = $node->nodeValue ?? '';
                            $img = $node->getAttribute('Hinh') ?? '';
                            $cost = $node->getAttribute('Gia') ?? '';
            ?>
                            <div class="col-2">
                                <div class="card">
                                    <img style="width: 100%; height: 150px" src="/BT/Tuan3-4/images/<?php echo $img ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $name ?></h5>
                                        <p class="card-text" style="color: red">Giá: <?php echo $cost ?></p>
                                    </div>
                                </div>
                            </div>
            <?php
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</body>

</html>