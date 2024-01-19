<?php
include("header.php");
?>
<script language="javascript">
    function kiemtra(){
        sdt=document.frmDKy.txtSDT.value;
        cd=sdt.length;
        if(isNaN(sdt) || cd!=10 ){
            alert("Số điện thoại phải có 10 chứ số");
            document.frmDKy.txtSDT.focus();
            document.frmDKy.txtSDT.value="";
            return false;
        }
        else{
            return true;
        }
    }
</script>

<div style="height:400px;">
    <form action="xly_dangky.php" name="frmDKy" method="post" onsubmit="return kiemtra();">
        <table width="50%" align="center" border="0">
        <tr>
                <td>Tên Khách hàng: </td>
                <td><input type="text" name="textkhachhang" required></td>
        </tr>
        <tr>
                <td>Số điện thoại </td>
                <td><input type="text" name="txtSDT" required></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="textpassword" required></td>
            </tr>
            <tr>
                <td>Địa chỉ:</td>
                <td><input type="text" name="textDiachi" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnDangKy" value="Đăng ký"/></td>
                <td><input type="reset" name="lamlai" value="Làm lại"/></td>
            </tr>
        </table>
    </form>
</div>

<?php
include("footer.php");
?>
