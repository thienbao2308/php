<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="them.css">
    <title>Document</title>
</head>
<body>

<table border="1" width="50%" style="border-collapse: collapse;">

<form action="xuly.php" method="post" enctype="multipart/form-data">
<tr>
    <td>Tên Sản Phẩm</td>
    <td><input type="text" name="tensanpham"></td>
</tr>
<tr>
    <td>Mã sản phẩm</td>
    <td><input type="text" name="masp"></td>
</tr>
<tr>
    <td>Giá Sản Phẩm</td>
    <td><input type="text" name="giasp" ></td>
</tr>

<tr>
    <td>Hình ảnh</td>
    <td><input type="file" name="hinhanh"></td>
</tr>

<tr>
    <td>Nội Dung</td>
    <td><textarea rows="5"  name="noidung"></textarea></td>
</tr>

<tr>
    <td class="cuoi" colspan="2"><input type="submit" name="them" value="Thêm Sản Phẩm"></td>
</tr>
</form>
</table>

</body>
</html>

