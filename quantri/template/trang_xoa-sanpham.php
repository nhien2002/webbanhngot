<?php session_start();
 if(!isset($_SESSION["quantri"]))
{
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
    </script>";
}
?>
<?php
if (isset($_GET['Masp'])) {
    include("ketnoi.php");
    $id = $_GET['Masp'];
    $sql_xoasp = "update sanpham set trangthai=0 WHERE Masp = $id";
    $kq = mysqli_query($kn, $sql_xoasp);

    if ($kq == TRUE) {
        echo "<script language=javascript>
        window.location='danhsach_sanpham.php';
        </script>";
    } else {
        echo "Lỗi: " . mysqli_error($kn);
    }

    mysqli_close($kn);
} else {
    echo "<script language=javascript>
    alert('ID không hợp lệ'); window.location='danhsach_sanpham.php';
    </script>";
}
?>