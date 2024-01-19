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
              <h3 class="page-title"> QUẢN LÝ SẢN PHẨM THEO LOẠI</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item"><a href="danhsach_loaisanpham.php">Danh sách loại sản phẩm</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Danh sách bánh theo loại</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">DANH SÁCH BÁNH THEO LOẠI</h4>
                    <?php
                    $lsp=$_REQUEST["ml"];
                    $sql2="select * from loaibanh where Maloai=".$lsp;
                    $kq2=mysqli_query($kn,$sql2);
                    $row2=mysqli_fetch_array($kq2)
                    ?>
                    <p class="card-description">MÃ LOẠI: <?php echo $row2["Maloai"]; echo "<br>Tên loại: "; echo $row2["Tenloai"];?>
                    </p>

                    <?php
                    include("ketnoi.php");
                    
                    $sql="select Masp, Tensp,Hinhbanh, Giahientai, a.trangthai, a.Maloai from sanpham a, loaibanh b where a.Maloai=b.Maloai and a.Maloai=".$lsp."  order by Masp desc";
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
                            <th> Trạng thái </th>
                            <th> Chức năng </th>
                          </tr>
                        </thead>
                        <tbody>
                    <?php
                    $stt=1;
                    while($row=mysqli_fetch_array($kq)){
                        $masp=$row["Masp"];
                        $maloai=$row["Maloai"];
                        echo"<tr>";
                        echo"<td> ".$stt." </td>";
                        echo"<td>".$row["Tensp"]."</td>";
                        echo"<td><img src='../../".$row["Hinhbanh"]."' width='270' height='270'></td>";
                        echo"<td>".$row["Giahientai"]." đồng </td>";
                        
                        if($row["trangthai"]==0){
                          echo"<td>";
                          echo"<font color='#e99b47'>Ngừng kinh doanh</font>";
                          echo"</td>";
                          echo"<td>&nbsp;</td>";
                        }
                        else{
                          echo"<td>";
                          echo"<font color='#00d25b'>Đang kinh doanh</font>";
                          echo"</td>";
                          echo "<td>";
                          echo"<a class='btn btn-secondary' href='QT_xemchitietsptheoloai.php?msp=$masp&ml=$maloai'>Xem chi tiết</a><br>";
                          echo"<a class='btn btn-primary' href='QT_suasptheoloai.php?msp=$masp&ml=$maloai'>Sửa</a><br>";
                          echo"<a class='btn btn-danger' onclick='return confirm(\"Bạn có chắc muốn xóa sản phẩm này?\"); '  href='trang_xoa-sanphamtheoloai.php?Masp=".$row["Masp"]."&ml=$maloai'>Xóa</a>";
                          echo"</td>";
                        }
                        
                       
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