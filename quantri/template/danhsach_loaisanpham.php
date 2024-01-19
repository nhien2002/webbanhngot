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
              <h3 class="page-title"> QUẢN LÝ LOẠI SẢN PHẨM </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Danh sách loại bánh</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
                
              
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">DANH SÁCH LOẠI BÁNH</h4>
                   <!--  <p class="card-description"> Add class <code>.table-bordered</code>-->
                    </p>

                    <?php
                    include("ketnoi.php");
                    // $sql="SELECT l.*, COUNT(sp.Masp) AS Soluongsanpham
                    // FROM loaibanh l
                    // LEFT JOIN sanpham sp ON l.Maloai = sp.Maloai
                    // GROUP BY l.Maloai, l.TenLoai
                    // ORDER BY l.Maloai;";
                    $sql="select * from loaibanh where trangthai=1";
                    $kq=mysqli_query($kn,$sql);
                    ?>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Mã loại bánh </th>
                            <th> Tên loại bánh </th>
                            <th> Chức năng </th>
                          </tr>
                        </thead>
                        <tbody>
                    <?php
                    $stt=1;
                    while($row=mysqli_fetch_array($kq)){
                        
                        echo"<tr>";
                        echo"<td> ".$stt." </td>";
                        echo"<td>".$row["Maloai"]."</td>";
                        echo"<td>".$row["Tenloai"]."</td>";
                        //echo"<td>".$row["Soluongsanpham"]." mẫu </td>";                        
                       echo "<td>";
                       echo"<a class='btn btn-secondary' href='QT_xembanhtheoloai.php?ml=".$row["Maloai"]."'>Xem danh sách bánh theo loại</a><br>";
                       echo"<a class='btn btn-primary' href='QT_sualoaisp.php?ml=".$row["Maloai"]."'>Sửa loại</a><br>";
                       echo"<a class='btn btn-danger' onclick='return confirm(\"Bạn có chắc muốn xóa loại sản phẩm này?\"); '  href='trang_xoa-loaibanh.php?ml=".$row["Maloai"]."'>Xóa loại</a>";
                       echo"</td>";
                        echo"</tr>";
                        $stt++;
                    }
                    ?>
                          
                        </tbody>
                      </table>
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