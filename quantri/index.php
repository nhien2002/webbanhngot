

<html>
<head>
    <title>
        Đăng nhập quản trị
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <style type="text/css">
        .nutnhan{
            background:#F08632;
            width:100px;
            height:40px;
            color:white;
            border:0px;
        }
        .nutnhan:hover{
            background:#facd5a;
            color:#F08632;
        }
    </style>

</head> 
<body>   
<div style="height:400px; border:1px solid #F08632; margin-top:150px; width:500px; margin-left:400px; background-color: #EAEFF5;">
<tr>
<form action="xly_dangnhapQT.php" name="frmDNhap" method="post">
    <table width="90%" align="center" border="0">
        <tr height="40">
            <td>Tên đăng nhập</td>
            <td><input type="text" name="txtTDNhap" required></td>
        </tr>
        <tr height="40">
            <td>Mật khẩu</td>
            <td><input type="password" name="pswMKhau" required></td>
        </tr>
        <tr height="40">
            <td><input class="nutnhan" type="submit" name="sbmDNhap" value="Đăng nhập"></td>
            <td><input class="nutnhan" type="reset" name="rsHuy" value="Nhập lại" ></td>
        </tr>
    </table>
</form>
</tr>
</div>
</body>
</html>
