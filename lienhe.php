
<?php
include("header.php");
?>
<!-- <div style="height:800px;">-->
<section class="product-details spad">
        <div class="container">
        <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <h2>Hãy để lại thông tin liên hệ với chúng tôi!</h2>
                    <p>Bộ phận chăm sóc khách hàng sẽ chủ động liên lạc với quý khách.</p>
                    <form action="xly_lienhe.php" method="post" name="frmLienHe">
                    <div class="row">
                        <div class="col-lg-6">
                            <div>Số điện thoại khách hàng (*)</div>
                            <div><input type="text" name="txtSDT" require></div>
                        </div>
                        <div class="col-lg-6">
                            <div>Họ tên khách hàng</div>
                            <div><input type="text" name="txtHTen"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div>Mô tả chi tiết chiếc bánh cần đặt (*)
                                <br>(Ví dụ: loại bánh, số tầng, màu sắc, mức giá, nguyên liệu)</div>
                            <div><textarea name="txtaMTa" rows="10" cols="60" require></textarea></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div><input class="primary-btn" type="submit" value="Gửi liên hệ" name="sbmLHe"></div>
                            
                        </div>
                        <div class="col-lg-4">
                            
                            <div><input class="primary-btn" type="reset" value="Hủy bỏ" name="rsHuyBo"></div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<!-- </div> -->
<?php
include("footer.php");
?>