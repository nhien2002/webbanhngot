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
              <h3 class="page-title"> QUẢN LÝ LIÊN HỆ </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Danh sách liên hệ</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">DANH SÁCH LIÊN HỆ</h4>
                   <!--  <p class="card-description"> Add class <code>.table-bordered</code>-->
                    </p>

                    <?php
                    include("ketnoi.php");
                    $sql="select * from lienhe l where l.trangthai=1 order by Idlienhe asc";
                    $kq=mysqli_query($kn,$sql);
                    ?>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> SĐT Liên hệ </th>
                            <th> Tên khách hàng </th>
                            <th> Nội dung liên hệ </th>
                          </tr>
                        </thead>
                        <tbody>
                    <?php
                    $stt=1;
                    while($row=mysqli_fetch_array($kq)){
                        echo"<tr>";
                        echo"<td> ".$stt." </td>";
                        echo"<td>".$row["Sdtlienhe"]."</td>";
                        echo"<td>".$row["Tenkhachhang"]."</td>";
                        echo"<td>".$row["Noidunglienhe"]."</td>";
                       echo "<td>";
                       echo"<a class='btn btn-secondary' href='QT_xemchitietlienhe.php?Malh=".$row["Idlienhe"]."'>Xem chi tiết</a><br>";
                       echo"<a class='btn btn-primary' href='QT_sualienhe.php?Malh=".$row["Idlienhe"]."'>Sửa</a><br>";
                      
                      //  <a class='btn btn-danger' onclick="return confirm('Bạn có chắc muốn xóa LIÊN HỆ này?');" href='trang_xoa-sanpham.php?Masp="<?php echo $row["Masp"];"' >Xóa</a>
                   
                      echo"<a class='btn btn-danger' onclick='return confirm(\"Bạn có chắc muốn xóa LIÊN HỆ này?\"); '  href='trang_xoa-lienhe.php?Masp=".$row["Idlienhe"]."'>Xóa</a>";
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