<?php
include("header.php");
?>
<section class="product spad">
    <div class="container">
        <div class="row">
<?php
      $ml=$_REQUEST['maloai'];
                      include("ketnoi.php");
                $sql1="select * from sanpham where trangthai=1 and Maloai=".$ml;
                $kq1=mysqli_query($kn,$sql1);
                while($row1=mysqli_fetch_array($kq1)){
                    ?>
                    
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg">
                                            <?php
                                            echo "<img src='".$row1["Hinhbanh"]."' width='270' height='270'>";
                                            ?>
                                            <div class="product__label">
                                                <span><?php echo $row1["Tensp"]; ?></span>
                                            </div>
                                        </div>
                                        <div class="product__item__text">
                                            <?php
                                        echo "<h6><a href='xemchitietsp.php?msp=".$row1["Masp"]."'>Xem chi tiết</a><h6>";
                                        ?>
                                            <div class="product__item__price"> <?php echo $row1["Giahientai"]; ?> đồng</div>
                                            <div class="cart_add">
                                                <a href="#">Thêm vào giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                <?php
                }
                ?>


        </div>
    </div>
</section>

<?php
include("footer.php");
?>