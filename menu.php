<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <?php 
    include 'C:\xampp\htdocs\php\config.php';
    $sql_ad="SELECT *FROM tbl_sanpham";
    $query_sp=mysqli_query($conn,$sql_ad); 
    ?>
</head>
 
<body>

 <header>
    <input type="checkbox">
    <div class="menu-icon">
        <div class="menu-line">

        </div>
    </div>
    <div class="menu-item">
        <li><a href="">Trang chủ</a></li>
        <li><a href="">Về Chúng tôi</a></li>
        <li><a href="">Menu</a></li>
        <li><a href="">Liên Hệ</a></li>
        <li><a href="">Đánh Giá</a></li>   
    </div>
    <div class="hello">
        <h1></h1>
    </div>
    <ul class="product_list">
    <?php
    while ($row_ad=mysqli_fetch_array($query_sp)  ) 
{
    ?>
    <li>
        <a href="#">
            <img src="upload/<?php echo $row_ad['hinhanh']?>">
            <p>tên:<?php echo $row_ad['tensanpham'] ?></p>
            <h2>Mã :<?php echo $row_ad['masp']?></h2>
            <h1>Giá sp:<?php echo $row_ad['giasp']?></h1>
            <img src="upload/<?php echo $row_ad['hinhanh']?>">
            <h1>nội dung <?php echo $row_ad['noidung']?></h1>

        </li> 
    <?php
}
?>
 </ul> 
 </header>
 
</body>
</html>