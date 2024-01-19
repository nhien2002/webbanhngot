<?php
include("header-admin.php");
if(!isset($_SESSION["quantri"]))
{
echo "<script language=javascript>
alert('Bạn không có quyền trên trang này!'); window.location='../index.php';
</script>";
}
?>


<h1 align='center'>THÔNG TIN NGƯỜI DÙNG</h1>
<table border="1">
<tr>
<th>Tên đăng nhập</th>
<th>Họ và tên</th>
<th>Giới tính</th>
<th>Sửa</th> <!-- Thêm cột này-->
<th>Xóa</th>

</tr>
<?php include("ketnoi.php");
$sql="select * from nguoi_dung ";
$kq=mysqli_query($kn,$sql) or die ("Không thể xuất thông tin người dùng ".mysqli_error($kn)); 
while($row=mysqli_fetch_array($kq))
{
echo "<tr>";
echo "<td> ".$row["username"]."</td>";
$usern=$row["username"]; // Gán dữ liệu cột username vào biến $usern echo "<td> ".$row["password"]."</td>";
echo "<td> ".$row["hoten"]."</td>";
echo "<td>".$row["email"]."</td>";
echo "<td>".$row["diachi"]."</td>";
echo "<td><img src= '".$row["hinhdaidien"]."' height='50' width='50'></td>";
echo "<td><a href='sua.php?user=$usern'>Sửa</a></td>";//Thêm cột sửa tương ứng + truyền biến user (chứa thông tin về tên đăng nhập) sang file sua.php
echo "<td><a href='trangxoa.php?user=$usern'>Xóa</a></td>";
echo "</tr>";
}
?>


</table>
<?php
    include("footer_admin.php");
?>
