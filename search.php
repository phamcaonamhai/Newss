
<!DOCTYPE html>
<html>
<head>
	<title>Tìm kiếm</title>
	<meta charset="utf-8">
	<html lang="en-Us">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.total{
			padding: 0px;
			margin: 0px;
		}
		#head1 h3{
			padding: 0px;
			margin: 0px;
		}
		#head1 img{
			margin-top:-30px;
		}

		.header2{
			background-color: grey;
			position: -webkit-sticky;
			position: sticky;
			top: 0px;
		}
		.header2 li{
			float : left;
		}
		.header2 ul {
			list-style-type: none;
			background-color: grey;
			text-align: center;
			overflow: hidden;
			margin: 0px;
			padding: 5px;
		}
		.header2 ul li{
			display: inline-table;
		}
		.header2 li a{
			text-decoration: none;
			padding: 10px;
			display: block;
			color: white;
		}
		.header2 li a:hover{
			background-color: #bc0032;
			color: white;
		}
		.header2 li a:active{
			background-color: white;
			color: black;
		}
		.content{
			border-top: 1px solid grey;
		}
		#content-left{
			width: 50%;
			display: inline-block;
			border-right: 1px solid grey;
		}
		#content-left{
			display: inline-block;
		}
		#content-mid{
			width: 23%;
			display: inline-block;
			height: 565px;
			overflow: scroll;
			border-right: 1px solid grey;

		}
		#content-right{
			width: 24%;
			display: inline-block;
			height: 565px;
			overflow: scroll;
		}
		
		#content-left{
			overflow: hidden;
		}
		#A{
			text-decoration: none;
			color: black;
			font-size: 30px;
		}
		#A:hover{
			color: red;
		}
		#content-mid a{
			text-decoration: none;
			color: black;
		}
		#content-mid a:hover{
			color: red;
		}
		#content-right a{
			text-decoration: none;
			color: black;
		}
		#content-right a:hover{
			color: red;
		}
		.bot2{
			width: 28%;
		}
		.bot3{
			width: 20%;
		}
		.bot1{
			border: 1px solid grey;
			width: 53%;
			display: inline-block;
		}
		.bot {
			float: left;
			padding: 15px;
			display: inline-block;
			height: auto;
			width: 200px;
		}
		.bot a{
			text-decoration: none;
			color: black;
		}
		.bot a:hover{
			color: red;
		}
		.bot2{
			border-right: 1px solid grey;
			overflow: scroll;
			height: 530px;
			display: inline-block;
		}
		.bot3{
			border-right: 1px solid grey;
			height: auto;
			display: inline-block;
			overflow: scroll;
			height: 530px;
		}
		.content-TTCN{
			display: flex;
			flex-direction: row;
		}
		.content-TTCN a{
			text-decoration: none;
			color: #004175;
		}
		.content-TTCN a:hover{
			color: blue;
		}
		.content-bot{
			display: flex;
			flex-direction: row;
		}
		.bot3 a{
			text-decoration: none;
			color: black;
		}
		.bot3 a:hover{
			color: red;
		}
		.footer{
			background-color:  #cccccc;
			height: auto;
			text-align: left;
			margin-top: 20px;
			padding: 0px;
			display: flex;
			flex-direction: row;
			width: 100%;

		}
		.footer1{
			width: 50%;
		}
		.footer2{
			width: 50%;
		}
		#time{
			padding: 0px;
			margin: 0px;
		}
		.hihi{
			width: 35%;
			border-right: 1px solid grey;
		}
		#hihi1 a{
			text-decoration: none;
			color: black;
			font-size: 25px;
		}
		.hihi2{
			display: flex;
			flex-direction: row;
		}
		.hihi2 a{
			text-decoration: none;
			color: black;
		}
		#hihi1 a:hover{
			color: red;
		}
		.hihi2 a:hover{
			color: red;
		}

		.haha{
			width: 45%;
			border-right: 1px solid grey;
		}
		.hihihaha{
			display: flex;
			flex-direction: row;
		}
		.haha-con1{
			width: 50%;
			margin: 10px;
		}
		.haha-con2{
			width: 50%;
			margin: 10px;
		}
		.haha-con{
			display: flex;
			flex-direction: row;
		}
		.tinthethao{
			padding: 5px;
			display: flex;
			flex-direction: row;
			width: 33.3%;
		}
		.tinthethao img{
			margin: 4px;
			width: 200px;
			height: 130px;
		}
		.tinthethao a{
			text-decoration: none;
			color: black;
			margin: 2px;
			width: 90%;
			height: auto;
		}
		.tinthethao a:hover{
			color: red;
		}
		.kinhdoanh{
			padding: 5px;
			display: flex;
			flex-direction: row;
			width: 33.3%;
		}
		.kinhdoanh img{
			margin: 4px;
			width: 200px;
			height: 130px;
		}
		.kinhdoanh a{
			text-decoration: none;
			color: black;
			margin: 2px;
			width: 90%;
			height: auto;
		}
		.kinhdoanh a:hover{
			color: red;
		}
		.khoahoc{
			padding: 5px;
			display: flex;
			flex-direction: row;
			width: 33.3%;
		}
		.khoahoc img{
			margin: 4px;
			width: 200px;
			height: 130px;
		}
		.khoahoc a{
			text-decoration: none;
			color: black;
			margin: 2px;
			width: 90%;
			height: auto;
		}
		.khoahoc a:hover{
			color: red;
		}
		.pagination {
 		   display: inline-block;

		}
		.pagination a {
			color: black;
    		padding: 8px 16px;
    		text-decoration: none;
		}

		.pagination a.active {
   			background-color: #4CAF50;
    		color: white;
    		border-radius: 5px;
		}

		.pagination a:hover:not(.active) {
    		background-color: #ddd;
    		border-radius: 5px;
		}
		.subtem:hover div{
			display: block;
		}
		.subtem{
			top:38px;
		}
		#content-left img{
 			transition-duration: 0.3s;
		}
		#content-left img:hover{
		  	transform: scale(0.95);
		}
	</style>
