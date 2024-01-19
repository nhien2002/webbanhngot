<?php
include("header.php");
?>
<section class="product spad">
    <div class="container">
    <div class="row">
              
                
              
              <?php
                 $masp=$_REQUEST["msp"];
                 include("ketnoi.php");
                 $sql1="select * from sanpham a, loaibanh b where a.Maloai=b.Maloai and Masp=".$masp;
                 $kq1=mysqli_query($kn,$sql1);
                 $row=mysqli_fetch_array($kq1);
 
                 
              ?>
               <div class="col-lg-12 grid-margin stretch-card">
                 <div class="card">
                   <div class="card-body">
                     <h4 class="card-title">CHI TIẾT BÁNH </h4>
                    <p class="card-description">ID: <?php echo $row["Masp"]; echo "<br>Tên bánh: "; echo $row["Tensp"];?>
                    </p>
 
 
                     <div class="table-responsive">
                       <table class="table table-bordered">
                        
                     <?php
                         echo"<tr>";
                         echo"<th>Thuộc loại bánh</th>";
                         echo"<td>".$row["Tenloai"]."</td>";
                         echo"</tr>";
                         echo"<tr>";
                         echo"<th>Hình ảnh</th>";
                         echo"<td><img src='".$row["Hinhbanh"]."' width='500' height='500'></td>";
                         echo"</tr>";
                         echo"<tr>";
                         echo"<th>Thành phần</th>";
                         echo"<td>".$row["Thanhphan"]."</td>";
                         echo"</tr>";
                         echo"<tr>";
                         echo"<th>Giá hiện tại</th>";
                         echo"<td>".$row["Giahientai"]." đồng</td>";
                         echo"</tr>";
                         
                     ?>
                           
                        
                       </table>
                     </div>
                   </div>
                 </div>
               </div>
 
 
 
 
             </div>
           </div>

        </div>
    </div>
</section>

<?php
include("footer.php");
?>