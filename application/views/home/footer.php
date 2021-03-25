<footer>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-3 col-6">
                    <ul>
                        <li>- Giới thiệu</li>
                        <li>- Logo của Khoa CNTT</li>
                        <li>- Lời chào mừng</li>
                        <li>- Tổ chức</li>
                        <li>- Hợp tác liên kết</li>
                    </ul>

                </div>
                <div class="col-md-3 col-6">
                    <ul>
                        <li>- Đào tạo</li>
                        <li>- Mô hình đào tạo</li>
                        <li>- Đào tạo đại học</li>
                        <li>- Định hướng ngành nghề</li>
                        <li>- Đào tạo sau đại học</li>
                    </ul>

                </div>
                <div class="col-md-3 col-6">
                    <ul>
                        <li>- Nghiên cứu khoa học</li>
                        <li>- Thông tin seminar</li>
                        <li>- Các đề tài, dự án</li>
                        <li>- Công trình công bố</li>
                        <li>- Các phòng thí nghiệm</li>
                    </ul>

                </div>
                <div class="col-md-3 col-6">
                    <ul>
                        <li>- Công nghệ phần mềm</li>
                        <li>- Hệ thống thông tin</li>
                        <li>- Khoa học máy tính</li>
                        <li>- Kỹ thuật máy tính và mạng</li>
                        <li>- Toán học</li>
                        <li>- Trung tâm tin học</li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="footer-bot">
            <img src="http://cse.tlu.edu.vn/portals/0/images/img-01.png" alt="">
            <p class="ml-3">© 2017 Khoa Công nghệ thông tin - Đại học Thủy lợi<br> Địa chỉ: nhà C1, Đại học Thủy lợi, 175 Tây Sơn, Đống Đa, Hà Nội. Điện thoại: (+84)-024 3 5632211. Email: <a class="text-white" href="#">vpkcntt@tlu.edu.vn</a>
            </p>
        </div>
    </div>

</footer>
<div class="me-form-login">
    <div class="login-card">
        <img src="<?php echo base_url(); ?>assets/img/logo-login.png" class="profile-img-card">
        <form class="form-signin" method="post" action="<?php echo base_url() . "index.php/home/checkLogin" ?>">
            <input class="form-control  w3-animate-right" type="text" placeholder="Tài Khoản" autofocus="" id="TaiKhoan" name="tk">
            <input class="form-control  w3-animate-left" type="password" placeholder="Mật Khẩu" id="MatKhau" name="mk">
            <input class="btn btn-primary btn-block btn-lg btn-signin w3-animate-top" type="submit" value="Login" id="Login" name="Login">
        </form>
        <div class="btn-close">
            <i class="fas fa-times"></i>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/1.js"></script>

</body>

</html>