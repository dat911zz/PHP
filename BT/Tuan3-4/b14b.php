<?php
include('/Workspace/PHP/BT/Lib/myLib.php');
$name = $_POST['name'] ?? "";
$phone = $_POST['phoneN'] ?? "";
$feed = $_POST['feedB'] ?? "";
if ($name == '' || $phone == '' || $feed == '') {
    echo '<div style="color: red">Vui lòng nhập đầy đủ dữ liệu!</div>';
} else {
    $text = $name."\n".$phone."\n".$feed."\n";
    writeF('/Workspace/PHP/BT/files/b14b_data.txt', $text);
    echo '<div style="color: green">Write file successfully!</div>';
}

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
</head>

<body>
    <div class="container" style="width:50%">
        <h2 align="center" style="color:blue; font-weight:bold;">THU THẬP THÔNG TIN NGƯỜI DÙNG</h2>
        <form method="post" action="b14b.php" name="main-form">
            <p><input type="text" name="name" value="" placeholder="Your name or Email" class="form-control"> </p>
            <p><input type="number" name="phoneN" value="" placeholder="Phone number" class="form-control"></p>
            <p>
                <textarea rows="10" cols="100" name="feedB" placeholder="Enter your comment" class="form-control"></textarea>
            </p>
            <p align="center"><input type="submit" name="btn_WriteFile" value="   Write to File   " class="btn btn-primary btn-lg"></p>
        </form>
    </div>
</body>

</html>