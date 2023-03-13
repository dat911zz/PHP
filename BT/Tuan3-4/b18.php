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
    <h2 style="text-align: center;">Danh mục hoa</h2>
    <ul> 
        <?php
        include('/Workspace/PHP/BT/Lib/myLib.php');
        $element = readXML('Res\hoatheocd.xml');
        $nodeList = $element->childNodes;
        foreach ($nodeList as $node) {
            if ($node->nodeType == XML_ELEMENT_NODE) {
                $category = $node->getAttribute('TenCD');
                $id = $node->getAttribute('ID');
                echo '<li><a href="b18_category.php?id='.$id.'&category='.$category.'">'.$category.'</a></li>';
            }
        }
        ?>
    </ul>
</body>

</html>