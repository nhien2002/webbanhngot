<?php
include("header.php");
?>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hinhanh/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-9">
                            <div class="hero__text">
                                <h2>Sự <font color="red">hài lòng </font> của khách hàng là <font color="red">thành công</font> của chúng tôi</h2>
                                <a href="#" class="primary-btn">Đặt bánh theo yêu cầu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="product spad">
        <div class="container">
            <div class="row">
                <?php
                include("ketnoi.php");
                $sql1="select * from sanpham where trangthai=1";
                $kq1=mysqli_query($kn,$sql1);
                while($row1=mysqli_fetch_array($kq1)){
                    $msp=$row1['Masp'];
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
                                <h6><a href="#">Xem chi tiết</a></h6>
                                <div class="product__item__price"> <?php echo $row1["Giahientai"]; ?> đồng</div>
                                <div class="cart_add">
                                    <?php
                                    echo"<a href='shoping-cart.php?masp=$msp'>Thêm vào giỏ hàng</a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                
                <!-- Product Section End -->
            </div>
        </div>
    </section>
    <!-- Product Section End -->

<?php
include("footer.php");
?>