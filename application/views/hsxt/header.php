<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thành Lập</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>/assets/images/logo.jpg" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/1.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/1mobile.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/comon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/reset.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/vendor/Responsive.css"> -->





    <style>
        /* .owl-prev i,
        .owl-next i {
            transform: scale(1, 6);
            color: #ccc;
        }
         */
     

        .process .list_process li.active:nth-child(2):after {
            background: #3aac5d;
            content: '';
            height: 5px;
            left: -50%;
            position: absolute;
            top: 15px;
            width: 100%;
            z-index: -1;

        }

        .owl-prev {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 40%;
            left: 40px;
            display: block !important;
        }

        .owl-next {
            width: 60px;
            height: 60px;
            position: absolute;
            top: 40%;
            right: 60px;
            display: block !important;
        }

        #logo {
            max-width: 150px;
            /* background: url(http://www.prospekdigital.com/wp-content/uploads/2015/03/logo-pd-350-135.png) no-repeat; */
            max-height: 80px;
            margin: 0 auto;
            text-indent: -9999px;
        }

        .clicked {
            display: block;
        }

        .dropdown-menu {
            border-radius: 5px;
            /* border: 1px solid #007bff; */
            /* box-shadow: 5px 0px grey; */
            /* width: 100px;
            height: 100px;
            border: 1px #CCC solid;
            background-color: #EEE;
            padding: 5px;
            -webkit-transition: height .3s linear, padding-top .3s linear, padding-bottom .3s linear, border-top-width .3s linear, border-top-width .3s linear;
            transition: height .3s linear, padding-top .3s linear, padding-bottom .3s linear, border-top-width .3s linear, border-top-width .3s linear; */
        }

        .dropdown-menu a {
            border-radius: 4px;
        }

        /* .dkm {
            border-radius: 0px;
        } */

        .dropdown-item:hover {
            background-color: #007bff;
        }

        /* .carousel-inner img {
            width: 100%;
            height: 100%;
        } */

        body .top ul.menu li {
            margin-right: 5px;
        }

        body .top ul li a {
            text-decoration: none;
            font-size: 14px;
        }

        body .top ul li a i {
            margin-right: 5px;
        }

        :root {
            --main-white-color: white;
            --main-black-color: black;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .static {
            position: static;
        }

        .cover {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* .owl-carousel .owl-slide {
            position: relative;
            height: 80vh;
            background-color: lightgray;
        } */
        /* .owl-carousel .owl-slide {
            position: relative;
            height: 80vh;
            background-color: lightgray;
        }
        
        .owl-carousel .owl-slide-animated {
            transform: translateX(20px);
            opacity: 0;
            visibility: hidden;
            transition: all 0.05s;
        }
        
        .owl-carousel .owl-slide-animated.is-transitioned {
            transform: none;
            opacity: 1;
            visibility: visible;
            transition: all 0.5s;
        }
        
        .owl-carousel .owl-slide-title.is-transitioned {
            transition-delay: 0.2s;
        }
        
        .owl-carousel .owl-slide-subtitle.is-transitioned {
            transition-delay: 0.35s;
        }
        
        .owl-carousel .owl-slide-cta.is-transitioned {
            transition-delay: 0.5s;
        }
        
        .owl-carousel .owl-dots,
        .owl-carousel .owl-nav {
            position: absolute;
        }
        
        .owl-carousel .owl-dots .owl-dot,
        .owl-carousel .owl-nav [class*="owl-"]:focus {
            outline: none;
        }
        
        .owl-carousel .owl-dots .owl-dot span {
            background: transparent;
            border: 1px solid var(--main-black-color);
            transition: all 0.2s ease;
        }
        
        .owl-carousel .owl-dots .owl-dot:hover span,
        .owl-carousel .owl-dots .owl-dot.active span {
            background: var(--main-black-color);
        }
        
        .owl-carousel .owl-nav {
            left: 50%;
            top: 42%;
            transform: translateX(-50%);
            margin: 0;
            width: 100%;
        }
        
        .owl-carousel .owl-nav .owl-prev {
            position: absolute;
            left: 70px;
        }
        
        .owl-carousel .owl-nav .owl-next {
            position: absolute;
            right: 70px;
        }
        
        .owl-carousel .owl-nav svg {
            opacity: 0.3;
            transition: opacity 0.3s;
        }
        
        .owl-carousel .owl-nav button:hover svg {
            opacity: 1;
        }
        
        .owl-carousel .owl-nav [class*="owl-"]:hover {
            background: transparent;
        }
        
        section {
            display: none;
        }
        
        @media screen and (max-width: 575px) {
            .owl-carousel .owl-nav {
                top: 5%;
            }
            .owl-carousel .owl-nav svg {
                width: 24px;
                height: 24px;
            }
        } */
    </style>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel();
        });
    </script>


</head>

