<?php
	require('connect.php');
	$sql1 = "SELECT * FROM Vanhoa ORDER BY ID DESC ";
	$query1 = mysqli_query($con,$sql1);
	$num1  = mysqli_num_rows($query1);
	$row1 = mysqli_fetch_array($query1);
	?>
		<div id="content-left">
			<?php 
				if($num1 > 0){	
			?>
			<p>
				<a href="./detailpage.php?id=<?php echo $row1["id"]?>&page=vanhoa" target="_bank">
					
				 <img src="<?php echo $row1['hinhanh']?>" width="700" height="auto">

				</a>
			</p>
			
			<a id="A" href="#Thoi-su" > <?php echo $row1['tieude']?> </a>

			<p>
				<?php echo $row1['noidung']?>
			</p>
			<?php
			}
			?>
		</div>



<?php
	require('connect.php');
	$sql = "SELECT * FROM contentmid ORDER BY ID DESC";
	$query = mysqli_query($con,$sql);
	$num = mysqli_num_rows($query);

	

?>
		<div id="content-mid">
			<?php 
				if($num > 0){	
				while ($row = mysqli_fetch_array($query)) {
			?>

			<a href="#"><?php echo $row['content']; ?> </a><br>
			<hr>	
		<?php
	}
}
		?>
		</div>



		<div id="content-right">
			<iframe width="336" height="565" src="http://img.vietnamnetad.vn/html/2018/10/Banner_interactive_336x600_1010/336x600.html?clickVNN=http://tracking.vietnamnetad.vn/Dout/Click.ashx?itemId=4199&amp;isLink=1&amp;nextUrl=https://bit.ly/2CasdPc" marginwidth="0" allowtransparency="true" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no"></iframe>
		</div>
	</div>
</div>
	<hr style="margin: 0px;">
<div>
	<canvas id="canvas" width="1395" height="50" style="background-color: rgb(255, 255, 255); cursor: pointer;"></canvas>
</div>

