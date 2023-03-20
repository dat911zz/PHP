<?php
    include("/Workspace/PHP/BT/Lib/myLib.php");
    $arr = readF_arr('/Workspace/PHP/BT/Tuan5_HDT/raw/TKB.txt');
    $i = 0;
    $tkbArr = array();
    $arrS = $arrC = $arrT = array();
    while ($i < count($arr)) {
        if (strcmp($arr[$i], "") != 0) {
            $item = explode("|", $arr[$i]);
            $tkb = new TKB(str_replace("/*", "", $item[0]), $item[1], $item[2], $item[3], $item[4], $item[5], $item[6]);
            array_push($tkbArr, $tkb);
        }
        $i++;
    }

    class TKB{
        public $thu, $ngay, $tiet, $gio, $mon, $phong, $nhomLop;
        public function __construct($thu, $ngay, $tiet, $gio, $mon, $phong, $nhomLop){
            $this->thu = $thu;
            $this->ngay = $ngay;
            $this->tiet = $tiet;
            $this->gio = $gio;
            $this->mon = $mon;
            $this->phong = $phong;
            $this->nhomLop = $nhomLop;
        }
    }

    $da = $_GET['da'] ?? "";

    foreach ($tkbArr as $tkb) {
        if (strtotime('d/m/Y', strtotime($tkb->ngay)) >= strtotime('d/m/Y', strtotime($da))
        && strtotime('d/m/Y', strtotime($tkb->ngay)) <= strtotime('d/m/Y', strtotime('d/m/Y', strtotime('+6 day', strtotime($da))))) {
            if (strcasecmp($tkb->tiet, "1-5") == 0
            || strcasecmp($tkb->tiet, "1-6") == 0) {
                $arrS[] = $tkb;
            }
            if (strcasecmp($tkb->tiet, "7-11" == 0)
            || strcasecmp($tkb->tiet, "7-12") == 0) {
                $arrC[] = $tkb;
            }
            if (strcasecmp($tkb->tiet, "13-14" == 0)
            || strcasecmp($tkb->tiet, "13-15") == 0) {
                $arrT[] = $tkb;
            }
        }
    }

    // print_r($arrS);
    // echo '</br>';
    // echo '</br>';
    // print_r($arrC);
    // echo '</br>';
    // echo '</br>';
    // print_r($arrT);


?>