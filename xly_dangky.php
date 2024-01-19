<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
<?php
include("ketnoi.php");

$SDT=$_POST["txtSDT"];
$Password =md5($_POST["textpassword"]);
$Diachi=$_POST["textDiachi"];
$Khachang=$_POST["textkhachhang"];
$sql="select* from khachhhang where Sdt='".$SDT."'";
$kq=mysqli_query($kn,$sql) or die ("lỗi: ".mysqli_error($kn));
if(mysqli_num_rows($kq)>0){
    echo("<script language='javascript'>
        alert('Đã có người dùng số điện thoại này');
        window.location='dangky.php';
        </script>");
}
else{
    $sql2="insert into khachhhang values('".$SDT."', '".$Password."', '".$Khachang."','".$Diachi."')";
    $kq2=mysqli_query($kn,$sql2);
    echo("<script language='javascript'>
        alert('Đăng ký thành công');
        window.location='dangnhap.php';
        </script>");
}
?>
</body>
</html>