</head>
<body style="background-color: white" id="Trang-chu">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	
<div class="total">

	<div class="headd">
		<div class="col1">
			<img src="./pnews.png" width="150" height="auto">
			<div>TIN TỨC - BÁO CHÍ</div>
		</div>
		<div class="col2"></div>
		<div class="col">
		</div>
		<div class="col3">

			<div class="alli">
  				<div id="i1"> Hottline: 0965.357.203 </div>
  				<div id="i2"><a href="Dangnhap.php" target="_bank"> Đăng nhập </a></div>
  				<div id="i3"><a href="Dangki.php" target="_bank"> Đăng kí </a></div>
  				<div id="i3"><a href="#"> <img src="http://www.tdtu.edu.vn/themes/_logo/flag-en.png"> </a></div>
  			</div>

			<div class="container-1">
  				<form method="GET" action="search.php">
  					<input type="text" name="ten" value="" placeholder="Tìm kiếm...">
  					<input type="submit" name="submit" value="Tìm Kiếm">
  				</form>
      		</div>
		</div>
	</div>
</div>
	<div class="header2">
	
		<ul>
			<li><a href="index.php">TRANG CHỦ</a></li>
			<li>
				<a href="index.php?page=thoisu">THỜI SỰ</a>
				<ul class="subtem">
					<div><a href="#">Tin trong tỉnh</a> </div>
					<div><a href="#">Tin trong nước</a> </div>
					<div><a href="#">Chính sách mới</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=chinhtri">CHÍNH TRỊ</a>
				<ul class="subtem">
					<div><a href="#">Xây dựng đảng</a> </div>
					<div><a href="#">Cải cách hành chính</a> </div>
					<div><a href="#">Nghị Quyết và cuộc sống</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=kinhte">KINH TẾ</a>
				<ul class="subtem">
					<div><a href="#">Nông nghiệp</a> </div>
					<div><a href="#">Công nghiệp</a> </div>
					<div><a href="#">Thương mại</a> </div>
					<div><a href="#">Đầu tư</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=phapluat">PHÁP LUẬT</a>
				<ul class="subtem">
					<div><a href="#">Tin tức</a> </div>
					<div><a href="#">Pháp đình</a> </div>
					<div><a href="#">Tư vấn</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=xahoi">XÃ HỘI</a>
				<ul class="subtem">
					<div><a href="#">An Ninh - Quốc Phòng</a> </div>
					<div><a href="#">Cuộc Sống</a> </div>
					<div><a href="#">Thời Tiết</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=vanhoa">VĂN HOÁ</a>
				<ul class="subtem">
					<div><a href="#">An sinh</a> </div>
					<div><a href="#">Việc làm</a> </div>
					<div><a href="#">Môi trường</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=khoagiao">KHOA GIÁO</a>
				<ul class="subtem">
					<div><a href="#">Y tế</a> </div>
					<div><a href="#">Giáo dục</a> </div>
					<div><a href="#">Khoa học & Công nghệ</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=thethao">THỂ THAO</a>
				<ul class="subtem">
					<div><a href="#">Bóng đá</a> </div>
					<div><a href="#">Các môn khác</a> </div>
					<div><a href="#">Đội tuyển</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=quocphong">QUỐC PHÒNG</a>
				<ul class="subtem">
					<div><a href="#">Quốc phòng toàn dân</a> </div>
					<div><a href="#">Biển đảo</a> </div>
					<div><a href="#">Tư liệu</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=anninh">AN NINH</a>
				<ul class="subtem">
					<div><a href="#">Trật tự xã hội</a> </div>
					<div><a href="#">An toàn giao thông</a> </div>
					<div><a href="#">Câu chuyện cảnh giác</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=bandoc">BẠN ĐỌC</a>
				<ul class="subtem">
					<div><a href="#">Vấn đề quan tâm</a> </div>
					<div><a href="#">Nhịp cầu</a> </div>
					<div><a href="#">Tấm lòng nhân ái</a> </div>
				</ul>
			</li>
			<li>
				<a href="index.php?page=quocte">QUỐC TẾ</a>
				<ul class="subtem">
					<div><a href="#">Thông tin đối ngoại</a> </div>
					<div><a href="#">Thời sự thế giới</a> </div>
					<div><a href="#">Sự kiện đó đây</a> </div>
				</ul>
			</li>

		</ul>
	</div>


	<div style="background-color:#cccccc; width: 100px;margin-top: 10px; font-size: 20px; padding: 5px;color: #800000"> Tìm kiếm
	</div>


