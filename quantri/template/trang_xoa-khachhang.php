<?php session_start();
 if(!isset($_SESSION["quantri"]))
{
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
    </script>";
}
?>
<?php
if (isset($_GET['Makh'])) {
    include("ketnoi.php");
    $makh = $_GET['Makh'];
    
    $sql1 = "SET @row_number = 0";
    mysqli_query($kn, $sql1);

    $sql = "
        delete from khachhhang
        WHERE Sdt IN (
            SELECT Sdt
            FROM (
                SELECT (@row_number:=@row_number + 1) AS SoThuTu, khachhhang.*
                FROM khachhhang
                ORDER BY Tenkhachhang ASC
            ) AS BangSapXepTheoTen
            WHERE SoThuTu = '".$makh."'
    )";
    $kq = mysqli_query($kn, $sql);

    if ($kq == TRUE) {
        echo "<script language=javascript>
        window.location='danhsach_khachhang.php';
        </script>";
    } else {
        echo "Lỗi: " . mysqli_error($kn);
    }

    mysqli_close($kn);
} else {
    echo "<script language=javascript>
    alert('Không hợp lệ'); window.location='danhsach_khachhang.php';
    </script>";
}
?>