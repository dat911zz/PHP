<?php
    include('../2001202045_VuNgoDat_KT1/Lib/myLib.php');
    $arr = readF_arr('Cau5.txt');
    $ttArr = array();
    $i = 0;
    while ($i < count($arr)) {
        $item = explode("|", $arr[$i++]);
        $tt = new TT(str_replace("/*", "", $item[0]), $item[1], $item[2]);
        array_push($ttArr, $tt);
    }
    class TT
    {
        var $hinh, $ngay, $noidung;
        function __construct($hinh, $ngay, $noidung)
        {
            $this->hinh = $hinh;
            $this->ngay = $ngay;
            $this->noidung = $noidung;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài KT</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="h-textbox">
                <h2>Welcome to Sparx Studio</h2>
                <p>Use the menu to select different services bellow</p>
            </div>
            <div class="h-logo">
                <img src="Images_Cau5/Sparx.JPG" alt="">
            </div>
        </div>
        <div class="container">
            <div class="sidebar">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">NEWS</a>               
                        <ul>
                            <li><a href="#">NEW 1</a></li>
                            <li><a href="#">NEW 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">SERVICES</a>
                        <ul>
                            <li><a href="#">SERVICES 1</a></li>
                            <li><a href="#">SERVICES 2</a></li>
                            <li><a href="#">SERVICES 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">RECRUITMENT</a></li>
                    <li><a href="#">CONTACT US</a></li>
                </ul>
            </div>
            <div class="content">
                <?php
                    foreach ($ttArr as $tt) {                  
                ?>
                <div class="card">
                    <img src="../2001202045_VuNgoDat_KT1/Images_Cau5/<?php echo $tt->hinh ?>" alt="">
                    <div class="c-heading"><?php echo $tt->ngay ?></div>
                    <div class="c-title"><?php echo $tt->noidung ?></div>
                </div>
                <?php
                }
                ?>
            </div>
            <div class="rightbar">
                <div class="r-heading color-head">
                    CONTACT US
                </div>
                <div class="r-form">
                    <form name="F1" method="get" class="formInput">
                        <table style="margin: 0 auto; width: 100%;">
                            <tr>
                                <td class="right">Title</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td class="right">Name</td>
                                <td><input type="text"></td>
                            </tr>
                            <tr>
                                <td class="right">PhoneNo</td>
                                <td><input type="number"></td>
                            </tr>
                            <tr>
                                <td class="right">Comment</td>
                                <td>
                                    <textarea name="" id="" cols="20" rows="6"></textarea>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>                              
                                    <input type="submit" value="SEND" class="btn" style="padding: 0 5px; border-radius: 2px; border: 1px solid #999;">                                  
                                </td>                               
                            </tr>                          
                        </table>                        
                    </form>                                                         
                </div>
                <div class="r-table-heading color-head">
                    <br><br>
                    BẢNG QUY ĐỔI THÔNG SỐ
                </div>
                <div class="r-table">
                    <table border="1" cellpadding="10px" cellspacing="0" style="border-color: #fff; text-align: center; margin: 0 auto; width: 100%;">
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer">
            Chuyên mục văn hoá giải trí của VnExpress. © 2004 Ngoisao.net <br> Tầng 5, Tòa nhà FPT Cầu Giấy, phố Duy Tân, Phường Dịch Vọng Hậu, Quận Cầu Giấy, 
    Hà Nội <br>
    Email: lienhe@ngoisao.net | Điện thoại: 024 7300 9999 - Ext 4546
        </div>
    </div>
</body>
</html>