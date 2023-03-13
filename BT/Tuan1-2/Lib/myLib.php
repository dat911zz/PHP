<?php 
    function drawBox(){
        echo '<div style="border: 2px solid black; width: 100px; height: 210px;"></div>';
    }
    function drawBox_Params($width, $height, $color){
        $tmp = '<br/><div style="border: 2px solid '.$color.'; width: '.$width.'px; height: '.$height.'px;"></div>';
        echo $tmp;
    }
?>