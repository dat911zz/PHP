<?php 
    readF("/Workspace/PHP/BT/files/Data.txt");
    function readF($fname)
    {
        $f = fopen($fname, 'r');
        while (!feof($f)) {
            $text = fgets($f);
            echo $text.'<br/>';
        }
    }
?>