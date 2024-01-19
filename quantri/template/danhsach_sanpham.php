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
              <h3 class="page-title"> QUẢN LÝ SẢN PHẨM </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Danh sách bánh</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">DANH SÁCH BÁNH</h4>
                   <!--  <p class="card-description"> Add class <code>.table-bordered</code>-->
                    </p>

                    <?php
                    include("ketnoi.php");
                    $sql="select * from sanpham a, loaibanh b where a.Maloai=b.Maloai and a.trangthai=1  order by Masp desc";
                    $kq=mysqli_query($kn,$sql);
                    ?>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Tên bánh </th>
                            <th> Hình ảnh </th>
                            <th> Giá hiện tại </th>
                            <th> Thuộc loại bánh </th>
                            <th> Chức năng </th>
                          </tr>
                        </thead>
                        <tbody>
                    <?php
                    $stt=1;
                    while($row=mysqli_fetch_array($kq)){
                        
                        echo"<tr>";
                        echo"<td> ".$stt." </td>";
                        echo"<td>".$row["Tensp"]."</td>";
                        echo"<td><img src='../../".$row["Hinhbanh"]."' width='270' height='270'></td>";
                        echo"<td>".$row["Giahientai"]." đồng </td>";
                        echo"<td>".$row["Tenloai"]."</td>";
                       echo "<td>";
                       echo"<a class='btn btn-secondary' href='QT_xemchitietsp.php?msp=".$row["Masp"]."'>Xem chi tiết</a><br>";
                       echo"<a class='btn btn-primary' href='QT_suasp.php?msp=".$row["Masp"]."'>Sửa</a><br>";
                      
                      //  <a class='btn btn-danger' onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');" href='trang_xoa-sanpham.php?Masp="<?php echo $row["Masp"];"' >Xóa</a>
                   
                      echo"<a class='btn btn-danger' onclick='return confirm(\"Bạn có chắc muốn xóa sản phẩm này?\"); '  href='trang_xoa-sanpham.php?Masp=".$row["Masp"]."'>Xóa</a>";
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