<?php
include("header.php");
if(!isset($_SESSION["nguoidung"]))
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='dangky.php';
</script>";
}
?>

<table align="center">

    <tr>
        <td>THÔNG TIN CỦA BẠN</td>
    </tr>
    <?php include("ketnoi.php");
    $user=$_SESSION["nguoidung"];
    $sql="select * from nguoi_dung where username='".$user."'";
    $kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error($kn)); 
    while($row=mysqli_fetch_array($kq))
    {
        echo "<tr><td>Họ và tên: ".$row["hoten"]."</td></tr>";
        echo "<tr><td>Giới tính: ";
        if ($row["gioitinh"]==0)
            echo "Nam";
        else
            echo "Nữ";
        
    }
?>
</table>
<?php
    include("footer.php");
?>