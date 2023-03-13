<?php
$name = $_GET['name'];
$pass = $_GET['pass'];
$err = '';

if ($name == 'yen') {
    if ($pass == '123') {
        echo 'mày sống r đấy con trai!';
    }
    else{
        $err = 'Vui lòng thử lại!';
    }
}
else{
    $err = 'Tài khoản không đúng hoặc mật khẩu sai!';
}

if ($err != ''){
    //open session connection
    session_start();
    //set session data
    $_SESSION['err'] = $err;
    echo '<script>location.href = "/BT/Tuan1/b4.php";</script>';
}
?>
