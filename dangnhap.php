<?php
$u=$_POST['username'];
$p=$_POST['password'];
$db=mysqli_connect("localhost","root","","dangnhp");
$sql = "select *from user where username='".$u."' and password='".$p."'limit1";
if(mysqli_num_rows($rs)>0){
    echo "Dang nhap thanh cong";}

else{
    echo"Dang nhap khong thanh cong";}
?>