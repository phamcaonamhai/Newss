<!DOCTYPE html>
<html>
<head>
    <title>Thêm dữ liệu</title>
    <meta charset="utf-8">
</head>
<body>
<h3 style="color: red">
    Thêm Nội Dung Vào Cột Giữa Của Trang Web 
</h3>
<form action="" method="post">
    <table>
        <tr>
            <th>Tiêu đề:</th>
            <td><input type="text" name="title" value="" style="width: 500px; height: 100px"></td>
        </tr>
    </table>
    <button type="submit">Gửi</button>
</form>

<?php
require('connect.php');

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$title = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["title"])) { $title = $_POST['title']; }
    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO contentmid (content) VALUES ('$title')";
    if (mysqli_query($con, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
}

//Đóng database
mysqli_close($con);
?>
</body>
</html>