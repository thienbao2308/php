<?php
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli("localhost","root","","tbl_sanpham");
if($conn->connect_error){
    die("Kết nối thất bại:".$conn->connect_error);

}?>