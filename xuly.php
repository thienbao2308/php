<?php 
include 'C:\xampp\htdocs\php\config.php';    

$tenloaisp=$_POST['tensanpham'];
$masanpham=$_POST['masp'];
$giasp=$_POST['giasp'];
$noidung=$_POST['noidung'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
if(isset($_POST['them'])){
    $sql_them="INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung)
     VALUE('".$tenloaisp."','".$masanpham."','".$giasp."','".$hinhanh."','".$noidung."')";
     mysqli_query($conn,$sql_them);
     move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
     header('Location:menu.php');
}
elseif(isset($_POST))
{}
?>