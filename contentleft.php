<!DOCTYPE html>
<html>
<head>
    <title>Thêm dữ liệu</title>
    <meta charset="utf-8">
</head>
<body>
<h3 style="color: red">
    Thêm Nội Dung Vào Cột Trái Của Trang Web 
</h3>
<form action="" method="post">
    <table>
        <tr>
            <th>Link Hình ảnh:</th>
            <td><input type="text" name="hinhanh" value="" style="width: 400px; height: 50px"></td>
            <th>Tiêu đề:</th>
            <td><input type="text" name="title" value="" style="width: 400px; height: 50px"></td>
            <th>Nội dung:</th>
            <td><input type="text" name="noidung" value="" style="width: 400px; height: 50px"></td>
        </tr>
    </table>
    <h4> Nội dung dài: </h4>
    <textarea type="text" name="noidungdai" value="" style="width: 1000px; height: 500px"> </textarea>
    <br>
    <button type="submit">Gửi</button>
</form>

<?php
require('connect.php');

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$title = "";
$hinhanh = "";
$noidung = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST["hinhanh"])) { $hinhanh = $_POST['hinhanh']; }
    if(isset($_POST["title"])) { $title = $_POST['title']; }
    if(isset($_POST["noidung"])) { $noidung = $_POST['noidung']; }
    if(isset($_POST["noidungdai"])) { $noidungdai = $_POST['noidungdai']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO contentleft (hinhanh, tieude, noidung, noidungdai)
    VALUES ('$hinhanh','$title','$noidung','$noidungdai')";

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