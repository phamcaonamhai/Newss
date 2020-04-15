<!DOCTYPE html>
<html>
<head>
	<title>Trang chi tiết</title>
</head>
<body>
	<meta charset="utf-8">
	<html lang="en-Us">
	<link rel="stylesheet" type="text/css" href="reset.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		 *{
  			box-sizing: border-content;
  			-moz-box-sizing: border-content;
  			-webkit-box-sizing: border-content;
		}

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

		.f-grid {
		  display: flex;
		  justify-content: space-between;
		  margin-left: -1rem;
		  flex-flow: row wrap;
		  width: 100%;
		}

		.f-grid-col {
		  flex: 1 0;
		  margin-left: 0rem;
		  margin-top: -1rem;
		  padding: 1.5rem;
		}
		#col1{
			
		}
		#col2{
			
		}
		#col3{
			
		}
		#content-mid a{
			color: black;
			text-decoration: none;
		}
		#content-mid{
			overflow: scroll;
			height: 500px;
		}
	</style>
</body>
</html>

<!--------Header------->
<?php 
	include "header.php";
?>

<!--------End-Header------->

<!----Lay du lieu trong database---->
<?php
	require('connect.php');
	$id  = $_GET["id"];
	$sql1 = "SELECT * FROM contentleft WHERE id=$id";
	$query1 = mysqli_query($con,$sql1);
	$num1  = mysqli_num_rows($query1);
	$row1 = mysqli_fetch_array($query1);
?>

<?php
	$id2  = $_GET["id"];
	$sql2 = "SELECT * FROM Thoisu WHERE id=$id2";
	$query2 = mysqli_query($con,$sql2);
	$num2  = mysqli_num_rows($query2);
	$row2 = mysqli_fetch_array($query2);
?>

<?php
	$id3  = $_GET["id"];
	$sql3 = "SELECT * FROM Chinhtri WHERE id=$id3";
	$query3 = mysqli_query($con,$sql3);
	$num3  = mysqli_num_rows($query3);
	$row3 = mysqli_fetch_array($query3);
?>

<?php
	$id4  = $_GET["id"];
	$sql4 = "SELECT * FROM Kinhte WHERE id=$id4";
	$query4 = mysqli_query($con,$sql4);
	$num4  = mysqli_num_rows($query4);
	$row4 = mysqli_fetch_array($query4);
?>

<?php
	$id5  = $_GET["id"];
	$sql5 = "SELECT * FROM Phapluat WHERE id=$id5";
	$query5 = mysqli_query($con,$sql5);
	$num5  = mysqli_num_rows($query5);
	$row5 = mysqli_fetch_array($query5);
?>

<?php
	$id6  = $_GET["id"];
	$sql6 = "SELECT * FROM Xahoi WHERE id=$id6";
	$query6 = mysqli_query($con,$sql6);
	$num6  = mysqli_num_rows($query6);
	$row6 = mysqli_fetch_array($query6);
?>

<?php
	$id7  = $_GET["id"];
	$sql7 = "SELECT * FROM Vanhoa WHERE id=$id7";
	$query7 = mysqli_query($con,$sql7);
	$num7  = mysqli_num_rows($query7);
	$row7 = mysqli_fetch_array($query7);
?>

<?php
	$id8  = $_GET["id"];
	$sql8 = "SELECT * FROM Khoagiao WHERE id=$id8";
	$query8 = mysqli_query($con,$sql8);
	$num8  = mysqli_num_rows($query8);
	$row8 = mysqli_fetch_array($query8);
?>

<?php
	$id9  = $_GET["id"];
	$sql9 = "SELECT * FROM Thethao WHERE id=$id9";
	$query9 = mysqli_query($con,$sql9);
	$num9  = mysqli_num_rows($query9);
	$row9 = mysqli_fetch_array($query9);
?>

<?php
	$id10  = $_GET["id"];
	$sql10 = "SELECT * FROM Quocphong WHERE id=$id10";
	$query10 = mysqli_query($con,$sql10);
	$num10  = mysqli_num_rows($query10);
	$row10 = mysqli_fetch_array($query10);
?>

<?php
	$id11  = $_GET["id"];
	$sql11 = "SELECT * FROM Anninh WHERE id=$id11";
	$query11 = mysqli_query($con,$sql11);
	$num11  = mysqli_num_rows($query11);
	$row11 = mysqli_fetch_array($query11);
?>

<?php
	$id12  = $_GET["id"];
	$sql12 = "SELECT * FROM Bandoc WHERE id=$id12";
	$query12 = mysqli_query($con,$sql12);
	$num12  = mysqli_num_rows($query12);
	$row12 = mysqli_fetch_array($query12);
?>

<?php
	$id13  = $_GET["id"];
	$sql13 = "SELECT * FROM Quocte WHERE id=$id13";
	$query13 = mysqli_query($con,$sql13);
	$num13  = mysqli_num_rows($query13);
	$row13 = mysqli_fetch_array($query13);
?>

<?php
	$id14  = $_GET["id"];
	$sql14 = "SELECT * FROM contentleft3 WHERE id=$id14";
	$query14 = mysqli_query($con,$sql14);
	$num14  = mysqli_num_rows($query14);
	$row14 = mysqli_fetch_array($query14);
?>


<!----End-Lay du lieu trong database---->

