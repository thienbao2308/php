<?php
session_start();
include  ('C:\xampp\htdocs\php\config.php');    
if (isset($_POST['dangnhap'])){
    $taikhoan=$_POST['username'];
    $matkhau=$_POST['password'];
    $sql="SELECT *FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
    $row=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($row);
    if($count>0){
           $_SESSION["dangnhap"]=$taikhoan; 
           header("Location:lietke.php");

    }else{
        echo '<script>alert("Tài Khoản hoặc Mật Khẫu sai,Vui lòng nhập lại.")</script>';
        header("Location:login.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form action="" autocomplete="off" method="POST">
        <table border="1" class="table-login" style="text-align:center;border-collapse:collapse;">
            <tr>
                <td colspan="2"><h3>Đăng nhập Admin</h3></td>
            </tr>
            <tr>
                <td>Tài Khoản</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Mật Khẩu</td>
                <td><input type="text"  name="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="dangnhap" value="Đăng Nhập"></td>
            </tr>
        </table>
</form>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>
</html>