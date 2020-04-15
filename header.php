
<div class="header">
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
	  				<?php
	  				error_reporting(0);
	  				$us1 = $_SESSION['username'];
	  				if (!isset($_SESSION['username'])) {
	 					echo '<div id="i2"><a href="Dangnhap.php" target="_bank"> Đăng nhập </a></div>';
					}else{
						if($_SESSION['username'] == 'admin123'){
							echo "Xin chào admin";
							echo "/<a href='logout.php'> Logout </a>";
						}else{
							echo "Xin chào $us1... ";
							echo "/<a href='logout.php'> Logout </a>";
						}

					}
					
					?>
	  				
	  				<div id="i3"><a href="Dangki.php" target="_bank"> Đăng kí </a></div>
	  				<div id="i3"><a href="#"> <img src="http://www.tdtu.edu.vn/themes/_logo/flag-en.png"> </a></div>
	  			</div>

	  			<div class="container-1">
	  				<form method="GET" action="search.php">
	  					<input type="text" name="ten" placeholder="Tìm kiếm...">
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

</div> 