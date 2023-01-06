<?php 
include 'C:\xampp\htdocs\php\config.php';    
$id=$_GET['id'];
$tenloaisp=$_POST['tensanpham'];
$masanpham=$_POST['masp'];
$giasp=$_POST['giasp'];
$hinhanh=$_FILES['hinhanh']['name'];
$hinhanh_time=time(). '_'.$hinhanh;
$hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
$noidung=$_POST['noidung'];

if(isset($_POST['them'])){
    $sql_them="INSERT INTO tbl_sanpham(tensanpham,masp,giasp,hinhanh,noidung)
     VALUE('".$tenloaisp."','".$masanpham."','".$giasp."','".$hinhanh."','".$noidung."')";
      if (empty($tenloaisp) || empty($masanpham) || empty($giasp) ||empty($noidung)) {
        header('Location:lietke.php');
        return false;
        echo '<script> alert("vui lòng nhập lại");</script>';
    }
     mysqli_query($conn,$sql_them);
     move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
     header('Location:lietke.php');
}
elseif(isset($_POST['suasanpham']))
{
    if($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh_time);
        $sql_update ="UPDATE tbl_sanpham SET tensanpham='".$tenloaisp."',masp='".$masanpham."',giasp='".$giasp."',hinhanh='".$hinhanh."',noidung='".$noidung."' WHERE id='$_GET[id]'";
        $sql="SELECT * FROM tbl_sanpham WHERE id='$_GET[id]'LIMIT 1";
        $query=mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($query))
        {
            
            unlink('upload/'.$row['hinhanh']);
        }
        
}

else{
    if (empty($tenloaisp) || empty($masanpham) || empty($giasp) ||empty($noidung)) {
        header('Location:lietke.php');
        return false;
        echo '<script> alert("vui lòng nhập lại");</script>';
    }else
    $sql_update ="UPDATE tbl_sanpham SET tensanpham='".$tenloaisp."',masp='".$masanpham."',giasp='".$giasp."',noidung='".$noidung."' WHERE id='$_GET[id]'";
    move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);

}
mysqli_query($conn,$sql_update);
header('Location:lietke.php');
}else{
    $id=$_GET['id'];
    $sql="SELECT * FROM tbl_sanpham WHERE id='$id'";
    $query=mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query))
    {
        
        unlink('upload/'.$row['hinhanh']);
    }
    $sql_xoa="DELETE  FROM tbl_sanpham WHERE id='$id'";

    mysqli_query($conn,$sql_xoa);
    header('Location:lietke.php');
}

?>