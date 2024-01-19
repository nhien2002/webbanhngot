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
              <h3 class="page-title"> THÊM LOẠI SẢN PHẨM </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Thêm loại</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
                
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">THÊM LOẠI</h4>
                    <form method="post" action="xuly_them_loaibanh.php">
                        Tên loại bánh: <input type="text" name="tenLoai" required>
                        <input type="submit" value="Thêm">
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