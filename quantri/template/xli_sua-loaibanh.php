<?php session_start();
 if(!isset($_SESSION["nguoiquantri"]))// kiểm tra quyền
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
<?php
include("ketnoi.php");// chèn file kết nối (bắt buộc)
//Nhận dữ liệu từ file sua.php, trong $_POST[""] là name của các thành phần form trong file sua.php
$ml=$_POST["maloai"];
$tl=$_POST["tenloai"];
$tt=$_POST["trangthai"];
//kiểm tra người dùng có chọn vào ảnh mới hay không, nếu có thì thực hiện khối lệnh trong if, ngược lại (người dùng không muốn thay đổi ảnh đại diện) thì thực hiện khối lệnh trong else if($_FILES["hinh"]["name"]!="")
{
$duongdan="HINHANH/"; /*lưu ý: thư mục này phải được tạo trước trong thư mục chứa bài tập này*/

$duongdan=$duongdan.basename($_FILES["hinh"]["name"]); /*đường dẫn đến file cần up lên, cái này dùng để lưu vào csdl*/
$file_tam=$_FILES["hinh"]["tmp_name"];/*muốn đưa file từ máy người dùng lên server phải thông qua file tạm này*/
move_uploaded_file($file_tam,$duongdan);//di chuyển file tạm lên máy chủ
//Câu lệnh sửa
$sql_1="update	khachhang	set	maloai='".$ml."',	tenbanh='".$tb."',	trangthai=".$tt.", hinhdaidien='".$duongdan."' where Maloai='".$ml."'";
$kq_1=mysqli_query($kn,$sql_1) or die ("Không thể xuất thông tin khach hang ".mysqli_error($kn));
echo ("<script language=javascript>
alert('Sửa thành công 1');
window.location='quantri.php';
</script> ");
}
else
{

$hc=$_POST["hinhcu"];
$sql="update	khachhang	set		maloai='".$ml."',	tenbanh='".$tb."',	trangthai=".$tt.", hinhdaidien='".$duongdan."' where Maloai='".$ml."'";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin khach hang ".mysqli_error($kn));
echo ("<script language=javascript>
alert('Sửa thành công ');
window.location='quantri.php';
</script> ");
}
?>


</table>
</body>
</html>
