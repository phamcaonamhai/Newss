<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tin tức - Đọc báo online</title>
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


 <!--------Header------->
<?php
include "header.php"
?> 
<!-------- End-header------->

	<div style="background-color:#cccccc; width: 110px;margin-top: 10px; font-size: 20px; padding: 5px;color: #800000"> 
		<?php
			if(!isset ($_GET['page'])){
				echo "Trang chủ";
			}else{
				if($_GET['page']=='thoisu') echo "Thời sự";
				if($_GET['page']=='chinhtri') echo "Chính trị";
				if($_GET['page']=='kinhte') echo "Kinh tế ";
				if($_GET['page']=='phapluat') echo "Pháp luật";
				if($_GET['page']=='xahoi') echo "Xã hội ";
				if($_GET['page']=='vanhoa') echo "Văn hoá";
				if($_GET['page']=='khoagiao') echo "Khoa giáo";
				if($_GET['page']=='thethao') echo "Thế thao";
				if($_GET['page']=='quocphong') echo "Quốc phòng";
				if($_GET['page']=='anninh') echo "An ninh";
				if($_GET['page']=='bandoc') echo "Bạn đọc";
				if($_GET['page']=='quocte') echo "Quốc tế";
			}
		?>

	</div>



<div class="content"> <!--------content--------->
	<?php
	if(!isset ($_GET['page'])){
		include 'Trangchu.php';
	}else{
		if($_GET['page']=='thoisu') include 'Thoisu.php';
		if($_GET['page']=='chinhtri') include 'Chinhtri.php';
		if($_GET['page']=='kinhte') include 'Kinhte.php';
		if($_GET['page']=='phapluat') include 'Phapluat.php';
		if($_GET['page']=='xahoi') include 'Xahoi.php';
		if($_GET['page']=='vanhoa') include 'Vanhoa.php';
		if($_GET['page']=='khoagiao') include 'Khoagiao.php';
		if($_GET['page']=='thethao') include 'Thethao.php';
		if($_GET['page']=='quocphong') include 'Quocphong.php';
		if($_GET['page']=='anninh') include 'Anninh.php';
		if($_GET['page']=='bandoc') include 'Bandoc.php';
		if($_GET['page']=='quocte') include 'Quocte.php';
	}





	?>
</div>
  <!---------End-content---------->


<!---------Footer---------->
<?php
	include "footer.php" 
?>
<!---------End-Footer---------->


</body>
</html>
