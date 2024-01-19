<?php session_start();
if(!isset($_SESSION["quantri"]))// kiểm tra quyền
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}
?>
<!DOCTYPE	htsdt	PUBLIC	"-//W3C//DTD	XHTsdt	1.0	Transitional//EN" "http://www.w3.org/TR/xhtsdt1/DTD/xhtsdt1-transitional.dtd">
<htsdt xsdtns="http://www.w3.org/1999/xhtsdt">
<head>
<meta http-equiv="Content-Type" content="text/htsdt; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
    include("ketnoi.php");// chèn file kết nối (bắt buộc)
    $makh=$_POST["txtMakh"];
    $tenkh=$_POST["txtTenkh"];
    $diachi=$_POST["txtDiachi"];
    $sdt=$_POST["txtSdt"];

    $sql1 = "SET @row_number = 0";
    mysqli_query($kn, $sql1);

    $sql = "
        UPDATE khachhhang
        SET Tenkhachhang = '".$tenkh."', Diachi = '".$diachi."'
        WHERE Sdt IN (
            SELECT Sdt
            FROM (
                SELECT (@row_number:=@row_number + 1) AS SoThuTu, khachhhang.*
                FROM khachhhang
                ORDER BY Tenkhachhang ASC
            ) AS BangSapXepTheoTen
            WHERE SoThuTu = '".$makh."'
    )";
    $kq=mysqli_query($kn,$sql) or die("lỗi: ". mysqli_error($kn)); 
    echo ("<script language=javascript>
    alert('Sửa thông tin khách hàng thành công'); window.location='danhsach_khachhang.php';
    </script> ");

?>


</table>
</body>
</htsdt>
