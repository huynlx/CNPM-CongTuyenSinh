
<main class="xthb">
    <div id="main">
        <div class="container">
            <div class="text-center">
                <h3>
                    PHIẾU ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC CHÍNH QUY
                </h3>
                <small>(Dành cho thí sinh xét tuyển bằng học bạ)</small>
            </div>
            <div class="process mt-3">
                <ul class="list_process mb-0">
                    <li class="num active">
                        <p class="mb-0"> Khai báo thông tin thí sinh</p>
                    </li>
                    <li class="num">
                        <p class="mb-0">Đăng ký nguyện vọng</p>
                    </li>
                    <li class="num">
                        <p class="mb-0">Nộp tài liệu minh chứng</p>
                    </li>
                    <li class="num">
                        <p class="mb-0">Hoàn thành hồ sơ</p>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-3 float-right">
                        <form action="<?php echo base_url(); ?>home/get_hsxt_s" method="post" class="form-inline mr-auto">
                            <div class="form-control form_seach-hsxt">
                                <input required class="form-control search-field" type="text"
                                    placeholder="Mã tra cứu .." name="search">
                                <button class="btn btn-navbar" type="submit" style="border:1px solid #ccc;">
                                    <i class="fa fa-search">
                                    </i>
                                </button>
                            </div>
                        </form>
                        <!-- <p>
                                    <strong>Tìm kiếm</strong>
                                </p>
                                <hr>
                                <div class="Search_tt">
                                
                                <div class="form-group" style="display:flex;"> -->
                        <!-- <input required  type="text" class="form-control" placeholder="Mã tra cứu">
                                        <a href="<?php echo base_url(); ?>home/hosoxettuyen/1">
                                        <button type="submit" class="btn">
                                            <i class="fas fa-search"></i>
                                        </button>
                                        </a>
                                    </div> -->
                        <!-- <div class="form-group">
                                        <input required  type="text" class="form-control" placeholder="Số CMND">
                                    </div> -->


                        <!-- </div> -->

                    </div>

                </div>
            </div>
            <div class="content">
                <h3 class="title-hb mb-3">
                    <i class="fas fa-exclamation-circle mr-2" style="padding-top: 1.5px;"></i>
                    <p class="mb-0">THÔNG TIN THÍ SINH</p>

                </h3>

                <?php echo validation_errors();echo form_open(base_url()."home/pro_add_hsxt"); ?>

                <div class="form">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="" class="title__ip">Họ, chữ đệm và tên của thí sinh:</label>
                                <input required type="text" name="ht" class="form-control"
                                    placeholder="Họ, chữ đệm và tên của thí sinh">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="" class="title__ip">Giới tính:</label>
                                <select required name="gt" id="input" class="form-control">
                                    <option value="">Giới tính</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Ngày/tháng/năm sinh:</label>
                                <input required type="date" name="ngaythangnamsinh" id="ngaythangnamsinh"
                                    class="form-control" placeholder="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Nơi sinh:</label>
                                <select required id="selNoiSinhAddHsxt" name="noisinh" class="form-control">
                                    <option value="">Chọn nơi sinh</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Dân tộc:</label>
                                <select required id="selDanTocAddHsxt" name="dantoc" class="form-control">
                                    <option value="">Chọn dân tộc</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Chứng minh thư nhân dân:</label>
                                <input required type="number" class="form-control" min="0" max="999999999999"
                                    name="socmnd" id="cmt"
                                    placeholder="Số chứng minh thư nhân dân hoặc căn cước công dân">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Ngày cấp:</small> </label>
                                <input required type="date" name="ngaycap" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Nơi cấp:<small>(ghi theo cmnd/cccd)</small> </label>
                                <input required type="text" class="form-control" name="noicap">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <b>Hộ khẩu thường trú</b>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Tỉnh/TP:</label>
                                <select required id="selTinhThanhPhoAddHsxt" name="tinhthanhpho" class="form-control">
                                    <option value="">Chọn tỉnh thành phố</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Quận/huyện:</label>
                                <select required id="selQuanHuyenAddHsxt" name="quanhuyen" class="form-control">
                                    <option value="">Chọn quận huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Xã/phường:</label>
                                <!-- <input required type="text" class="form-control" name="phuongthixa"> -->
                                <select required id="selXaPhuongAddHsxt" name="phuongthixa" class="form-control">
                                    <option value="">Chọn xã phường</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="" class="title__ip">Thôn/bản/đường phố:</label>
                                <input required type="text" class="form-control" name="thonbanduongpho">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <p><b>Nơi học lớp 10 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh
                                    (thành phố) và ghi mã tỉnh, mã trường)</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <!-- Lớp 10 -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Tỉnh/TP:</label>
                                <select required id="selTinhThanhPhoLop10AddHsxt" name="tinhthanhpholop10"
                                    class="form-control">
                                    <option value="">Chọn tỉnh thành phố</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Quận/huyện:</label>
                                <select required id="selQuanHuyenLop10AddHsxt" name="quanhuyenlop10"
                                    class="form-control">
                                    <option value="">Chọn quận huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Trường THPT:</label>
                                <select required id="selTruongThptLop10AddHsxt" name="truongthptlop10"
                                    class="form-control">
                                    <option value="">Chọn trường:</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END 10 -->

                    <!-- Lớp 11 -->
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <p><b>Nơi học lớp 11 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh
                                    (thành phố) và ghi mã tỉnh, mã trường)</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Tỉnh/TP:</label>
                                <select required id="selTinhThanhPhoLop11AddHsxt" name="tinhthanhpholop11"
                                    class="form-control">
                                    <option value="">Chọn tỉnh thành phố</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Quận/huyện:</label>
                                <select required id="selQuanHuyenLop11AddHsxt" name="quanhuyenlop11"
                                    class="form-control">
                                    <option value="">Chọn quận huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Trường THPT:</label>
                                <select required id="selTruongThptLop11AddHsxt" name="truongthptlop11"
                                    class="form-control">
                                    <option value="">Chọn trường:</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END 11 -->

                    <!-- Lớp 12 -->
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <p><b>Nơi học lớp 12 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh
                                    (thành phố) và ghi mã tỉnh, mã trường)</p>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Tỉnh/TP:</label>
                                <select required id="selTinhThanhPhoLop12AddHsxt" name="tinhthanhpholop12"
                                    class="form-control">
                                    <option value="">Chọn tỉnh thành phố</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Quận/huyện:</label>
                                <select required id="selQuanHuyenLop12AddHsxt" name="quanhuyenlop12"
                                    class="form-control">
                                    <option value="">Chọn quận huyện</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Trường THPT:</label>
                                <select required id="selTruongThptLop12AddHsxt" name="truongthptlop12"
                                    class="form-control">
                                    <option value="">Chọn trường:</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END 12 -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="title__ip">Điện thoại liên lạc:</label>
                                <input required type="number" maxlength="10" class="form-control" name="sdt"
                                    placeholder="Điện thoại liên lạc">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="title__ip">Email:</label>
                                <input required type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <span id="ShowError"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Năm tốt nghiệp:</label>
                                <input required type="number" min="1990" max="2020" name="namtotnghiep"
                                    class="form-control" placeholder="Năm tốt nghiệp">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Khu vực ưu tiên:</label>
                                <select required id="input" name="khuvucuutien" class="form-control">
                                    <option value="">Chọn khu vực</option>
                                    <option value="KV1">KV1</option>
                                    <option value="KV2">KV2</option>
                                    <option value="KV2 - NT">KV2 - NT</option>
                                    <option value="KV3">KV3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="title__ip">Đối tượng ưu tiên (nếu có):</label>
                                <select required id="input" name="doituonguutien" class="form-control">
                                    <option value="">Đối tượng ưu tiên </option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row" style="padding:15px 0;">
                                <div class="col-md-12">
                                    <p style="color:#dd4b39;">Lưu ý: Mỗi CMTND chỉ được lưu 1 lần, vui lòng kiểm tra kỹ các thông
                                        tin trước khi đăng ký. </p>
            
                                    <div class="col-md-3 form-group pull-right">
                                        <input required  type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
                                    </div>
            
            
                                </div>
            
                            </div> -->
                </div>
                <div class="col-md-12 form-group">
                    <div class="col-md-12 endl">
                        <p style="color:#dd4b39;margin-bottom:0;">Lưu ý: Mỗi CMTND chỉ được lưu 1 lần, vui lòng kiểm tra kỹ các thông
                            tin trước khi đăng ký. </p>
                        <div class="col-md-3 form-group">
                            <input required type="submit" name="ok" value="Lưu thông tin"
                                class="btn btn-primary btn-block" id="luuthongtin">
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</main>



<div id="back-to-top">
    <i class="fas fa-chevron-up"></i>
</div>