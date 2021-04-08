<div id="main">
    <div class="container">
        <div id="main__wrapp">
            <div id="main__left">
                <div class="main__left--news">
                    <!-- Bắt đầu main tư cmn vấn -->
                    <section id="content" role="main" class="clearfix" style="margin-top: 30px;">
                        <h1 class="title__news title-heading">
                            <p><a href="<?php echo base_url();?>home/index.php"> Trang chủ </a>>> THÔNG TIN TUYỂN SINH</p>
                        </h1>
                        <div id="content-wrap" class="">
                            <div class="region region-content">
                                <div class="view-filter" style="display:flex;">
                                    <!-- <div class="filter1">
                                        <label for="search">Tìm kiếm câu hỏi</label>
                                        <br />
                                        <input type="text" id="search" class="form-text" />
                                 </div> -->
                                    <!-- <div class="filter2 ml-4" style="margin-left: 10px;">
                                        <label for="filter">Lọc theo ngành tuyển sinh</label>
                                        <br />
                                        <select name="danh-muc" id="filter" class="form-select required"
                                            style="padding: 3px;">
                                            <option value="17" selected="selected">- Tất cả -</option>
                                            <option value="1">Hỏi đáp chung</option>
                                            <option value="2">Kĩ thuật xây dựng công trình giao thông</option>
                                            <option value="3">Công nghệ thông tin</option>
                                            <option value="4">Kĩ thuật cơ khí</option>
                                            <option value="5">Kĩ thuật điện tử, truyền thông</option>
                                            <option value="6">Kĩ thuật điện, điện tử</option>
                                            <option value="7">Kĩ thuật điều khiển và tự động hoá</option>
                                            <option value="8">Quản trị kinh doanh</option>
                                            <option value="9">Kinh tế</option>
                                            <option value="10">Kĩ thuật xây dựng</option>
                                            <option value="11">Kế toán</option>
                                            <option value="12">Khai thác vận tải</option>
                                            <option value="13">Kinh tế vận tải</option>
                                            <option value="14">Kĩ thuật môi trường</option>
                                            <option value="15">Công nghệ kĩ thuật giao thông</option>
                                            <option value="16">Kinh tế xây dựng</option>
                                        </select>
                                    </div> -->
                                </div>
                                <div class="view-content">
                                    <div class="item-list">
                                        <ul class="list__news" style="padding-left: 14px;padding-top:20px;">
                                            <?php foreach($bvC as $bv){
                                                if ($bv["ma_dm"] == $DSCH["ma_dm"]) {?>
                                                <li class="views-row">
                                                    <div class="views-filed-title">
                                                        <a href="">> <?php echo $bv["tieu_de_bv"]; ?></a>
                                                        <br>
                                                        <br>
                                                    </div>
                                                </li>
                                                <?php
                                                }                                                                           
                                            } 
                                            ?> 
                                        </ul>
                                    </div>
                                </div>
                                <!-- PHÂN__TRANG -->
                                <div class="list-page">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </div>

                                <!-- END -->
                            </div>
                        </div>
                    </section>
                    <!-- kết thúc main tư vấn -->
                </div>
            </div>
            <div id="main__right">
                <div class="col-tuyensinh">
                    <div id="block-hoi-dap" class="block block-hoi-dap">
                        <h2 class="block__title"><?php echo $TVTS["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                                <?php foreach ($TVTSC as $row) {?>

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
                    <div id="block-tin-tuyen-sinh" class="block block-menu">
                        <h2 class="block__title"><?php echo $TSCLY["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                                <?php foreach ($TSCLYC as $row) {?>

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

                    <div id="block-formblock-cau-hoi" class="block block-formblock">
                        <h2 class="block__title">Đặt câu hỏi mới</h2>
                        <div class="content">
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="email">Họ tên</label>
                                    <input type="email" class="form-control" id="name" placeholder="Nhập tên"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label for="diachi">Địa chỉ</label>
                                    <input type="email" class="form-control" id="email" placeholder="Nhập địac chỉ"
                                        name="email">
                                </div>
                                <div class="form-group">
                                    <label for="diachi">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                                        name="email">
                                </div>
                                <div class="form-group">
                                    <label for="">Ngành tuyển sinh</label><br>
                                    <select name="" id="input" class="form-control" required="required">
                                        <option value="16" selected="selected">Hỏi đáp chung</option>
                                        <option value="1">Kỹ thuật xây dựng công trình thủy</option>
                                        <option value="2">Kỹ thuật xây dựng</option>
                                        <option value="3">Công nghệ kỹ thuật xây dựng</option>
                                        <option value="4">Kỹ thuật xây dựng công trình giao thông</option>
                                        <option value="5">Quản lý xây dựng</option>
                                        <option value="6">Kỹ thuật tài nguyên nước</option>
                                        <option value="7">Kỹ thuật cấp thoát nước</option>
                                        <option value="8">Kỹ thuật cơ sở hạ tầng</option>
                                        <option value="9">Thuỷ văn học</option>
                                        <option value="10">Kỹ thuật môi trường</option>
                                        <option value="11">Kỹ thuật hóa học</option>
                                        <option value="12">Công nghệ sinh học</option>
                                        <option value="13">Công nghệ thông tin</option>
                                        <option value="14">Hệ thống thông tin</option>
                                        <option value="15">Kỹ thuật phần mềm</option>
                                        <option value="26">Kỹ thuật trắc địa - bản đồ</option>
                                        <option value="17">Kỹ thuật cơ khí</option>
                                        <option value="18">Công nghệ chế tạo máy</option>
                                        <option value="19">Kỹ thuật Ô tô</option>
                                        <option value="20">Kỹ thuật cơ điện tử</option>
                                        <option value="21">Kỹ thuật điện</option>
                                        <option value="22">Kỹ thuật điều khiển và tự động hóa</option>
                                        <option value="23">Kinh tế</option>
                                        <option value="24">Quản trị kinh doanh</option>
                                        <option value="25">Kế toán</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="diachi">Câu hỏi</label>
                                    <textarea name="" id="input" class="form-control" rows="3"
                                        required="required"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Gửi câu hỏi</button>
                            </form>
                        </div>
                    </div>

                    <div id="block-thong-tin-nganh-tuyens-sinh" class="block block-menu">
                        <h2 class="block__title"><?php echo $WSKV["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                                <?php foreach($bvC as $bv){
                                    if ($bv["ma_dm"] == $WSKV["ma_dm"]) {?>

                                <li class="list__news--item">
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