<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Huỳnh Nhiên</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="img/logo_nhien_not text.png" />
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


                

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
            
                
                
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> </a>
                <span>0</span>
                <div class="cart__price">

                    Giỏ hàng: 
                    <span>0 đồng</span>
            </div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo_nhien.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>VIE <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>VIE</li>
                        <li>ENG</li>
                    </ul>
                </li>
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                        <div class="header__top__left">
                                <ul>

                                    <li>VIE <span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li>ENG</li>
                                            <li>VIE</li>
                                        </ul>
                                    </li>
                                    <?php
                                        // Kiểm tra nếu session "khachhang" đã tồn tại (người dùng đã đăng nhập)
                                        if(isset($_SESSION["khachhang"]) || isset($_SESSION["nguoiquantri"])) {
                                            echo"<li>Xin chào ".$_SESSION["khachhang"]."</li>";
                                            echo '<li><a href="thoat.php">Đăng xuất</a></li>';
                                        } else {
                                            echo '<li><a href="dangnhap.php">Đăng nhập</a></li>';
                                            echo '<li><a href="dangky.php">Đăng ký</a></li>';
                                        }
                                    ?>
                                    
                                    
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.php"><img src="img/logo_nhien.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                <form  method="post" action="xly_timkiem.php">
                                    <input type="text" placeholder="Tìm kiếm tên bánh" name="txtTimkiem">
                </form>
                                </div>
                            
                                <div class="header__top__right__cart">
                                    <a href="./shoping-cart.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Giỏ hàng: <span>0 đồng</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="./index.php">Trang chủ</a></li>
                            <li><a href="gioithieu.php">Giới thiệu</a></li>
                            <li><a href="#">Các loại bánh</a>
                                <ul class="dropdown" style="width:200px;">
                                </tr>
                                <?php
                                include("ketnoi.php");
                                $sql="select * from loaibanh where trangthai=1";
                                $kq=mysqli_query($kn,$sql);
                                while($row=mysqli_fetch_array($kq))
                                {
                                $ml=$row["Maloai"];
                                echo "<li><a href='sanpham.php?maloai=$ml'> ".$row["Tenloai"]."</a></td>";
                                }
                                ?>
                                </ul>
                            </li>
                            <li><a href="lienhe.php">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->