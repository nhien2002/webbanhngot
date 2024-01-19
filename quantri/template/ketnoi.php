<?php
$kn=mysqli_connect("localhost","root","") or die ("Không thể kết nối đến server");
$csdl = mysqli_select_db($kn,"websitebanhngot") or die ("Không thể chọn được được csdl". mysqli_error($kn));
mysqli_query($kn,"SET NAMES 'utf8'");
?>