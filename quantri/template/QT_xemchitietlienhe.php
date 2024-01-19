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
              <h3 class="page-title"> XEM CHI TIẾT LIÊN HỆ </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
                  <li class="breadcrumb-item"><a href="danhsach_lienhe.php">Danh sách liên hệ</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Xem chi tiết</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
                
              
             <?php
                $malh=$_REQUEST["Malh"];
                include("ketnoi.php");
                $sql1="select * from lienhe l where Idlienhe =".$malh;
                $kq1=mysqli_query($kn,$sql1);
                $row=mysqli_fetch_array($kq1);

                
             ?>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">CHI TIẾT LIÊN HỆ </h4>
                   <p class="card-description">ID: <?php echo $row["Malh"]; echo "<br>Số điện thoại liên hệ: "; echo $row["Sdtlienhe"];?>
                   </p>


                    <div class="table-responsive">
                      <table class="table table-bordered">
                       
                    <?php
                        echo"<tr>";
                        echo"<th>Tên khách hàng</th>";
                        echo"<td>".$row["Tenkhachhang"]."</td>";
                        echo"</tr>";
                        echo"<tr>";
                        echo"<th>Nội dung liên hệ</th>";
                        echo"<td>".$row["Noidunglienhe"]."</td>";
                        echo"</tr>";
                        
                    ?>
                          
                       
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