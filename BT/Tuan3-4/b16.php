<?php 
    define ('SITE_ROOT', realpath(dirname(__FILE__)));
    echo 'ROOT: '.SITE_ROOT;
    if (isset($_POST['UL'])) { // Người dùng ấn nút submit
        echo '1';
        if ($_FILES['f-ul']['name'] != NULL) { //Đã chọn file
            //Tiến hành code upload file
            $type = $_FILES['f-ul']['type'];
            $name = $_FILES['f-ul']['name'];
            $size = $_FILES['f-ul']['size'];
            echo '2';

            if ($type == "image/jpeg"
            ||  $type == "image/png"
            ||  $type == "image/gif") {
                if ($size > 1048576) {
                    echo "File không được lớn hơn 1mb";
                }else{
                    echo '3';

                    $path = SITE_ROOT."\\UL\\";
                    $tmp_name = $_FILES['f-ul']['tmp_name'];
                    //UL
                    move_uploaded_file($tmp_name,$path.$name);
                    echo '<div style="color: green">Write file successfully!
                    (Filename: '.$name.'; Type: '.$type.'; Size: '.$size.'kB)
                    </div>';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="b16.php" method="post" enctype="multipart/form-data">
        <div>
            Select File:
            <input type="file" name="f-ul" size="20">
            <br>
            <input type="submit" value="Upload" name="UL">
        </div>
    </form>
</body>
</html>