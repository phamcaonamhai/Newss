<meta charset="utf-8">
<?php
	$userName = $_POST["Username"];
	$passWord = $_POST["Password"];
	$result =($userName == "admin" && $passWord=="123456") ? "Đăng Nhập Thành Công": "Đăng Nhập Thất Bại" ;
	echo "$result";
?>