<html>
    <head>
    </head>
    <?php
    include 'C:\xampp\htdocs\php\config.php';   
    $sql_lietke_sp="SELECT * FROM tbl_sanpham ";
    $query_lietke_sanpham=mysqli_query($conn,$sql_lietke_sp);
    ?>
     <link rel="stylesheet" type="text/css" href="menustyle.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <?php
    ?>
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
    
 </header>
 <body style="        background:url(images/thumb1-1200x676-28.jpg);
 background-size: cover;
        background-repeat: no-repeat;        background-position: center;
">
 <div id="main">
        <h1 id="ha">Sản Phẩm</h1>
        <div class="but">
            <button type="button" onclick="location.href='them.php';" class="csw-btn-buttonThem" >Thêm</button>
            <button type="button" onclick="location.href='lietketin.php';" class="csw-btn-buttonThem" >Quản lý tin</button>
            </div>
            <div class="bang">
                <table style="width: 100%" border="1" text-align:center>
                <form method="POST" action="xuly.php" enctype="multipart/form-data">
                    <tr>
                        <th>Stt</th>
                        <th>tên món ăn</th>
                        <th>mã món ăn</th>
                        <th>giá món ăn</th>
                        <th>Hình Ảnh</th>
                        <th>Miêu Tả</th>
                        <th>Quản lý</th>
                    </tr>
                    <?php
                    $i=0;
                    while($row=mysqli_fetch_array($query_lietke_sanpham))
                    {
                        $i++;
                    
                    ?>
                    <tr>
            <td><?php echo $i?></td>
            <td><?php echo $row['tensanpham'] ?></td>
            <td> :<?php echo $row['masp']?></td>
            <td>:<?php echo $row['giasp']?></td>
            <td><img src="upload/<?php echo $row['hinhanh']?>"width="150px"></td>
            <td> <?php echo $row['noidung']?></td>
            <td>
                            <a href="sua.php?id=<?php echo $row['id']?>">Sửa</a>
                            <a onclick="return Del('<?php echo $row['tensanpham'];?>')" href="xuLy.php?id=<?php echo $row['id']?>">Xóa</a>
            </td>
                    </tr>
                    <?php 
                    }
                    ?>
</body>
</html>
   