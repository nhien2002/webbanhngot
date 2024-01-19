
<?php
include("header.php");
?>
<div style="height:400px;">
<tr>
<form action="xly_dangnhap.php" name="frmDNhap" method="post">
    <table width="50%" align="center" border="0">
        <tr>
            <td>Số Điện Thoại</td>
            <td><input type="text" name="txtSDT" required></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" name="pswMKhau" required></td>
        </tr>
        <tr>
            <td><input type="submit" name="sbmDNhap" value="Đăng nhập"></td>
            <td><input type="reset" name="rsHuy" value="Nhập lại" ></td>
        </tr>
    </table>
</form>
</tr>
</div>
<?php
include("footer.php");
?>