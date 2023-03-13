<?php 
abstract class Xe{
    public $mau;

    public abstract function soBanh() : int;
    public abstract function vanToc() : float;
}
class XeDap extends Xe{

	/**
	 * @return int
	 */
	public function soBanh(): int {
        return 2;
	}
	
	/**
	 * @return float
	 */
	public function vanToc(): float {
        return 99.99;
	}
}
class XeMay extends Xe{

    public $phanKhoi;
	/**
	 * @return int
	 */
	public function soBanh(): int {
        return 2;
	}
	
	/**
	 * @return float
	 */
	public function vanToc(): float {
        return 150;
	}
}
class XeHoi extends Xe{
    public $soCho, $xang;
	/**
	 * @return int
	 */
	public function soBanh(): int {
        return 4;
	}
	
	/**
	 * @return float
	 */
	public function vanToc(): float {
        return 5000;
	}
}
class XeXichLo extends Xe{

	/**
	 * @return int
	 */
	public function soBanh(): int {
        return 3;
	}
	
	/**
	 * @return float
	 */
	public function vanToc(): float {
        return 23.54;
	}
}


$xm = new XeMay();
$xh = new XeHoi();
echo "Số bánh: ".$xm->soBanh()." - Vận tốc: ".$xm->vanToc();
echo "</br>Số bánh: ".$xh->soBanh()." - Vận tốc: ".$xh->vanToc();

?>