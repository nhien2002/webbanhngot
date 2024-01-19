
<?php
    include("ketnoi.php");

// Xử lý khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tenLoai = $_POST["tenLoai"];

    // Thêm loại bánh vào bảng loaibanh
    $sql = "INSERT INTO loaibanh (Tenloai, trangthai) VALUES ('$tenLoai', 1)";
    $kq = mysqli_query($kn, $sql);
    if ($kq === TRUE) {
        echo ("<script language=javascript>
        alert('Thêm thành công'); window.location='danhsach_loaisanpham.php'
        </script> ");
    } else {
        echo "Lỗi: " . mysqli_error($kn);
    }
}

// Đóng kết nối CSDL
mysqli_close($kn);
?>