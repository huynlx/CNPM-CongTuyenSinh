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
    <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/1.js"></script>
    




    <style>
        /* .owl-prev i,
        .owl-next i {
            transform: scale(1, 6);
            color: #ccc;
        }
         */

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