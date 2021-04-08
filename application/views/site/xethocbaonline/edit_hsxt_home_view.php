<div id="header" class="header-nguyenvong" style="box-shadow: 1px 4px 7px #ccc;">
    <div class="container">
        <div class="header__wrapp">
            <div class="header__left">
                <div id="logo">
                    <img src="<?php echo base_url();?>asset/image/logo/Logo-Thuy_Loi.png" alt="">
                </div>
            </div>
            <div class="header__right">
                <div class="name-school">
                    <p>PHIẾU ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC CHÍNH QUY <br>
                        (Dành cho thí sinh xét tuyển bằng học bạ)
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main">
    <div class="container">
        <div class="txt-center">
            <h1>
                PHIẾU ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC CHÍNH QUY
            </h1>
            <small>(Dành cho thí sinh xét tuyển bằng học bạ)</small>
        </div>
        <div class="process">
            <ul class="list_process">
                <li class="num active">
                    <p> Khai báo thông tin thí sinh</p>
                </li>
                <li class="num">
                    <p>Đăng ký nguyện vọng</p>
                </li>
                <li class="num">
                    <p>Nộp tài liệu minh chứng</p>
                </li>
                <li class="num">
                    <p>Hoàn thành hồ sơ</p>
                </li>
            </ul>
        </div>
        <!-- <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6"></div>
                    <div class="col-sm-6 float-right">
                        <p>
                            <strong>Tìm kiếm</strong>
                        </p>
                        <hr>
                        <div class="Search_tt">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Số CMND">
                            </div>
                            <div class="form-group" style="display:flex;">
                                <input type="text" class="form-control" placeholder="Mã số thí sinh">
                                <button type="submit" class="btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div> -->


        <div class="content">

            <?php echo form_open_multipart('/home/pro_add_hsxt'); ?>
            <input type="hidden" id="ma_hsxt" name="ma_hsxt" value="<?php echo $ma_hsxt["ma_hsxt"]; ?>">
            <div class="form">
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="" class="title__ip">Họ, chữ đệm và tên của thí sinh:</label>
                            <input type="text" class="form-control" id="" required="required" name="ht"
                                placeholder="Họ, chữ đệm và tên của thí sinh" value="<?php echo $ts['ho_ten_ts'] ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="title__ip">Giới tính:</label>
                            <select id="input" class="form-control" name="gt">
                                <option value="" selected>Chọn giới tính</option>
                                <option value="Nam" <?php if ($ts['gioi_tinh_ts'] === "Nam")echo "selected";?>>Nam
                                </option>
                                <option value="Nữ" <?php if ($ts['gioi_tinh_ts'] === "Nữ")echo "selected";?>>Nữ</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Ngày/tháng/năm sinh:</label>
                            <input type="date" name="ngaythangnamsinh" id="ngaythangnamsinh"
                                value="<?php echo $ts['ngay_sinh_ts']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Nơi sinh:</label>
                            <select id="selNoiSinhAddHsxt" name="noisinh" class="form-control">
                                <option value="<?php echo $ts['noi_sinh_ts']; ?>" selected>
                                    <?php echo $ts['noi_sinh_ts']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Dân tộc:</label>
                            <select id="selDanTocAddHsxt" name="dantoc" class="form-control">
                                <option value="<?php echo $ts['dan_toc_ts']; ?>" selected>
                                    <?php echo $ts['dan_toc_ts']; ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Chứng minh thư nhân dân:</label>
                            <input type="text" class="form-control" name="socmnd" id=""
                                placeholder="Số chứng minh thư nhân dân hoặc căn cước công dân"
                                value="<?php echo $ts['so_cmnd_cccd_ts']; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Ngày cấp:</small> </label>
                            <input type="date" name="ngaycap" class="form-control"
                                value="<?php echo $ts['ngay_cap']; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Nơi cấp:<small>(ghi theo cmnd/cccd)</small> </label>
                            <input type="text" class="form-control" id="" name="noicap"
                                value="<?php echo $ts['noi_cap']; ?>">
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
                            <select id="selTinhThanhPhoAddHsxt" name="tinhthanhpho" class="form-control">
                                <option value="<?php echo $ts['ho_khau_tinh_thanh_pho']; ?>" selected>
                                    <?php echo $ts['ho_khau_tinh_thanh_pho']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Quận/huyện:</label>
                            <select id="selQuanHuyenAddHsxt" name="quanhuyen" class="form-control">
                                <option value="<?php echo $ts['ho_khau_quan_huyen']; ?>" selected>
                                    <?php echo $ts['ho_khau_quan_huyen']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Xã/phường:</label>
                            <input type="text" class="form-control" name="phuongthixa" id=""
                                value="<?php echo $ts['ho_khau_xa_phuong']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="title__ip">Thôn/bản/đường phố:</label>
                            <input type="text" class="form-control" id="" name="thonbanduongpho"
                                value="<?php echo $ts['ho_khau_thon_ban_duong_pho']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <p><b>Nơi học lớp 10 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành
                                phố) và
                                ghi mã tỉnh, mã trường)</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <!-- Lớp 10 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Tỉnh/TP:</label>
                            <select id="selTinhThanhPhoLop10AddHsxt" name="tinhthanhpholop10" class="form-control">
                                <option value="<?php echo $ts['tinh_tp_lop_10']; ?>" selected>
                                    <?php echo $ts['tinh_tp_lop_10']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Quận/huyện:</label>
                            <select id="selQuanHuyenLop10AddHsxt" name="quanhuyenlop10" class="form-control">
                                <option value="<?php echo $ts['quan_huyen_lop_10']; ?>" selected>
                                    <?php echo $ts['quan_huyen_lop_10']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Trường THPT:</label>
                            <select id="selTruongThptLop10AddHsxt" name="truongthptlop10" class="form-control">
                                <option value="<?php echo $ts['truong_lop_10']; ?>" selected>
                                    <?php echo $ts['truong_lop_10']; ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- END 10 -->

                <!-- Lớp 11 -->
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <p><b>Nơi học lớp 11 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành
                                phố) và
                                ghi mã tỉnh, mã trường)</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Tỉnh/TP:</label>
                            <select id="selTinhThanhPhoLop11AddHsxt" name="tinhthanhpholop11" class="form-control">
                                <option value="<?php echo $ts['tinh_tp_lop_11']; ?>" selected>
                                    <?php echo $ts['tinh_tp_lop_11']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Quận/huyện:</label>
                            <select id="selQuanHuyenLop11AddHsxt" name="quanhuyenlop11" class="form-control">
                                <option value="<?php echo $ts['quan_huyen_lop_11']; ?>" selected>
                                    <?php echo $ts['quan_huyen_lop_11']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Trường THPT:</label>
                            <select id="selTruongThptLop11AddHsxt" name="truongthptlop11" class="form-control">
                                <option value="<?php echo $ts['truong_lop_11']; ?>" selected>
                                    <?php echo $ts['truong_lop_11']; ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- END 11 -->

                <!-- Lớp 12 -->
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <p><b>Nơi học lớp 12 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành
                                phố) và
                                ghi mã tỉnh, mã trường)</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Tỉnh/TP:</label>
                            <select id="selTinhThanhPhoLop12AddHsxt" name="tinhthanhpholop12" class="form-control">
                                <option value="<?php echo $ts['tinh_tp_lop_12']; ?>" selected>
                                    <?php echo $ts['tinh_tp_lop_12']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Quận/huyện:</label>
                            <select id="selQuanHuyenLop12AddHsxt" name="quanhuyenlop12" class="form-control">
                                <option value="<?php echo $ts['quan_huyen_lop_12']; ?>" selected>
                                    <?php echo $ts['quan_huyen_lop_12']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Trường THPT:</label>
                            <select id="selTruongThptLop12AddHsxt" name="truongthptlop12" class="form-control">
                                <option value="<?php echo $ts['truong_lop_12']; ?>" selected>
                                    <?php echo $ts['truong_lop_12']; ?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- END 12 -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="title__ip">Điện thoại liên lạc:</label>
                            <input type="text" class="form-control" name="sdt" id="" placeholder="Điện thoại liên lạc"
                                value="<?php echo $ts['sdt_ts']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="title__ip">Email:</label>
                            <input type="text" class="form-control" name="email" id="" placeholder="Email"
                                value="<?php echo $ts['email_ts']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Năm tốt nghiệp:</label>
                            <!-- <select name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">2020</option>
                                            <option value="">2021</option>
                                        </select> -->
                            <input type="text" class="form-control" id="" placeholder="Năm tốt nghiệp"
                                value="<?php echo $ts['nam_tot_nghiep_ts']; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Khu vực ưu tiên:</label>
                            <select id="input" name="khuvucuutien" class="form-control">
                                <option value="" selected>Chọn khu vực</option>
                                <option value="KV1" <?php if ($ts['khu_vuc_uu_tien'] === "KV1")echo "selected";?>>KV1
                                </option>
                                <option value="KV2" <?php if ($ts['khu_vuc_uu_tien'] === "KV2")echo "selected";?>>KV2
                                </option>
                                <option value="KV2 - NT"
                                    <?php if ($ts['khu_vuc_uu_tien'] === "KV2 - NT")echo "selected";?>>KV2 - NT</option>
                                <option value="KV3" <?php if ($ts['khu_vuc_uu_tien'] === "KV3")echo "selected";?>>KV3
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Đối tượng ưu tiên (nếu có):</label>
                            <select id="input" name="doituonguutien" class="form-control">
                                <option value="" selected>Đối tượng ưu tiên </option>
                                <option value="01" <?php if ($ts['doi_tuong_uu_tien'] === "01")echo "selected";?>>01
                                </option>
                                <option value="02" <?php if ($ts['doi_tuong_uu_tien'] === "02")echo "selected";?>>02
                                </option>
                                <option value="03" <?php if ($ts['doi_tuong_uu_tien'] === "03")echo "selected";?>>03
                                </option>
                                <option value="04" <?php if ($ts['doi_tuong_uu_tien'] === "04")echo "selected";?>>04
                                </option>
                                <option value="05" <?php if ($ts['doi_tuong_uu_tien'] === "05")echo "selected";?>>05
                                </option>
                                <option value="06" <?php if ($ts['doi_tuong_uu_tien'] === "06")echo "selected";?>>06
                                </option>
                                <option value="07" <?php if ($ts['doi_tuong_uu_tien'] === "07")echo "selected";?>>07
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3 form-group pull-right">
                <input type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
            </div>
            </form>
            <?php echo validation_errors();?>



            <div class="form">


                <div class="col">
                    <!--    -->
                    <div ng-show="item.Id>0">
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="admission-title" id="aspire">
                                    <h4><i class="fa fa-info-circle" aria-hidden="true"></i> THÔNG TIN ĐĂNG KÝ XÉT TUYỂN
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <!--Begin Nguyện vọng-->
                        <div class="row">
                            <div class="col-md-12" ng-show="item.aspirationDtos.length>0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div style="padding-top:10px;margin-bottom: 15px;"
                                            class="form-group has-success">
                                            <label><i class="fa fa-check" aria-hidden="true"></i> Kết quả đăng ký
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="padding-top:10px;margin-bottom: 15px;" class="pull-right">
                                            <label ng-show="!ViewChangeAspire" ng-click="ShowChangeAspire()"
                                                ng-if="item.ProgressStep<4"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i> Thay đổi nguyện vọng</label>
                                            <label ng-show="ViewChangeAspire" ng-click="SaveChangeAspire()"
                                                ng-if="item.ProgressStep<4"><i class="fa fa-floppy-o"
                                                    aria-hidden="true"></i> Lưu thay đổi</label>
                                        </div>
                                    </div>
                                </div>

                                <table id="myTable" class="table table-hover">
                                    <tr style="background-color: bisque;">

                                        <th>Nguyện vọng</th>
                                        <th>Mã xét tuyển</th>

                                        <th>Tổ hợp xét tuyển</th>
                                        <th>Trạng thái</th>
                                        <th>#</th>
                                    </tr>
                                    <tr ng-repeat="nv in item.aspirationDtos">

                                        <td>
                                            <span ng-bind-html="'Nguyện vọng '+nv.AspirationOrder"
                                                ng-show="!ViewChangeAspire"></span>
                                            <input type="number" max="20" class="form-control"
                                                ng-model="nv.AspirationOrder" style="width:75px"
                                                ng-show="ViewChangeAspire">
                                        </td>
                                        <td ng-bind-html="nv.ProgramCode"></td>
                                        <td ng-bind-html="nv.CombinCode"></td>
                                        <td>
                                            <!-- <span class="label label-success" ng-show="nv.IsApproved==1">Đã duyệt</span>
                                <span class="label label-danger" ng-show="nv.IsApproved==2">Không được duyệt</span>
                                <span class="label label-primary" ng-show="nv.IsApproved==0">Đã nhận</span> -->
                                        </td>
                                        <td>
                                            <a ng-click="EditItem(nv)" style="cursor:pointer" title="Sửa nguyện vọng"
                                                ng-if="item.ProgressStep<4">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;"
                                    ng-click="ShowAspire()" ng-show="!ViewAspireForm">
                                    <label id="themnguyenvongdangky">+Thêm nguyện vọng đăng ký</label>
                                </div>
                                <!-- <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;" ng-click="HiddenAspire()" ng-show="ViewAspireForm">
        <label><i class="fa fa-minus" aria-hidden="true"></i> Thêm nguyện vọng đăng ký</label>
    </div> -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
