<div id="main">
    <div class="container">
        <div id="main__wrapp">
            <div id="main__left">
                <div class="main__left--news">
                    <h1 class="title__news title-heading">
                        <p><a href="<?php echo base_url();?>home/index"> Trang chủ </a>>> THÔNG TIN NGÀNH XÉT TUYỂN</p>
                    </h1>
                    <div class="content-wrap">
                        <h1 class="page-title">
                            <strong>THÔNG TIN NGÀNH TUYỂN SINH ĐẠI HỌC CHÍNH QUY</strong>
                        </h1>
                        <div class="content">
                            <div style="margin-left:20px;">
                                <p style="margin-left:2.0cm;">
                                    <p><a href="">Chương trình tiên tiến ngành Kỹ thuật xây dựng</a></p>
                                    <p><a href="">Chương trình tiên tiến ngành Kỹ thuật tài nguyên nước</a></p>
                                    <p><a href="">Kỹ thuật xây dựng công trình thủy</a></p>
                                    <p><a href="">Kỹ thuật xây dựng</a></p>
                                    <p><a href="">
                                            Công nghệ kỹ thuật xây dựng</a></p>
                                    <p><a href="">
                                            Kỹ thuật xây dựng công trình giao thông</a></p>
                                    <p><a href="">Kỹ thuật tài nguyên nước</a></p>
                                    <p><a href="">Kỹ thuật cấp thoát nước</a></p>
                                    <p><a href="">Kỹ thuật cơ sở hạ tầng</a></p>
                                    <p><a href="">Thủy văn học</a></p>
                                    <p><a href="">
                                            Kỹ thuật môi trường</a></p>
                                    <p><a href="">Kỹ thuật hóa học</a></p>
                                    <p><a href="">Công nghệ sinh học</a></p>
                                    <p><a href="">Công nghệ thông tin </a></p>
                                    <p><a href="">Kỹ thuật phần mềm</a></p>
                                    <p><a href="">Hệ thống thông tin</a></p>
                                    <p><a href=""> Kỹ thuật cơ khí</a></p>
                                    <p><a href=""> Công nghệ chế tạo máy</a></p>
                                    <p><a href="">Kỹ thuật ô tô</a></p>
                                    <p><a href="">
                                            Kỹ thuật cơ điện tử</a></p>
                                    <p><a href="">Kỹ thuật điện</a></p>
                                    <p><a href="">Kỹ thuật điều khiển và tự động hóa</a></p>
                                    <p><a href="">Quản lý xây dựng</a></p>
                                    <p><a href="">Kinh tế</a></p>
                                    <p><a href="">Quản trị kinh doanh</a>
                                    </p>
                                    <p><a href="">Kế toán</a>
                                    </p>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div id="main__right">
                <div class="col-tuyensinh">
                    <div id="block-9" class="block block-block">
                        <h2 class="block__title">
                            <a href="">
                                <i class="fas fa-exclamation-circle fa-2x" style="color:#fff;"></i>
                            </a>
                            <p>
                                THÔNG TIN GIỚI THIỆU TRƯỜNG 
                                <br>
                                ĐẠI HỌC THỦY LỢI
                            </p>
                        </h2>
                      
                    </div>
                    <div id="block-thong-tin-hoat-dong" class="block block-menu">
                        <h2 class="block__title"><?php echo $TTHD["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                                    <?php foreach($bvC as $bv){
                                    if ($bv["ma_dm"] == $TTHD["ma_dm"]) {?>
                                    <li class="views-row">
                                        <div class="views-filed-title">
                                            <a href=""><?php echo $bv["tieu_de_bv"]; ?></a>
                                        </div>
                                    </li>
                                    <?php
                                    }                            
                                }                        
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div id="block-thong-tin-nganh-tuyens-sinh" class="block block-menu">
                        <h2 class="block__title"><?php echo $TTNTS["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                            <?php foreach ($TTNTSC as $row) {?>
                                    
                                    <li class="views-row">
                                        <div class="views-filed-title">
                                            <a href=""><?php echo $row["ten_dm"]; ?></a>
                                        </div>
                                    </li>

                                    <?php
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div id="block-thong-tin-nganh-tuyens-sinh" class="block block-menu">
                        <h2 class="block__title"><?php echo $WSKV["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                                <?php foreach($bvC as $bv){
                                    if ($bv["ma_dm"] == $WSKV["ma_dm"]) {?>

                                    <li  class="list__news--item">
                                        <a href="http://ce.tlu.edu.vn/" target="_blank"><?php echo $bv["tieu_de_bv"]; ?></a>
                                    </li>

                                    <?php
                                    }                            
                                }                        
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>