<?php session_start();
 ?>
<!DOCTYPE	html	PUBLIC	"-//W3C//DTD	XHTML	1.0	Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

include("../ketnoi.php");
$tendangnhap=$_POST["txtTDNhap"];
$pass=md5($_POST["pswMKhau"]);
$sql="select * from admin  where user_admin='".$tendangnhap ."' and pass_admin ='". $pass."'"; // câu lệnh SQL-> kiểm tra tên đăng nhập và mật khẩu có trùng với tài khoản nguoi_dung trong csdl không
$kq=mysqli_query($kn, $sql) or die ("Không thể truy vấn thông tin quan trị".mysqli_error($kn));// thực thi câu lệnh SQL if (mysql_fetch_array($kq))
if(mysqli_fetch_array($kq)){
    $_SESSION["quantri"]=$tendangnhap; 
    echo ("<script language=javascript> 
        alert('Đăng nhập thành công');
        window.location='template/index.php';
    </script> ");
}
else
{
        echo ("<script language=javascript> 
            alert('đăng nhập thất bại');
            window.location='index.php';
            </script> ");
    }


?>
</body>
</html>
