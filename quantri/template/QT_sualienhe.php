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
              <h3 class="page-title"> SỬA LIÊN HỆ </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item"><a href="danhsach_lienhe.php">Danh sách liên hệ</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Sửa liên hệ</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             <?php
                $malh=$_REQUEST["Malh"];
                include("ketnoi.php");
                $sql1="select * from lienhe where Idlienhe=".$malh;
                $kq1=mysqli_query($kn,$sql1);
                $row=mysqli_fetch_array($kq1);
             ?>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">THÔNG TIN LIÊN HỆ </h4>
                    <div class="table-responsive">
                        <form action='xli_sua_lienhe.php' name='frmSualh' method='post' enctype='multipart/form-data'>
                          <table class="table table-bordered">
                          <?php
                            echo"<tr>";
                              echo"<th>Mã liên hệ</th>";
                              echo"<td><input type='text' name='txtIDlh' value='".$row["Idlienhe"]."' readonly='readonly'></td>";
                            echo"</tr>";
                            echo"<tr>";
                              echo"<th>Số điện thoại liên hệ</th>";
                              echo"<td><input type='text' name='txtSdtlh' value='".$row["Sdtlienhe"]."'></td>";
                            echo"</tr>";                           
                            echo"<tr>";
                              echo"<th>Nội dung liên hệ</th>";
                              echo"<td><textarea name='txtalh' cols='80' rows='20'>".$row["Noidunglienhe"]."</textarea></td>";
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