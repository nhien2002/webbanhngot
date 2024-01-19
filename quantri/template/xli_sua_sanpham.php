<?php session_start();
if(!isset($_SESSION["quantri"]))// kiểm tra quyền
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
<?php
include("ketnoi.php");// chèn file kết nối (bắt buộc)
$msp=$_POST["txtIDSP"];
$tsp=$_POST["txtTenSP"];
$ght=$_POST["txtGia"];
$ml=$_POST["slLBanh"];
$tp=$_POST["txtaTPhan"];
//kiểm tra người dùng có chọn vào ảnh mới hay không, nếu có thì thực hiện khối lệnh trong if, ngược lại (người dùng không muốn thay đổi ảnh đại diện) thì thực hiện khối lệnh trong else if($_FILES["fileHinhBanh"]["name"]!="")
if($_FILES["fileHinhBanh"]["name"]!="")
{
    $duongdan="img/hinhanh/"; /*lưu ý: thư mục này phải được tạo trước trong thư mục chứa bài tập này*/
    $duongdan=$duongdan.basename($_FILES["fileHinhBanh"]["name"]); /*đường dẫn đến file cần up lên, cái này dùng để lưu vào csdl*/
    $file_tam=$_FILES["fileHinhBanh"]["tmp_name"];/*muốn đưa file từ máy người dùng lên server phải thông qua file tạm này*/
    $duongdanthat='../../img/hinhanh/'.basename($_FILES["fileHinhBanh"]["name"]);
    move_uploaded_file($file_tam,$duongdanthat);//di chuyển file tạm lên máy chủ
    //Câu lệnh sửa
    $sql_1="update sanpham set	Tensp='".$tsp."',	Hinhbanh='".$duongdan."', Giahientai=".$ght.", Maloai=".$ml.", Thanhphan='".$tp."' where Masp=".$msp;
    $kq_1=mysqli_query($kn,$sql_1) or die("lỗi: ". mysqli_error($kn));

    echo ("<script language=javascript>
    alert('Đổi ảnh sản phẩm và Sửa thành công'); window.location='danhsach_sanpham.php';
    </script> ");
}
else
{
    $hc=$_POST["hinhcu"];
    $sql="update sanpham	set	Tensp='".$tsp."',	Hinhbanh='".$hc."', Giahientai=".$ght.", Maloai=".$ml.", Thanhphan='".$tp."' where Masp=".$msp;
    $kq=mysqli_query($kn,$sql) or die("lỗi: ". mysqli_error($kn)); 
    echo ("<script language=javascript>
    alert('Sửa thành công'); window.location='danhsach_sanpham.php';
    </script> ");
}
?>


</table>
</body>
</html>
