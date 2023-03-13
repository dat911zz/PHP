<?php 
    include("/Workspace/PHP/BT/Lib/myLib.php");
    $arr = readF_arr('/Workspace/PHP/BT/files/Data0.txt');
    $i = 0;
    while ($i < count($arr)) {
        if ($i % 4 == 0) {
            echo '<img style="width: 80px; height: 80px" src="/BT/Tuan3/images/'.$arr[$i].'">';
        }
        else {
            echo '<div>'.$arr[$i++].'</div>';
        }
    }
?>