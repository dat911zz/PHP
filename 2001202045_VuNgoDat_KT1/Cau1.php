<?php

  $show = $_GET['show'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
        }

        body {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
        }

        .img {
            width: 120px;
            height: 120px;
            margin: 10px;
        }

        .container {
            min-width: 300px;
            display: flex;
            justify-content: center;
        }
        td{
            text-align: center;
            border: 1px solid #9999;

        }
    </style>
</head>

<body>
    <table class="container">
        <tr>
            <td style="padding: 10px; color: red; font-weight: bold; text-align: center"><span id="nd">Imgaes Gallery</span></td>
        </tr>
    <?php
    if($show == "all"){
        for ($i=1; $i < 5; $i++) { 
            ?>
                <tr>
                    <td>
                        <img class="img" src="/2001202045_VuNgoDat_KT1/Images_Cau1/h<?php echo $i?>.jpg" alt="">
                    </td> 
                </tr>
                <?php
        }
    }else{
            ?>
                <tr>
                    <td>
                        <img class="img" src="/2001202045_VuNgoDat_KT1/Images_Cau1/h1.jpg" alt="">
                    </td> 
                </tr>
                <?php
    }
    ?>
    <tr>
        <td>
            <a href="Cau1.php?show=all" class="btn btn-primary">SHOW ALL</a>
            <a href="Cau1.php?show=demo" class="btn btn-primary">Show demo</a>
        </td>
    </tr>
    </table>
    

</body>

</html>