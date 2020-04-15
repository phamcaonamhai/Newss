<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Đăng Nhập</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700" rel="stylesheet">
<!-- //web-fonts -->
</head>
<body>
		<!--header-->
		<div class="header-w3l">
			<h1>Đăng nhập</h1>
		</div>
		<!--//header-->
		<!--main-->
		<div class="main-w3layouts-agileinfo">
	           <!--form-stars-here-->
						<div class="wthree-form">
							
							<form method="post">
								<?php
							 	require('connect.php');

							 	if(isset($_POST['submit'])){
							 		if(empty($_POST['username']) or empty($_POST['password'])){
							 			echo '<p style="color: red">Vui lòng không để trống </p>';
							 		}else{
							 			$username = $_POST['username'];
							 			$password = $_POST['password'];
							 			$sql = "select * from users where username='$username' and password='$password'";
							 			$query = mysqli_query($con,$sql);
							 			$num = mysqli_num_rows($query);
							 			if($num==0){
							 				echo '<p style="color: red"> Username hoặc password không đúng</p>';
							 			}
			
							 			else{
							 				$_SESSION['username'] = $username;
							 				header('location:index.php');
							 			}
							 		}
							 	}
								?>
								<div class="form-sub-w3">
									<input type="text" name="username" placeholder="Tên đăng nhập" required="" />
								<div class="icon-w3">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div>
								</div>
								<div class="form-sub-w3">
									<input type="password" name="password" placeholder="Mật khẩu" required="" />
								<div class="icon-w3">
									<i class="fa fa-unlock-alt" aria-hidden="true"></i>
								</div>
								</div>
								<label class="anim">
								<input type="checkbox" class="checkbox">
									<span>Nhớ mật khẩu</span> 
									<a href="#">Quên mật khẩu</a>
								</label> 
								<div class="clear"></div>
								<div class="submit-agileits">
									<input type="submit" value="Đăng nhập" name="submit">
								</div>
							</form>

						</div>
				<!--//form-ends-here-->

		</div>
</body>
</html>