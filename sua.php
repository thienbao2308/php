<?php
    include 'C:\xampp\htdocs\php\config.php';   
    $sql_sua="SELECT * FROM tbl_sanpham WHERE id='$_GET[id]' LIMIT 1 ";
    $query_sua_sanpham=mysqli_query($conn,$sql_sua);
    ?>
<p>Sửa sản phẩm</p>
<table border="1" width="50%" style="border-collapse: collapse;">
<div class="bang">
                <table style="width:100%" border="1" text-align:center>
                <?php    while($row=mysqli_fetch_array($query_sua_sanpham))
                {
                ?>

<form method="POST" action="xuly.php?id=<?php echo $row['id']?>" enctype="multipart/form-data">
<tr>

    <td></td>
    <td><input type="text" value="<?php echo $row['tensanpham']?> " name="tensanpham"></td>
</tr>
<tr>
    <td></td>
    <td><input type="text" value="<?php echo $row['masp']?> "  name="masp"></td>
</tr>
<tr>
    <td></td>
    <td><input type="text"   value="<?php echo $row['giasp']?> " name="giasp"></td>
</tr>

<tr>
    <td></td>
    <td><input type="file" name="hinhanh"><img src="upload/<?php echo $row['hinhanh'] ?>"width="150px"></td>
</tr>

<tr>
    <td></td>
    <td><textarea rows="5"  value="<?php echo $row['noidung']?> " name="noidung"></textarea></td>
</tr>

<tr>
<td colspan="2"><input onclick="sua()" type="submit" name="suasanpham" value="Sửa"></td>
</tr>
<?php
                }
?>
</form>
</table>
</div>
            <div class="but">
            <button type="button" onclick="location.href='lietke.php';" class="csw-btn-buttonXoa" >quản lý</button>
            </div>
            <br>
        </div>
        </div>