<!--------Content------->
<div class="f-grid">
    <div class="f-grid-col" id="col1">
    	<?php
	if(!isset ($_GET['page'])){
		?>
		    <?php 
				if($num1 > 0){	
			?>
			<span style="font-size: 40px;">
			 <?php echo $row1['tieude']?> 
			</span>
			<img src="<?php echo $row1['hinhanh']?>" width="800" height="auto" style="margin: 30px;">
			<p style="white-space: pre-line">
				<?php echo $row1['noidungdai']?>
			</p>
			<?php
				}
			?>
	<?php
	}else if($_GET['page']=='thoisu'){
	?>
			<?php 
				if($num2 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row2['tieude']?> 
				</span>
				<img src="<?php echo $row2['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row2['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='chinhtri'){
	?>
			<?php 
				if($num3 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row3['tieude']?> 
				</span>
				<img src="<?php echo $row3['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row3['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='kinhte'){
	?>
			<?php 
				if($num4 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row4['tieude']?> 
				</span>
				<img src="<?php echo $row4['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row4['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='phapluat'){
	?>
			<?php 
				if($num5 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row5['tieude']?> 
				</span>
				<img src="<?php echo $row5['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row5['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='xahoi'){
	?>
			<?php 
				if($num6 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row6['tieude']?> 
				</span>
				<img src="<?php echo $row6['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row6['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='vanhoa'){
	?>
			<?php 
				if($num7 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row7['tieude']?> 
				</span>
				<img src="<?php echo $row7['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row7['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='khoagiao'){
	?>
			<?php 
				if($num8 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row8['tieude']?> 
				</span>
				<img src="<?php echo $row8['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row8['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='thethao'){
	?>
			<?php 
				if($num9 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row9['tieude']?> 
				</span>
				<img src="<?php echo $row9['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row9['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='quocphong'){
	?>
			<?php 
				if($num10 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row10['tieude']?> 
				</span>
				<img src="<?php echo $row10['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row10['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='anninh'){
	?>
			<?php 
				if($num11 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row11['tieude']?> 
				</span>
				<img src="<?php echo $row11['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row11['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='bandoc'){
	?>
			<?php 
				if($num12 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row12['tieude']?> 
				</span>
				<img src="<?php echo $row12['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row12['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='quocte'){
	?>
			<?php 
				if($num13 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row13['tieude']?> 
				</span>
				<img src="<?php echo $row13['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row13['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}else if($_GET['page']=='contentleft3'){
	?>
			<?php 
				if($num14 > 0){	
			?>
				<span style="font-size: 40px;">
				 <?php echo $row14['tieude']?> 
				</span>
				<img src="<?php echo $row14['hinhanh']?>" width="800" height="auto" style="margin: 30px;">



				<p style="white-space: pre-line">
				<?php echo $row14['noidungdai']?>
			</p>
			<?php
				}
			?>
	

	<?php
	}
	?>
	
    </div>







    <div class="f-grid-col" id="col2">
    	<div style="height: 30px;">
        	<p style="text-align: center; background-color: grey; height: 30px;padding-top: 10px;">Xem nhiều nhất</p>
        </div>
        <br>
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


    </div>


    <div class="f-grid-col" id="col3">
    	<div style="">
    		<iframe src="https://adi.admicro.vn/adt/banners/nam2015/4043/min_html5/hiepnguyenxuan/2018_11_22/300x600_Vinfast(2)/300x600_Vinfast/300x600_Vinfast.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttp%253A%252F%252Fdocbao.vn%252F%26lsn%3D1543154448077%26ce%3D1%26lc%3D5%26cr%3D1543119410%26ui%3D7931194102884313478%26ii%3D1614507392%26bi%3D0%26cmpg%3D34866%26items%3D125923%26zid%3D23085%26cid%3D-1%26tp%3D11%26tpn%3D4%26cov%3D1%26pr%3D12624955176%26adc_cpa%3D1%26re%3Dhttps%253A%252F%252Fvinfast.vn%252Fvinfast-dong-loat-ra-mat-3-dong-san-pham-o-to-xe-may-dien-20181118111155055.htm%253Futm_source%253DAdmicro%2526utm_medium%253DAdx%2526utm_campaign%253DRa_mat_Vinfast_HCM%2526utm_content%253Ddocbao.vn&amp;admid=adnzone_23085_0_125923" width="300" height="600" frameborder="0" scrolling="no"></iframe>
    		<img src="//static.eclick.vn/uploads/source/2018/11/25/283243m30842446858358831192.png" style="width: 300px;height: 250px;top: -1px;left: -1px;position: relative;" class="eclick_img">
    		<img src="//static.eclick.vn/uploads/source/2018/11/16/1741cj89295242g7471727593l.gif" style="width: 300px;height: 250px;top: -1px;left: -1px;position: relative;" class="eclick_img">
    		<img alt="" class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" src="https://tpc.googlesyndication.com/simgad/1238048838273170533?sqp=4sqPyQQ7QjkqNxABHQAAtEIgASgBMAk4A0DwkwlYAWBfcAKAAQGIAQGdAQAAgD-oAQGwAYCt4gS4AV_FAS2ynT4&amp;rs=AOga4ql6_UjSy2ceWxE2dKYfBXARbqMhOQ">

    	</div>

    </div>
</div>

<!--------end-Content------->



<!--------Footer------->
<?php
 include "footer.php"; 
?>
<!--------end-Footer------->