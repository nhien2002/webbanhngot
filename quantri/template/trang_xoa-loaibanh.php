<?php session_start();
 if(!isset($_SESSION["quantri"]))
{
    echo "<script language=javascript>
    alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
    </script>";
}
?>
<?php
if (isset($_GET['ml'])) {
    include("ketnoi.php");
    $maloai = $_GET['ml'];
    //Kiểm tra sản phẩm có tồn tại trong loại hay không
    $sql="select * from sanpham where Maloai=".$maloai." and trangthai=1";
    $kq=mysqli_query($kn,$sql);
    if(mysqli_num_rows($kq)>0){
        echo "<script language=javascript>
        alert('Không thể xóa loại bánh này vì còn sản phẩm đang kinh doanh'); 
        window.location='danhsach_loaisanpham.php';
        </script>";
    }
    else{
        $sql_xoaloai = "update loaibanh set trangthai=0 WHERE Maloai = $maloai";
        $kq_xoaloai = mysqli_query($kn, $sql_xoaloai);

        if ($kq_xoaloai == TRUE) {
            echo "<script language=javascript>
            window.location='danhsach_loaisanpham.php';
            </script>";
        } else {
            echo "Lỗi: " . mysqli_error($kn);
        }

    mysqli_close($kn);
    }
    
} else {
    echo "<script language=javascript>
    alert('ID không hợp lệ'); window.location='danhsach_loaisanpham.php';
    </script>";
}
?>