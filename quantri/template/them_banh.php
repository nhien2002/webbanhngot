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
              <h3 class="page-title"> THÊM BÁNH </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Thêm bánh</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">THÊM BÁNH MỚI</h4>
                    <form method="post" action="xuly_them_banh.php" name="frmThemBanh" enctype="multipart/form-data">
                      <table class="table table-bordered">
                        <tr>
                          <th>Tên sản phẩm</th>
                          <td><input type="text" name="txtTenSP" required></td>
                        </tr>
                        <tr>
                          <th>Bánh thuộc loại</th>
                          <td><select name="slLBanh">
                              <?php
                              include("ketnoi.php");
                              $sql="select * from loaibanh";
                              $kq=mysqli_query($kn,$sql);
                              while($row=mysqli_fetch_array($kq)){
                                echo"<option value='".$row["Maloai"]."'>".$row["Tenloai"]."</option>";
                              }
                              ?>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <th>Hình ảnh</th>
                          <td><input type="hidden" name="MAX_FILE_SIZE" value="2000000" /> 
                          <input type="file" name="fileHinhBanh"> </td>
                        </tr>
                        <tr>
                          <th>Thành phần</th>
                          <td><textarea name='txtaTPhan' cols='80' rows='20' required ></textarea></td>
                        </tr>
                        <tr>
                          <th>Giá hiện tại</th>
                          <td><input type='text' name='txtGia' required > đồng</td>
                        </tr>
                        <tr>
                          <td colspan='2' align='center'><input class='edit btn btn-primary' type='submit' value='Thêm' name='sbmThemBanh'>
                            <input class='cancel btn btn-secondary' type='reset' value='Nhập lại' name='rsNLai'>
                          </td>
                        </tr>
                      </table>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <?php
include("footer_admin.php");
?>