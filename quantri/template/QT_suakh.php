<?php
include("header_admin.php");
if(!isset($_SESSION["quantri"]))
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}
?>

<<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> SỬA KHÁCH HÀNG </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item"><a href="danhsach_khachhang.php">Danh sách khách hàng</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sửa khách hàng</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             <?php
                $makh=$_REQUEST["Makh"];
                include("ketnoi.php");
                $sql1="SET @row_number = 0";
                mysqli_query($kn,$sql1);

                $sql2="SELECT * FROM (
                    SELECT (@row_number:=@row_number + 1) AS SoThuTu, khachhhang.*
                    FROM khachhhang
                    ORDER BY Tenkhachhang ASC
                ) AS BangSapXepTheoTen
                WHERE SoThuTu =".$makh;

                $kq1=mysqli_query($kn,$sql2);
                $row=mysqli_fetch_array($kq1);
             ?>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">THÔNG TIN KHÁCH HÀNG </h4>
                    <div class="table-responsive">
                        <form action='xli_sua_khachhang.php' name='frmSuaKH' method='post' enctype='multipart/form-data'>
                          <table class="table table-bordered">
                          <?php
                            echo"<tr>";
                              echo"<th>Số thứ tự</th>";
                              echo"<td><input type='text' name='txtMakh' value='".$makh."' readonly='readonly'></td>";
                            echo"</tr>";
                            echo"<tr>";
                              echo"<th>Tên khách hàng</th>";
                              echo"<td><input type='text' name='txtTenkh' value='".$row["Tenkhachhang"]."'></td>";
                            echo"</tr>";
                            echo"<tr>";
                              echo"<th>Địa chỉ</th>";
                              echo"<td><input type='text' name='txtDiachi' value='".$row["Diachi"]."'></td>";
                            echo"</tr>";
                            echo"<tr>";
                              echo"<th>Số điện thoại</th>";
                              echo"<td><input type='text' name='txtSdt' value='".$row["Sdt"]."'></td>";
                            echo"</tr>";
                            echo"<tr>";
                              echo"<td colspan='2' align='center'><input class='edit btn btn-primary' type='submit' value='Sửa' name='sbmSua'>";
                            echo"</tr>";
                          ?>
                          </table>
                        </form>
                    </div>
                  </div>
                </div>
              </div>




            </div>
          </div>
          <!-- content-wrapper ends -->

<?php
include("footer_admin.php");
?>