<?php
	if(isset($_REQUEST['submit']))
	{
		$search = $_GET['ten'];
		if(empty($search)){
			echo "<p>Yêu cầu nhập dữ liệu vào ô trống</p>";
		}
		else
		{
			require('connect.php');
			$sql = mysqli_query($con,"
				SELECT * 
				FROM contentleft3
				WHERE tieude 
				like '%$search%'");
			

			$num_row = mysqli_num_rows($sql);
			if($num_row == 0){
				?>
				<p>Không tìm thấy kết quả với từ khoá <?php echo $search ?> </p>


				<?php
			}else{
				while ($row = mysqli_fetch_array($sql)) 
				{

				?>

				<div class="hihi2">

					<div>
						<a href="#">
						<img src="<?php echo $row['hinhanh']?>" style="margin: 5px; width:180px; height: 108px">
						</a>
					</div>
					<div>
						<a href="#"><strong> '<?php echo $row['tieude'] ?>' </strong></a>
						<p style="color: #4d4d4d"><?php echo $row['noidung']?></p>
					</div>
				</div>
				<hr>
			
		<?php
		}
			}
		}
	}
		?>




<div class="footer">
	<div class="content footer1">
		<p><strong>© 2017-2018 Báo Việt Nam All rights reserved.</strong></p>
		<p><strong>Thành lập ngày 22/2/1998</strong></p>
		<p><strong>Cơ quan chủ quản: Bộ Thông tin và Truyền thông</strong></p>
		<p><strong> Số giấy phép:</strong> 437/GP - BTTTT, cấp ngày 28/10/2013</p>
		<p><strong> Tổng Biên Tập:</strong> Phạm Cao Nam Hải & Nguyễn Hữu Phúc</p>
		<p><strong> Tòa soạn:</strong> Tòa nhà Đăng Khoa , Phòng 306, 441/21 Lê Văn Lương, Phường Tân Phong, Quận 7,Tp. Hồ Chí Minh</p>
		<p><strong> Đường dây nóng:</strong> 0965 357 203</p>
		<p><strong> Điện thoại:</strong> (038) 123xxx , <strong> Fax:</strong> (024) 456xxx ,<strong> Email:</strong> 51600023@student.tdtu.edu.vn</p>
		<p><strong> Văn phòng đại diện tại TP.HCM:</strong> Tòa nhà Đăng Khoa , Phòng 306, 441/21 Lê Văn Lương, Phường Tân Phong, Quận 7,Tp. Hồ Chí Minh.</p>
		<p><strong> Đường dây nóng:</strong> 0965 357 203 ,<strong> Điện thoại:</strong> (028) 123xxx,<strong> Fax:</strong> (028) 123xxx</p>
		<p><strong> ® Chỉ được phát hành lại thông tin từ website này khi có sự đồng ý bằng văn bản của Phạm Cao Nam Hải & Nguyễn Hữu Phúc</strong></p>
	</div>

	<div class="content footer2">
		<p><strong> CÔNG TY CỔ PHẦN TRUYỀN THÔNG " HẢI PHÚC COMPANY"</strong></p>
		<p><strong> Hà Nội. Tel:</strong> (024) 123XXX</p>
		<p><strong> Hotline:</strong> 0965 357 203</p>
		<p><strong> Email:</strong> 51600069@student.tdtu.edu.vn</p>
		<p><strong> Tp.HCM. Tel:</strong> (028) 123xxx</p>
		<p><strong> Hotline:</strong> 0339 238 777</p>
		<p><strong> Email:</strong> 51600069@student.tdtu.edu.vn</p>
		<p><strong> Hỗ trợ kỹ thuật:</strong> Liên hệ 0965 357 203</p>
		<p><strong> VTổng đài Tel:</strong> (024) 123xxxx</p>
		<p><strong> Liên hệ Tòa soạn - Đặt "Thời sự mỗi ngày" làm trang chủ </strong></p>
		<p><strong> ® Chỉ được phát hành lại thông tin từ website này khi có sự đồng ý bằng văn bản của Phạm Cao Nam Hải & Nguyễn Hữu Phúc</strong></p>
	</div>
</div>


</body>
</html>
