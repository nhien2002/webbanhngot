<?php
$sdt=$_POST["txtSDT"];
$ht=$_POST["txtHTen"];
$mt=$_POST["txtaMTa"];
include("ketnoi.php");
$sql="insert into lienhe(Sdtlienhe, Tenkhachhang, Noidunglienhe)
    values('".$sdt."', '".$ht."','".$mt."')";

if(mysqli_query($kn,$sql)){
    echo("<script language=javascript>
	alert('Cảm ơn quý khách đã liên hệ với cửa hàng');
	window.location='index.php';
	</script>");
}
else{
    echo("<script language=javascript>
	alert('Rất tiếc liên hệ của quý khách nhập không đúng mẫu, vui lòng nhập lại!');
	window.location='lienhe.php';
	</script>");
}
?>