<body>
    <!-- top -->
    <div class="top">
        <div class="container">
            <div class="row " id="top">
                <div class="col-md-8 col-sm-6 col-6 p-0">
                    <ul style="display:flex;margin-bottom: 0;" class="menu">
                        <li class="mm">
                            <a href=""><i class="fas fa-home"></i> Home </a>

                        </li>
                        <li style="color: white;" class="mm">|</li>
                        <li class="m">
                            <a href="">
                                <i class="fas fa-phone"></i> Login
                            </a>
                        </li>
                        <li style="color: white;">|</li>
                        <li class="m">
                            <a href="">
                                <i class="fas fa-users"></i> Register
                            </a>

                        </li>
                        <li style="color: white;" class="mm">|</li>
                        <li class="mm">
                            <a href="">
                                (+) Trường Đại Học Thuỷ Lợi - TLU
                            </a>

                        </li>

                    </ul>
                </div>
                <div class="col-md-4 col-sm-6 col-6 p-0">

                    <ul class="d-flex flex-row justify-content-end w-100" style="padding-right: 20px;margin-bottom: 0;">

                        <li class="mm">
                            <a href="" class="text-white"><img src="<?php echo base_url(); ?>/assets//images/images.png" alt="" style="width: 24px;height: 16px;"></a>

                        </li>
                        <li style="padding-right: 20px;" class="mm">
                            <a href="" class="text-white"><img src="<?php echo base_url(); ?>/assets//images/images (1).png" alt="" style="width: 24px;height: 16px;"></a>

                        </li>
                        <!-- <input class="form-control" type="text" placeholder="Search" aria-label="Search" style="width: 250px;"> -->
                        <div class="search-container">
                            <form action="/search_page.php" style="position: relative;">
                                <!-- <input type="text" placeholder="Search.." name="search" class="form-control"> -->
                                <input class="pl-3" type="text" placeholder="Tìm kiếm" aria-label="Search" style=" border:none;height: 25px;margin-right: 0px;border-radius: 0;font-size: small;margin-top: 2.5px;margin-bottom: 2.5px;outline-style: none;">
                                <button type="submit" class="pl-3" style="height: 25px;position: absolute;top: 0;right:0 ;margin-top: 2.5px;border: none;background-color: #ffffff;"><i class="fa fa-search pr-3"></i></button>
                            </form>
                        </div>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="logo-menu ">
        <div class="container">
            <div class="row">
                <div class="left col-md-9 col-sm-9  col-9 col-xl-3">
                    <!-- <img src="./images/logo.jpg" style="width:160px;height:80px;" alt=""> -->
                    <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>/assets//images/logo.jpg" alt="" id="logo"></a>
                </div>
                <div class="right col-md-3 col-sm-3  col-3 col-xl-9">
                    <input type="checkbox" id="chk" name="" value="">
                    <label for="chk" class="show-menu-btn">
                        <i class="fa fa-bars  "></i>
                    </label>
                    <ul class="menu " style="z-index: 1000;">
                        <div class="language">
                            <a href=""><img src="<?php echo base_url(); ?>/assets//images/images (1).png" alt="" style="width: 24px;height: 17px;"></a>
                            <a href=""><img src="<?php echo base_url(); ?>/assets//images/images.png" alt="" style="width: 24px;height: 17px;"></a>
                        </div>
                        <li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
                        <li class="drop" style="display: block;">
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Giới thiệu
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdown-layouts" id="mother">
                                    <a class="dropdown-item" href="#">Logo Khoa CNTT</a>
                                    <a class="dropdown-item" href="#">Lời chào mừng</a>
                                    <!-- <a class="dropdown-item dropdown-menu-2" href="#">Tổ chức</a> -->
                                    <div class="dropdown dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="dropdown-layouts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tổ
                                            chức</a>
                                        <div class="dropdown-menu dkm dkm1" aria-labelledby="dropdown-layouts">
                                            <a class="dropdown-item" href="#">Hội đồng trường</a>
                                            <a class="dropdown-item" href="#">Ban giám hiệu</a>
                                            <a class="dropdown-item" href="#">Khoa - Viện đào tạo</a>
                                            <a class="dropdown-item" href="#">Phòng chức năng</a>
                                            <a class="dropdown-item" href="#">Tổ chức đoàn thể</a>
                                            <a class="dropdown-item" href="#">Sơ đồ tổ chức</a>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="#">Hợp tác liên kết</a>
                                    <div class="dropdown dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="dropdown-layouts" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nghiên cứu
                                            khoa học
                                        </a>
                                        <div class="dropdown-menu dkm2 dkm" aria-labelledby="dropdown-layouts">
                                            <a class="dropdown-item" href="#">Các đề tài</a>
                                            <a class="dropdown-item" href="#">Thông tin seminar</a>
                                            <a class="dropdown-item" href="#">Công trình công bố</a>
                                            <a class="dropdown-item" href="#">Các phòng thí nghiệm</a>
                                        </div>

                                    </div>

                                </div>
                        </li>
                        <li><a href="#">Tin tức</a></li>
                        <li class="" style="display: block;">
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Đào tạo
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu" id="mother">
                                    <a class="dropdown-item" href="#">Đào tạo đại học</a>
                                    <a class="dropdown-item" href="#">Đào tạo sau đại học</a>
                                    <a class="dropdown-item" href="#">Chuẩn đầu ra</a>
                                    <a class="dropdown-item" href="#">Định hướng ngành nghề</a>
                                    <a class="dropdown-item" href="#">Mô hình đào tạo</a>
                                    <a class="dropdown-item" href="#">Đề cương môn học</a>
                                </div>
                            </div>
                        </li>

                        <li><a href="#">Bộ môn-trung tâm</a></li>

                        <li class="" style="display: block;">
                            <div class="dropdown">
                                <a class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sinh viên
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu" id="mother">
                                    <a class="dropdown-item" href="<?php echo base_url(); ?>home/hsxt">Xét học bạ Online</a>
                                    <a class="dropdown-item" href="#">Tài liệu sinh viên</a>
                                    <a class="dropdown-item" href="#">Tổ tư vấn học tập</a>
                                    <a class="dropdown-item" href="#">Biểu mẫu ĐATN</a>
                                    <a class="dropdown-item" href="#">Luận văn tốt nghiệp</a>
                                </div>
                            </div>
                        </li>

                        <li><a href="#">Thông báo</a></li>

                        <li><a href="#">Liên hệ </a></li>
                        <label for="chk" class="hide-menu-btn">
                            <i class="fas fa-times"></i>
                        </label>
                    </ul>
                </div>
            </div>
        </div>
    </div>