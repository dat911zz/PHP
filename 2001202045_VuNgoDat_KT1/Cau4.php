<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<style>
		nav{
			display:flex;
			justify-content: space-between;
			justify-items:center;
			background-color: #FF72FF;
			padding: 0px;
			margin: 0;
		}
		.menu{
			display: flex;
			list-style: none;
			padding: 0px;
			margin: 0;
		}
		.menu li{
			color: white;	
			cursor: pointer;
			border-right: 1px solid white;
			padding: 10px 0px;
		}
		.menu li a{
			margin: 0px 50px;
			
		}
	</style>
</head>
<?php
	$hoten = $_POST["hoTen"];
	$email = $_POST["email"];
	$tenDN = $_POST["tenDN"];
	$pass = $_POST["pass"];
		
		$path = "../2001202045_VuNgoDat_KT1/Images_Cau234/";
		$tmp_name= $_FILES["anh"]["tmp_name"];
		$name= $_FILES["anh"]["name"];
		move_uploaded_file($tmp_name, $path.$name);
	
	?>
<body>
	<div class="container">
		<center>
		<div style="font-size: 30px;
			font-weight: bold;
			color: #888;
			margin-top: 30px;">algoda</div>
			<img src="../2001202045_VuNgoDat_KT1/Images_Cau234/Agoda.JPG" style="width: 200px; height: 50px; margin: 0 40px 40px;">
		</center>
		<div>			
			<nav class="w-100">
			<ul class="menu">
				<li><a href="Cau2.php"style="text-decoration: none; color: white">SẢN PHẨM</a></li>
				<li><a>TIN TỨC</a></li>
				<li><a>ĐĂNG KÝ</a></li>
				<li><a>THÔNG TIN ĐĂNG KÝ</a></li>
			</ul>
				</nav>
			<div class="row" style="padding: 0; margin: 0;">
				<div class="col-8" style="background-color: hsla(63,85%,92%,1.00); padding: 0; margin: 0;">
			<div style="padding: 30px;">
				<p><b style="font-size: 25px ">Thông tin của bạn</b></p>
				<div>
					<img src="../2001202045_VuNgoDat_KT1/Images_Cau234/FaceBookButton.JPG">
				</div>	
				<span>Avatar :</span><br>
					<div style="float: left; width: 30%; height: 300px;">
						
						<img style="width: 90%; height: 240px;" src="<?php echo $path.$name?>">
					</div>
				<div style="float: left; width: 70%;">
						<span>Họ và tên: </span><b style="color: red;"><?php echo $hoten?></b> <br>
					<span>Email: </span><b style="color: red;"><?php echo $email?></b> <br>
					<span>Tên đăng nhập: </span><b style="color: red;"><?php echo $tenDN?></b> <br>
					<span>Password: </span><b style="color: red;"><?php echo $pass?></b> <br>
					</div>
				<button type="submit" class="w-100" style="border: none; background-color: blue; color: white;padding: 15px;margin-top: 2px;">Tạo Tải Khoản</button>
				</div>
					</div>
				<div class="col-4">
				<div class="w-100 h-100" style="
    background-color: hsla(63,85%,92%,1.00);">
						<img src="../2001202045_VuNgoDat_KT1/Images_Cau234/QC.JPG" style="height: 539px;float: right;">						
					</div>
				</div>
				
			</div>
		</div>
		<div class="row" style="padding: 0; margin:0px;background-color: blanchedalmond;">
				<center><h3>2020 Một sản phẩm của HUFI Group</h3>
			<h4>Email:yennh@cntp.edu.vn</h4>
			</center>
			</div>

	</div>
	
</body>
</html>