<div class="content-bot">
	<div class="bot1">
		<div>
			<img src="./ha2.png" style="width: 100%; height: 15%">
		</div>
		<div class="bot">
			<a href="#"><img src="https://vnn-imgs-f.vgcloud.vn/2018/10/11/10/ong-le-phuoc-hoai-bao-xin-nghi-viec-de-di-hoc-tien-si-200x112.jpg">Siết chặt việc giả danh báo điện tử và tỷ lệ tin tiêu cực trên báo chí</a>
		</div>
		<div class="bot">
			<a href="#"><img src="https://photo-1-baomoi.zadn.vn/w300_r3x2/2018_10_25_98_28310697/5af67cc43782dedc8793.jpg">Ngành công nghiệp ô tô Việt Nam trước 'cơn bão' Cách mạng công nghiệp</a>
		</div>
		<div class="bot">
			<a href="#"><img src="https://photo-atm-baomoi.zadn.vn/w300_r4x3/adtima-media.zadn.vn/2018/10/e6971bc4-0c68-4fa5-89d2-e92af590f527.png">Đập tan nỗi sợ thất nghiệp với 45 phút học tiếng Anh mỗi ngày</a>
		</div>
		<div class="bot">
			<a href="#"><img src="https://photo-2-baomoi.zadn.vn/w300_r3x2/2018_10_25_83_28310698/1d21c61a8d5c64023d4d.jpg">
 			Bộ GTVT muốn 'xóa sổ' xe công nghệ, Grab tuyên bố: Đó là bước lùi của cách mạng 4.0</a>
		</div>
		<div class="bot">
			<a href="#"><img src="https://photo-1-baomoi.zadn.vn/w300_r3x2/2018_10_25_149_28310763/cc9cd9a692e07bbe22f1.jpg">Cách mạng 4.0 trong nông nghiệp là xóa chuyện giải cứu nông sản
			</a>
		</div>
		<div class="bot">
			<a href="#"><img src="https://photo-2-baomoi.zadn.vn/w300_r3x2/2018_10_25_65_28310443/28ef84cccf8a26d47f9b.jpg">
			Thủ tướng nhấn mạnh vai trò phụ nữ và trẻ em gái trong Cộng đồng ASEAN</a>
		</div>
	</div>


	<div class="bot2">
		<div id="TTCN" style="position: -webkit-sticky;position: sticky;top: 0px">
			<img src="./ha3.png" style="width: 100%">
		</div>

		<div class="content-TTCN">
			<div>
				<a href="#">
					<img src="https://znews-photo-td.zadn.vn/w210/Uploaded/lce_uxlcq/2018_10_24/1_1_2.jpg" style="margin: 5px">
				</a>
			</div>
			<div>
				<a href="#"><b>Honor Magic 2 ra mắt - 6 camera, khóa vân tay dưới màn hình </b></a>
				<p>
					Thiết bị sở hữu sáu camera được chia đều trước sau, với cụm camera sau dự kiến mang đến chất lượng...
				</p>
			</div>
		</div>

		<div class="content-TTCN">
			<div>
				<a href="#">
					<img src="https://znews-photo-td.zadn.vn/w210/Uploaded/wyhktpu/2018_10_24/3.jpg" style="margin: 5px">
				</a>
			</div>
			<div>
				<a href="#"><b>Realme học gì từ Oppo khi gia nhập thị trường Việt Nam? </b></a>
				<p>
					Nhắm đến người dùng trẻ với những tính năng đặc trưng dành cho thế hệ này, tấn công phân khúc ...
				</p>
			</div>
		</div>

		<div class="content-TTCN">
			<div>
				<a href="#">
					<img src="https://znews-photo-td.zadn.vn/w210/Uploaded/fsmyy/2018_10_24/1861861.jpg" style="margin: 5px">
				</a>
			</div>
			<div>
				<a href="#"><b>Laptop màn hình dẻo sắp xuất hiện</b></a>
				<p>
					Công nghệ màn hình gập hứa hẹn giúp các nhà sản xuất có thể thay đổi thị trường laptop 2 trong 1...
				</p>
			</div>
		</div>

				<div class="content-TTCN">
			<div>
				<a href="#">
					<img src="https://znews-photo-td.zadn.vn/w210/Uploaded/lce_uxlcq/2018_10_09/appleios11reviewheader720x720.jpg" style="margin: 5px">
				</a>
			</div>
			<div>
				<a href="#"><b>Tại sao người dùng thích iPhone hơn smartphone Android? </b></a>
				<p>
					Bị thương mại hóa nặng nề, bảo mật kém, thời gian hỗ trợ ngắn hơn iOS là những lý do khiến smartphone...

				</p>
			</div>
		</div>

				<div class="content-TTCN">
			<div>
				<a href="#">
					<img src="https://znews-photo-td.zadn.vn/w210/Uploaded/wyhktpu/2018_10_24/image003_6.jpg" style="margin: 5px">
				</a>
			</div>
			<div>
				<a href="#"><b>Realme nhận gần 6.000 đơn đặt hàng sau một tuần ra mắt</b></a>
				<p>
					Con số đặt hàng lớn sau ít ngày ra mắt phần nào cho thấy sức hút của bộ 3 smartphone Realme C1...
				</p>
			</div>
		</div>
	</div>


	<div class="bot3">
		<div>
			<a href="http://www.tdtu.edu.vn/"><img src="./ha-tdt.png" style="width: 100%; position: -webkit-sticky;position: sticky; top: 0px"> </a>
			<a href="#">Phu nhân cố Thủ tướng Phạm Văn Đồng từ trần</a><hr>
			<a href="#">Ông Phan Văn Vĩnh nhập viện chữa bệnh tim</a><hr>
			<a href="#">Vụ điện giật chết trước cổng trường: Lời kể của nữ sinh thoát nạn</a><hr>
			<a href="#">Thưởng Tết 2019 sẽ được doanh nghiệp chi trả ra sao?</a><hr>
			<a href="#">Luật 'ngầm' trong gia đình đại gia 70 tuổi ở Hà thành</a><hr>
			<a href="#">Cô gái bị người yêu cũ đâm 9 nhát từng bị dọa tạt axít</a><hr>
			<a href="#">'Người đẹp nhân ái' Thùy Tiên nóng bỏng trước thềm Hoa hậu Quốc tế</a><hr>
			<a href="#">Nam thanh niên nằm chết giữa quốc lộ, cổ gần đứt lìa</a><hr>
			<a href="#">Thầy Park không ngán Malaysia, tuyên bố đứng đầu bảng AFF Cup</a><hr>
			<a href="#">Thưởng Tết 2019 sẽ được doanh nghiệp chi trả ra sao?</a><hr>
			
		</div>
	</div>
