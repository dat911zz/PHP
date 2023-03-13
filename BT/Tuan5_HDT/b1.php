<?php
class HCN
{
    private $chieudai, $chieurong;
    public function __construct($chieudai, $chieurong)
    {
        $this->chieudai = $chieudai;
        $this->chieurong = $chieurong;
    }
    public function tinhCV()
    {
        return ($this->chieudai + $this->chieurong) * 2;
    }
    public function tinhDT()
    {
        return $this->chieudai * $this->chieurong;
    }
    public function getChieudai()
    {
        return $this->chieudai;
    }
    public function setChieudai($chieudai)
    {
        $this->chieudai = $chieudai;

        return $this;
    }
    public function getChieurong()
    {
        return $this->chieurong;
    }
    public function setChieurong($chieurong)
    {
        $this->chieurong = $chieurong;

        return $this;
    }
}

$hcn = new HCN($_POST['dai'] ?? 0, $_POST['rong'] ?? 0);
$cv = $hcn->tinhCV();
$dt = $hcn->tinhDT();

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
    <form action="b1.php" method="post">
        <table class="table">
            <tr>
                <td>Chiều dài:</td>
                <td><input type="number" name="dai" id="" value="<?php
                                                                    echo $hcn->getChieudai() ?>"></td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td><input type="number" name="rong" id="" value="<?php global $rong;
                                                                    echo $hcn->getChieurong() ?>"></td>
            </tr>
            <tr>
                <td>Chu vi:</td>
                <td><input type="number" name="chuvi" id="" value="<?php global $cv;
                                                                    echo $cv ?>"></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="number" name="dientich" id="" value="<?php global $dt;
                                                                        echo $dt ?>"></td>
            </tr>
        </table>
        <input type="submit" value="TÍNH">
    </form>
</body>

</html>