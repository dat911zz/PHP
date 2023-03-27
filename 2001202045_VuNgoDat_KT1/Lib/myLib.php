<?php 
function readF($fname)
{
    $f = fopen($fname, 'r');
    while (!feof($f)) {
        $text = fgets($f);
        echo $text.'<br/>';
    }
}
function readF_arr($fname)
{
    $arr = array();
    $f = fopen($fname, 'r');
    while (!feof($f)) {
        $text = fgets($f);
        array_push($arr, $text);
        echo "<script>console.log(".$text.")</script>";
    }
    return $arr;
}
function writeF($fname, $text){
    $f = fopen($fname, 'a') or die("Unable to open file!");
    fwrite($f, $text);
    fclose($f);
}
function readXML($path){
    $doc = new DOMDocument();
    $doc->load($path);
    //Truy xuất nút gốc
    $root = $doc->documentElement;
    //Truy xuất tập hợp các nút con
    return $root;
}
?>