</div>
<hr>
<div style="margin-left: 15%; margin-top: 5px;">
<iframe id="ifr" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allowfullscreen="true" width="1000" height="100" src="https://html.polyad.net/v1/CPM/13241.htm#https%3A%2F%2Fkinhdoanh.vnexpress.net%2Ftin-tuc%2Fthuong-mai-dien-tu&amp;pos=&amp;link=https%3A//go.polyad.net/clk.aspx%3Flg%3D1%26t%3D1%26i%3D1%26b%3D13241%26s%3D49%26r%3D0%26c%3D1560%26p%3D38%26n%3D0%26l%3Dhttp%253A//diamond.swisstoucheslaluna.com/%253Futm_source%253DvnExpress%2526utm_medium%253DSticky%2526utm_campaign%253DLaluna%2526fbclid%253DIwAR2nIXgbwy8LfvKsx5drl_wHLcfOsKaHdxXEcAnVZXhfR0-tY0m_FBIbrFg%26uc%3D0%26uv%3D0%26ud%3D%26rd%3D0.06253920801231683%26ui%3D0&amp;otherlink=https%3A//go.polyad.net/clk.aspx%3Flg%3D1%26t%3D1%26i%3D1%26b%3D13241%26s%3D49%26r%3D0%26c%3D1560%26p%3D38%26n%3D0%26uc%3D0%26uv%3D0%26ud%3D%26rd%3D0.0072163272116390065%26ui%3D0%26l%3D"></iframe>
</div>
<hr style="margin: 0px;">

<div class="hihihaha">
<div class="hihi">
	<div id="hihi1">


<?php
	
	require('connect.php');
	$sql2 = "SELECT * FROM contentleft3 ORDER BY ID DESC";
	$query2 = mysqli_query($con,$sql2);
	$num2 = mysqli_num_rows($query2);
	$row2 = mysqli_fetch_array($query2);


	

?>

		<div>
			<?php 
				if($num2 > 0){	
			?>
				<a href="#"><strong> <?php echo $row2['tieude']?> </strong></a>
			<p>
				<?php echo $row2['noidung']?>
			</p>
		</div>
		<div>
			<a href="#">
				<img src="<?php echo $row2['hinhanh']?>" style="margin: 5px; width: 480px;height: 300px">
			</a>
		</div>

		<?php
				}
		?>
	</div>
<hr>



<?php 
		if($num2 > 0){	
			while ($row2 = mysqli_fetch_array($query2)) {
?>

	<div class="hihi2">

		<div>
			<a href="#">
				<img src="<?php echo $row2['hinhanh']?>" style="margin: 5px; width:180px; height: 108px">
			</a>
		</div>
		<div>
			<a href="#"><strong> '<?php echo $row2['tieude'] ?>' </strong></a>
			<p style="color: #4d4d4d">
				<?php echo $row2['noidung']?>
			</p>
		</div>

	</div>
<hr>
<?php
					}
				}
?>
	<div>

		<div class="pagination">
			<a href="#">&laquo;</a>
  			<a href="#" class="active">1</a>
  			<a href="#">2</a>
  			<a href="#">3</a>
  			<a href="#">&raquo;</a>
		</div>
	</div>
</div>

