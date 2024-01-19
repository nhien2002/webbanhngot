
<?php
    include("ketnoi.php");

// Xử lý khi form được submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tsp = $_POST["txtTenSP"];
    $lsp=$_POST["slLBanh"];
    $tp=$_POST["txtaTPhan"];
    $ght=$_POST["txtGia"];
    if($_FILES["fileHinhBanh"]["name"]!="") //nếu có hình
    {
        $duongdan="img/hinhanh/"; /*lưu ý: thư mục này phải được tạo trước trong thư mục chứa bài tập này*/
        $duongdan=$duongdan.basename($_FILES["fileHinhBanh"]["name"]); /*đường dẫn đến file cần up lên, cái này dùng để lưu vào csdl*/
        $file_tam=$_FILES["fileHinhBanh"]["tmp_name"];/*muốn đưa file từ máy người dùng lên server phải thông qua file tạm này*/
        $duongdanthat='../../img/hinhanh/'.basename($_FILES["fileHinhBanh"]["name"]); // đường dẫn để admin đẩy file lên server
        move_uploaded_file($file_tam,$duongdanthat);//di chuyển file tạm lên máy chủ
        //Câu lệnh thêm
        $sql_1="insert into sanpham(Tensp, Hinhbanh, Giahientai, Maloai, Thanhphan) values('".$tsp."','".$duongdan."',".$ght.",".$lsp.", '".$tp."')";
        $kq_1=mysqli_query($kn,$sql_1) or die("lỗi: ". mysqli_error($kn));
        if ($kq_1 == TRUE) {
            echo ("<script language=javascript>
                alert('Thêm thành công'); window.location='danhsach_sanpham.php';
                </script> ");
        } else {
            echo "Lỗi: " . mysqli_error($kn);
        }  
    }
    else{ // nếu không có hình
        $sql_1="insert into sanpham(Tensp, Giahientai, Maloai, Thanhphan) values('".$tsp."',".$ght.",".$lsp.", '".$tp."')";
        $kq_1=mysqli_query($kn,$sql_1) or die("lỗi: ". mysqli_error($kn));
        if ($kq_1 == TRUE) {
            echo ("<script language=javascript>
                alert('Thêm thành công'); window.location='danhsach_sanpham.php';
                </script> ");
        } else {
            echo "Lỗi: " . mysqli_error($kn);
        }  
    }



}

// Đóng kết nối CSDL
mysqli_close($kn);
?>