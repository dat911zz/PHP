<?php
class PhanSo
{
    private $tu, $mau;
    function __construct($tu, $mau)
    {
        $this->tu = $tu;
        $this->mau = $mau;
    }
    public function getTu()
    {
        return $this->tu;
    }
    public function getMau()
    {
        return $this->mau;
    }
    public function setTu($tu)
    {
        $this->tu = $tu;
        return $this;
    }
    public function setMau($mau)
    {
        $this->mau = $mau;
        return $this;
    }
    function print()
    {
        return $this->tu . '/' . $this->mau;
    }
    static function ucln($a, $b)
    {
        $a = abs($a);
        $b = abs($b);
        $r = 1;
        while ($r != 0) {
            $r = $a % $b;
            $a = $b;
            $b = $r;
        }
        return $a;
    }
    function toiGian()
    {
        $kq = new PhanSo(1, 1);
        $ucln = Phanso::ucln($this->tu, $this->mau);
        if ($ucln != 0) {
            $kq->setTu($this->tu / $ucln);
            $kq->setMau($this->mau / $ucln);
        } else {
            $kq->setTu($this->tu);
            $kq->setMau($this->mau);
        }
        return $kq;
    }
    static function tong(PhanSo $ps1, PhanSo $ps2)
    {
        $kq = new PhanSo(1, 1);
        $kq->setTu($ps1->getTu() * $ps2->getMau() + $ps2->getTu() * $ps1->getMau());
        $kq->setMau($ps1->getMau() * $ps2->getMau());
        return $kq->toiGian();
    }
    static function hieu($ps1, $ps2)
    {
        $kq = new PhanSo(1, 1);
        $kq->setTu($ps1->getTu() * $ps2->getMau() - $ps2->getTu() * $ps1->getMau());
        $kq->setMau($ps1->getMau() * $ps2->getMau());
        return $kq->toiGian();
    }
    static function tich($ps1, $ps2)
    {
        $kq = new PhanSo(1, 1);
        $kq->setTu($ps1->getTu() * $ps2->getTu());
        $kq->setMau($ps1->getMau() * $ps2->getMau());
        return $kq->toiGian();
    }
    static function thuong($ps1, $ps2)
    {
        $kq = new PhanSo(1, 1);
        $kq->setTu($ps1->getTu() * $ps2->getMau());
        $kq->setMau($ps1->getMau() * $ps2->getTu());
        return $kq->toiGian();
    }
}

$ps1 = new PhanSo($_POST['tu1'] ?? 0, $_POST['mau1'] ?? 1);
$ps2 = new PhanSo($_POST['tu2'] ?? 0, $_POST['mau2'] ?? 1);

$kq = "";
//Hanler each button
if (isset($_POST['add'])) {
    $kq = PhanSo::tong($ps1, $ps2)->print();
} else {

    if (isset($_POST['sub'])) {
        $kq = PhanSo::hieu($ps1, $ps2)->print();
    } else {
        if (isset($_POST['mul'])) {
            $kq = PhanSo::tich($ps1, $ps2)->print();
        } else {
            if (isset($_POST['div'])) {
                $kq = PhanSo::thuong($ps1, $ps2)->print();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <form action="b3.php" method="post">
        <table class="table">
            <tr>
                <td>PS1 Tử:</td>
                <td><input type="number" name="tu1" id="" value="<?php echo $ps1->getTu() ?>"></td>
            </tr>
            <tr>
                <td>PS1 Mẫu:</td>
                <td><input type="number" name="mau1" id="" value="<?php echo $ps1->getMau() ?>"></td>
            </tr>
            <tr>
                <td>PS2 Tử:</td>
                <td><input type="number" name="tu2" id="" value="<?php echo $ps2->getTu() ?>"></td>
            </tr>
            <tr>
                <td>PS2 Mẫu:</td>
                <td><input type="number" name="mau2" id="" value="<?php echo $ps2->getMau() ?>"></td>
            </tr>
            <tr>
                <td>Kết quả</td>
                <td><input type="text" name="kq" id="" value="<?php echo $kq ?>"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="add" value="Cộng">
                    <input type="submit" name="sub" value="Trừ">
                    <input type="submit" name="mul" value="Nhân">
                    <input type="submit" name="div" value="Chia">
                </td>
            </tr>

        </table>


    </form>
</body>

</html>