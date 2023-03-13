<?php 
    class TinhToan
    {
        private $a, $b;
        function __construct($a, $b){
            $this->a = $a;
            $this->b = $b;
        }
        function getA(){
            return $this->a;
        }
        function getB(){
            return $this->b;
        }
        function tong(){
            return $this->a + $this->b;
        }
        function hieu(){
            return $this->a - $this->b;
        }
        function tich(){
            return $this->a * $this->b;
        }
        function thuong(){
            if ($this->b == 0) {
                return "Cannot devided to 0!";
            }
            return $this->a / $this->b;
        }
    }
    
    
    $calc = new TinhToan($_POST['so_a'] ?? 0, $_POST['so_b'] ?? 0);
    $kq = "";
    //Hanler each button
    if (isset($_POST['add'])) {
        $kq = $calc->tong();
    }else{
        
        if (isset($_POST['sub'])) {
            $kq = $calc->hieu();
        }else{
            if (isset($_POST['mul'])) {
                $kq = $calc->tich();
            }else{
                if (isset($_POST['div'])) {
                    $kq = $calc->thuong();
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
    <form action="b2.php" method="post">
        <table class="table">
            <tr>
                <td>a</td>
                <td><input type="number" name="so_a" id="" value="<?php echo $calc->getA() ?>"></td>
            </tr>
            <tr>
                <td>b</td>
                <td><input type="number" name="so_b" id="" value="<?php echo $calc->getB() ?>"></td>
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