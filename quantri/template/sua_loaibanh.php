<?php
include("header-admin.php");
if(!isset($_SESSION["quantri"]))
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}
?>
<!DOCTYPE	html	PUBLIC	"-//W3C//DTD	XHTML	1.0	Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php include("ketnoi.php");
$user_sua=$_REQUEST["user"]; //Nhận giá trị user từ link sửa của quantri.php
$sql="select * from khachhang where Maloai='".$user_sua."'";//chọn ra dòng thông tin của người dùng
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin khach hang ".mysqli_error($kn)); // chạy câu lệnh sql
echo	("<form	name='frmsua'	action='thuchien_sua.php'	method='post'	enctype='multipart/form- data'>");//mở form để hiển thị lại thông tin cũ của người dùng cần sửa
echo ("<table align='center' width='60%'>");
//hiển thị lại thông tin theo bảng
while ($row=mysqli_fetch_array($kq))

echo ("<tr>");
echo("<td>Username:	</td>	<td><input	type='text'	readonly='readonly'	name='tendn' value='".$row["username"]."'></td>");
echo ("</tr>");
echo ("<tr>");
echo ("<td>Họ tên: </td> <td><input type='text' name='hoten' value='".$row["hoten"]."'></td>");
echo ("<tr>");
echo ("<tr>");
echo	("<td>Email:	</td>	<td><input	type='text'	name='email' value='".$row["email"]."'></td>");
echo ("</tr>");
echo ("<tr>");
echo ("<td>Địa chỉ:  </td> <td><input type='text' name='diachi' value='".$row["diachi"]."'></td>"); echo ("</tr>");

?>
</table>
</body>
</html>
<?php
    include("footer_admin.php");
?>
