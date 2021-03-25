<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <div class="navbar__left">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?php echo base_url();?>admin/index" class="nav-link"></a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <!-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->
        </div>
        <div class="navbar__right">
            <div class="toggle_home_admin">
                <div class="rediect">
                    <a class="nav-link" href="<?php echo base_url();?>" style="color: black;font-weight:bold;">Trang chủ</a>
                </div>
                <div class="account_admin">
                    <a style="color:#555;" class="user_name-ad">
                        <i class="fa fa-user"></i>
                        <?php echo $this->session->userdata("ho_ten_tk"); ?>
                    </a>
                    <div class="dropdown-content">
                        <a href="<?php echo base_url() . "index.php/home/ttcn/" . $this->session->userdata("id_tk");?>"><i class="fa fa-cogs"></i>Cài đặt</a>
                        <a href="<?php echo base_url();?>index.php/home/logout"><i class="fa fa-power-off"></i>Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>