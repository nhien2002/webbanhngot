<?php session_start();
 if(!isset($_SESSION["nguoiquantri"]))
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='dangkyQT.php';
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
$sql="select * from nguoi_dung where sdt='".$user_sua."'";//chọn ra dòng thông tin của người dùng được chọn để sửa
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error($kn)); // chạy câu lệnh sql
 
echo	("<form	name='frmsua'	action='thuchien_sua.php'	method='post'	enctype='multipart/form- data'>");//mở form để hiển thị lại thông tin cũ của người dùng cần sửa
echo ("<table align='center' width='60%'>");
//hiển thị lại thông tin theo bảng
while ($row=mysqli_fetch_array($kq))
{
echo ("<tr>");
echo	("<td>Username:	</td>	<td><input	type='text'	readonly='readonly'	name='tendn' value='".$row["username"]."'></td>");
echo ("</tr>");
echo ("<tr>");
echo ("<td>Họ tên: </td> <td><input type='text' name='hoten' value='".$row["hoten"]."'></td>"); echo ("</tr>");
echo ("<tr>");
echo ("<td>Giới tính: </td>"); if($row["gioitinh"]==0)
echo("<td><input	type='radio'	name='gioitinh'	value='0'	checked='checked'	>Nam &nbsp;&nbsp; <input type='radio' name='gioitinh' value='1' > Nữ</td>");
else
echo ("<td><input type='radio' name='gioitinh' value='0'	>Nam &nbsp;&nbsp; <input type='radio' name='gioitinh' value='1' checked='checked' > Nữ</td>");
echo ("</tr>");
echo ("<tr>");
echo ("<td>Quốc gia </td> ");

//hiển thị lại hình cũ nếu có, đồng thời cho phép người dùng đổi hình đại diện nếu muốn (chọn ảnh
echo	("<td>Hình	đại	diện:	</td><td><img	src='".$row["hinhdaidien"]."'	height='50' width='50'><input type='hidden' name='hinhcu' value='".$row["hinhdaidien"]."'>Ảnh mới:<input type='hidden' name='MAX_FILE_SIZE' value='1000000' /> <input type='file' name='hinh' value=''></td>");
echo ("</tr>");
echo ("<tr>");
echo ("<td><input type='submit' name='suatt' value='Sửa thông tin'></td>"); echo ("<td><input type='reset' name='huybo' value='Hủy bỏ'></td>");
echo ("</tr>");
}
echo ("</table>");
echo ("</form>");
?>
</table>
</body>
</html>