<div class="haha">
	<div style="font-size: 25px;/"><strong>Videos</strong></div>

	<div class="haha-con">

	<div class="haha-con1">
		<iframe width="auto" height="200" src="https://www.youtube.com/embed/e9Zsd9NYmHU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<p style="margin: 2px;width: 90%;height: 60px">
			Ngôi làng bí ẩn nhất Trung Quốc: Không 1 con muỗi nào dám đến gần trong suốt 1.000 năm qua
		</p>
		<iframe width="300" height="200" src="https://www.youtube.com/embed/dklnNMAAKFw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<p style="margin: 2px;width: 90%;height: 60px">
			Ngôi nhà của Nobita ở Nhật Bản có thật sự nghèo như trong trong sự thật không ?
		</p>
	</div>

	<div class="haha-con2">
		<iframe width="300" height="200" src="https://www.youtube.com/embed/OTMbwpql6Ts" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<p style="margin: 2px;width: 90%;height: 60px">
			Quá trình hình thành đất nước Việt Nam
		</p>
		<iframe width="300" height="200" src="https://www.youtube.com/embed/b4oU2l7KIZ8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
		<p style="margin: 2px;width: 90%;height: 60px">
			10 hành tinh bí ẩn và kì lạ nhất trong Vũ Trụ- Có Thể Bạn chưa biết
		</p>
	</div>
	</div>
	<hr style="margin: 0px;">
	<hr style="margin: 0px;">
	<hr style="margin: 0px;">

	<div style="font-size: 25px;/"><strong>Tin thể Thao</strong></div>
	<div class="tinthethao">
		<div>
			<a href="#"><img src="https://cdn.tuoitre.vn/zoom/214_143/2018/10/18/photo1539841807690-15398418076912032685779.jpg"></a>
			<a href="#">
				Những hình ảnh hấp dẫn của UEFA Nations League
			</a>
		</div>
		<div>
			<a href="#"><img src="https://cdn.tuoitre.vn/zoom/212_132/2018/10/17/photo1539780998570-153978099857124327077.jpg"></a>
			<a href="#">
				Tuyển Việt Nam tập buổi đầu tiên tại Hàn Quốc
			</a>
		</div>
		<div>
			<a href="#"><img src="https://cdn.tuoitre.vn/zoom/212_132/2018/10/17/photo1539729263023-15397292630241699837778.jpg"></a>
			<a href="#">
				Năm tệ hại nhất của bóng đá Đức
			</a>
		</div>
	</div>

	<hr style="margin: 0px;">
	<hr style="margin: 0px;">
	<hr style="margin: 0px;">

	<div style="font-size: 25px;/"><strong>Kinh doanh</strong></div>
	<div class="kinhdoanh">
		<div>
			<a href="#"><img src="https://cdn.tuoitre.vn/zoom/212_132/2018/10/15/photo1539583980780-1539583980780149038303.jpg"></a>
			<a href="#">
				Tại sao chúng ta lại bị kim cương thu hút?
			</a>
		</div>
		<div>
			<a href="#"><img src="https://cdn.tuoitre.vn/zoom/212_132/2018/10/18/photo1539824143088-15398241430881413601246.jpg"></a>
			<a href="#">
				Đến đậu nành vào tầm ngắm vì có cỏ kế đồng
			</a>
		</div>
		<div>
			<a href="#"><img src="https://cdn.tuoitre.vn/zoom/212_132/2018/10/18/photo1539835277593-1539835277630202729173.jpg"></a>
			<a href="#">
				Đại gia bất động sản rủ nhau lên sàn chứng khoán tìm vốn
			</a>
		</div>
	</div>

	<hr style="margin: 0px;">
	<hr style="margin: 0px;">
	<hr style="margin: 0px;">

	<div style="font-size: 25px;/"><strong>Khoa học</strong></div>
	<div class="khoahoc">
		<div>
			<a href="#"><img src="https://cdn.tuoitre.vn/zoom/212_132/2018/10/17/photo1539763314839-15397633148392071423531.jpg"></a>
			<a href="#">
				Đi tìm bí mật vị cay của ớt
			</a>
		</div>
		<div>
			<a href="#"><img src="https://cdn.tuoitre.vn/zoom/212_132/2018/10/17/photo1539741372855-15397413728561127115412.jpg"></a>
			<a href="#">
				Gần 900 học sinh tranh tài bắn tên lửa nước
			</a>
		</div>
		<div>
			<a href="#"><img src="https://cdn.tuoitre.vn/zoom/212_132/2018/10/16/photo1539654325887-1539654325887833357421.png"></a>
			<a href="#">
				'Điểm danh' những sinh vật cao nhất mọi thời đại
			</a>
		</div>
	</div>
	</div>

	<div class="Quangcao">
				
	</div>

</div>












<hr style="margin: 0px;">
<hr style="margin: 0px;">
<hr style="margin: 0px;">
