<!DOCTYPE html>
<html>
<head>
	<title>Đăng kí</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css">
	<style type="text/css">
		.Dangki{
			position: absolute;
			top: 35%;
			right: 30%;
		}
		body{
			background-repeat: no-repeat;
		}

	</style>
</head>

<body style="background-image:url('http://247travel.vn/vnt_upload/news/08_2017/VYnh_VYng_Ro.jpg');">
	<div class="Dangki">
		<form class="pure-form pure-form-aligned" method="post">
    <fieldset>
        <?php
            require('connect.php');
        ?>
        <?php
        if(isset($_POST['dk'])&&$_POST['dk']=="yes"){
            if(isset($_POST['submit'])){
                if(empty($_POST['username']) or empty($_POST['password']) or empty($_POST['password2']) or empty($_POST['email'])){
                    echo '<p style="color: red">Vui lòng không để trống </p>';
                } else{
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $password2 = $_POST['password2'];
                    $email = $_POST['email'];
                        if( strlen($username) <6 or strlen($password)<6){
                        echo '<p style="color: red">Tên Đăng Nhập và Mật khẩu phải nhiều hơn 6 kí tự </p>';
                    }
                    else{
                        if($password2 != $password){
                            echo '<p style="color: red">Nhập lại mất khẩu không đúng </p>';
                        }
                        else{
                            $sql = "select * from users where username='$username' ";
                            $query = mysqli_query($con,$sql);
                            $num = mysqli_num_rows($query);
                            if($num==0){
                                $sql2 = "INSERT INTO users(username,password,email) VALUES('$username','$password','$email')";
                                $them = mysqli_query($con,$sql2);
                                if($them){
                                    echo '<p style="color: blue">Đăng ký thành công </p>';
                                }else{
                                    echo '<p style="color: blue">Đăng ký không thành công </p>';
                                } 
                            }
                            else{
                                echo '<p style="color: red">Tên Đăng Nhập Đã Tồn Tại </p>';
                            }
                        }
                    }

                }
            }
        }else{
            echo '<p style="color: red">Xin bạn hãy đọc điều khoản & điều kiện </p>';
        }

        ?>
        <div class="pure-control-group">
            <label for="name">Tên đăng nhập</label>
            <input id="name" type="text" placeholder="Tên đăng nhập" name="username">
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="password">Mật khẩu</label>
            <input id="password" type="password" placeholder="Mật khẩu" name="password">
            <span class="pure-form-message-inline">*</span>
        </div>
        <div class="pure-control-group">
            <label for="password">Nhập lại mật khẩu</label>
            <input id="password" type="password" placeholder="Nhập lại mật khẩu" name="password2">
            <span class="pure-form-message-inline">*</span>
        </div>

        <div class="pure-control-group">
            <label for="email">Địa chỉ Email </label>
            <input id="email" type="email" placeholder="Địa chỉ email" name="email">
            <span class="pure-form-message-inline">*</span>
        </div>
        <div class="pure-controls">
            <label for="cb" class="pure-checkbox">
            <input id="cb" type="checkbox" name="dk" value="yes"> Tôi đã đọc điều khoản và điều kiện
            </label>

            <button type="submit" name="submit" class="pure-button pure-button-primary">Đăng ký
            </button>
        </div>
    </fieldset>
</form>
	</div>
</body>
</html>