<div id="main">
    <div class="container">
        <div class="txt-center">
            <h1>
                PHIẾU ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC CHÍNH QUY
            </h1>
            <small>(Dành cho thí sinh xét tuyển bằng học bạ)</small>
        </div>




        <div class="content">

            <?php echo form_open_multipart('/home/pro_add_hsxt'); ?>
            <!-- <input disabled="true" type="hidden" id="ma_hsxt" name="ma_hsxt" value="<?php echo $ma_hsxt["ma_hsxt"]; ?>"> -->
            <div class="form">
                <div class="row">
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="" class="title__ip">Họ, chữ đệm và tên của thí sinh:</label>
                            <input disabled="true" readonly type="text" class="form-control" id="" required="required" name="ht" placeholder="Họ, chữ đệm và tên của thí sinh" value="<?php echo $ts['ho_ten_ts'] ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="" class="title__ip">Giới tính:</label>
                            <select disabled="true" disabled="true" id="input" class="form-control" name="gt">
                                <!-- <option value="" selected>Chọn giới tính</option> -->
                                <option value="Nam" <?php if ($ts['gioi_tinh_ts'] === "Nam") echo "selected"; ?>>Nam
                                </option>
                                <option value="Nữ" <?php if ($ts['gioi_tinh_ts'] === "Nữ") echo "selected"; ?>>Nữ
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Ngày/tháng/năm sinh:</label>
                            <input disabled="true" disabled="true" type="date" name="ngaythangnamsinh" id="ngaythangnamsinh" value="<?php echo $ts['ngay_sinh_ts']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Nơi sinh:</label>
                            <select disabled="true" disabled="true" id="selNoiSinhAddHsxt" name="noisinh" class="form-control">
                                <option value="<?php echo $ts['noi_sinh_ts']; ?>" selected>
                                    <?php echo $ts['noi_sinh_ts']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Dân tộc:</label>
                            <select disabled="true" disabled="true" id="selDanTocAddHsxt" name="dantoc" class="form-control">
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
                            <input disabled="true" disabled="true" type="text" class="form-control" name="socmnd" id="" placeholder="Số chứng minh thư nhân dân hoặc căn cước công dân" value="<?php echo $ts['so_cmnd_cccd_ts']; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Ngày cấp:</small> </label>
                            <input disabled="true" type="date" name="ngaycap" class="form-control" value="<?php echo $ts['ngay_cap']; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Nơi cấp:<small>(ghi theo cmnd/cccd)</small> </label>
                            <input disabled="true" type="text" class="form-control" id="" name="noicap" value="<?php echo $ts['noi_cap']; ?>">
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
                            <select disabled="true" disabled="true" id="selTinhThanhPhoAddHsxt" name="tinhthanhpho" class="form-control">
                                <option value="<?php echo $ts['ho_khau_tinh_thanh_pho']; ?>" selected>
                                    <?php echo $ts['ho_khau_tinh_thanh_pho']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Quận/huyện:</label>
                            <select disabled="true" id="selQuanHuyenAddHsxt" name="quanhuyen" class="form-control">
                                <option value="<?php echo $ts['ho_khau_quan_huyen']; ?>" selected>
                                    <?php echo $ts['ho_khau_quan_huyen']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Xã/phường:</label>
                            <input disabled="true" type="text" class="form-control" name="phuongthixa" id="" value="<?php echo $ts['ho_khau_xa_phuong']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="title__ip">Thôn/bản/đường phố:</label>
                            <input disabled="true" type="text" class="form-control" id="" name="thonbanduongpho" value="<?php echo $ts['ho_khau_thon_ban_duong_pho']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <p><b>Nơi học lớp 10 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh
                                (thành phố) và
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
                            <select disabled="true" id="selTinhThanhPhoLop10AddHsxt" name="tinhthanhpholop10" class="form-control">
                                <option value="<?php echo $ts['tinh_tp_lop_10']; ?>" selected>
                                    <?php echo $ts['tinh_tp_lop_10']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Quận/huyện:</label>
                            <select disabled="true" id="selQuanHuyenLop10AddHsxt" name="quanhuyenlop10" class="form-control">
                                <option value="<?php echo $ts['quan_huyen_lop_10']; ?>" selected>
                                    <?php echo $ts['quan_huyen_lop_10']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Trường THPT:</label>
                            <select disabled="true" id="selTruongThptLop10AddHsxt" name="truongthptlop10" class="form-control">
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
                            <p><b>Nơi học lớp 11 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh
                                (thành phố) và
                                ghi mã tỉnh, mã trường)</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Tỉnh/TP:</label>
                            <select disabled="true" id="selTinhThanhPhoLop11AddHsxt" name="tinhthanhpholop11" class="form-control">
                                <option value="<?php echo $ts['tinh_tp_lop_11']; ?>" selected>
                                    <?php echo $ts['tinh_tp_lop_11']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Quận/huyện:</label>
                            <select disabled="true" id="selQuanHuyenLop11AddHsxt" name="quanhuyenlop11" class="form-control">
                                <option value="<?php echo $ts['quan_huyen_lop_11']; ?>" selected>
                                    <?php echo $ts['quan_huyen_lop_11']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Trường THPT:</label>
                            <select disabled="true" id="selTruongThptLop11AddHsxt" name="truongthptlop11" class="form-control">
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
                            <p><b>Nơi học lớp 12 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh
                                (thành phố) và
                                ghi mã tỉnh, mã trường)</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Tỉnh/TP:</label>
                            <select disabled="true" id="selTinhThanhPhoLop12AddHsxt" name="tinhthanhpholop12" class="form-control">
                                <option value="<?php echo $ts['tinh_tp_lop_12']; ?>" selected>
                                    <?php echo $ts['tinh_tp_lop_12']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Quận/huyện:</label>
                            <select disabled="true" id="selQuanHuyenLop12AddHsxt" name="quanhuyenlop12" class="form-control">
                                <option value="<?php echo $ts['quan_huyen_lop_12']; ?>" selected>
                                    <?php echo $ts['quan_huyen_lop_12']; ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Trường THPT:</label>
                            <select disabled="true" id="selTruongThptLop12AddHsxt" name="truongthptlop12" class="form-control">
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
                            <input disabled="true" type="text" class="form-control" name="sdt" id="" placeholder="Điện thoại liên lạc" value="<?php echo $ts['sdt_ts']; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="title__ip">Email:</label>
                            <input disabled="true" type="text" class="form-control" name="email" id="" placeholder="Email" value="<?php echo $ts['email_ts']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Năm tốt nghiệp:</label>
                            <!-- <select disabled="true" name="" id="input" class="form-control" required="required">
                                            <option value=""></option>
                                            <option value="">2020</option>
                                            <option value="">2021</option>
                                        </select> -->
                            <input disabled="true" type="text" class="form-control" id="" placeholder="Năm tốt nghiệp" value="<?php echo $ts['nam_tot_nghiep_ts']; ?>">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Khu vực ưu tiên:</label>
                            <select disabled="true" id="input" name="khuvucuutien" class="form-control">
                                <option value="" selected>Chọn khu vực</option>
                                <option value="KV1" <?php if ($ts['khu_vuc_uu_tien'] === "KV1") echo "selected"; ?>>
                                    KV1</option>
                                <option value="KV2" <?php if ($ts['khu_vuc_uu_tien'] === "KV2") echo "selected"; ?>>
                                    KV2</option>
                                <option value="KV2 - NT" <?php if ($ts['khu_vuc_uu_tien'] === "KV2 - NT") echo "selected"; ?>>KV2 - NT
                                </option>
                                <option value="KV3" <?php if ($ts['khu_vuc_uu_tien'] === "KV3") echo "selected"; ?>>
                                    KV3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="" class="title__ip">Đối tượng ưu tiên (nếu có):</label>
                            <select disabled="true" id="input" name="doituonguutien" class="form-control">
                                <option value="" selected>Đối tượng ưu tiên </option>
                                <option value="01" <?php if ($ts['doi_tuong_uu_tien'] === "01") echo "selected"; ?>>01
                                </option>
                                <option value="02" <?php if ($ts['doi_tuong_uu_tien'] === "02") echo "selected"; ?>>02
                                </option>
                                <option value="03" <?php if ($ts['doi_tuong_uu_tien'] === "03") echo "selected"; ?>>03
                                </option>
                                <option value="04" <?php if ($ts['doi_tuong_uu_tien'] === "04") echo "selected"; ?>>04
                                </option>
                                <option value="05" <?php if ($ts['doi_tuong_uu_tien'] === "05") echo "selected"; ?>>05
                                </option>
                                <option value="06" <?php if ($ts['doi_tuong_uu_tien'] === "06") echo "selected"; ?>>06
                                </option>
                                <option value="07" <?php if ($ts['doi_tuong_uu_tien'] === "07") echo "selected"; ?>>07
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="col-md-3 form-group pull-right">
        <input disabled="true" type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
    </div> -->
            </form>
            <?php echo validation_errors(); ?>


            <div class="form mt-3">


                <div class="col">
                    <!--    -->
                    <div ng-show="item.Id>0">
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <div class="admission-title" id="aspire">
                                    <h4><i class="fa fa-info-circle" aria-hidden="true"></i> THÔNG TIN ĐĂNG KÝ XÉT
                                        TUYỂN</h4>
                                </div>
                            </div>
                        </div>

                        <!--Begin Nguyện vọng-->
                        <div class="row">
                            <div class="col-md-12" ng-show="item.aspirationDtos.length>0">
                                <div class="row m-0">
                                    <div class="col-md-6 pl-0">
                                        <div style="padding-top:10px;margin-bottom: 15px;" class="form-group has-success">
                                            <label><i class="fa fa-check" aria-hidden="true"></i> Kết quả đăng ký
                                            </label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                            <div style="padding-top:10px;margin-bottom: 15px;" class="pull-right">
                                                <label ng-show="!ViewChangeAspire" ng-click="ShowChangeAspire()"
                                                    ng-if="item.ProgressStep<4"><i class="fa fa-pencil"
                                                        aria-hidden="true"></i> Thay đổi nguyện vọng</label>
                                                <label ng-show="ViewChangeAspire" ng-click="SaveChangeAspire()"
                                                    ng-if="item.ProgressStep<4"><i class="fa fa-floppy-o"
                                                        aria-hidden="true"></i> Lưu thay đổi</label>
                                            </div>
                                        </div> -->
                                </div>

                                <table id="myTable" class="table table-hover">
                                    <tr style="background-color: bisque;">

                                        <th>Nguyện vọng</th>
                                        <th>Mã xét tuyển</th>

                                        <th>Tổ hợp xét tuyển</th>
                                        <th>Trạng thái</th>
                                        <!-- <th>#</th> -->
                                    </tr>
                                    <!-- <tr ng-repeat="nv in item.aspirationDtos">

                                            <td>
                                                <span ng-bind-html="'Nguyện vọng '+nv.AspirationOrder"
                                                    ng-show="!ViewChangeAspire"></span>
                                                <input disabled="true" type="number" max="20" class="form-control"
                                                    ng-model="nv.AspirationOrder" style="width:75px"
                                                    ng-show="ViewChangeAspire">
                                            </td>
                                            <td ng-bind-html="nv.ProgramCode"></td>
                                            <td ng-bind-html="nv.CombinCode"></td>
                                            <td>
                                                <!-- <span class="label label-success" ng-show="nv.IsApproved==1">Đã duyệt</span>
                                <span class="label label-danger" ng-show="nv.IsApproved==2">Không được duyệt</span>
                                <span class="label label-primary" ng-show="nv.IsApproved==0">Đã nhận</span> -->
                                    <!-- </td>
                                            <td>
                                                <a ng-click="EditItem(nv)" style="cursor:pointer"
                                                    title="Sửa nguyện vọng" ng-if="item.ProgressStep<4">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>  -->
                                    <tbody>
                                        <?php foreach ($listNv as $row) { ?>
                                            <tr class="w3-animate-left">
                                                <!-- <td align="center">
                            <a class="btn btn-default" href="<?php echo base_url(); ?>index.php/admin/edit_csdt/<?php echo $row['ma_csdt']; ?>"><em class="fa fa-pencil"></em></a>
                            <br>
                            <a class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url(); ?>index.php/admin/delete_csdt/<?php echo $row['ma_csdt']; ?>"><em class="fa fa-trash"></em></a>
                        </td> -->
                                                <td>Nguyện vọng <?php echo $row['ten_nguyen_vong']; ?></td>
                                                <td><?php echo $row['ma_ndt']; ?></td>
                                                <td><?php echo $row['ma_thm']; ?></td>
                                                <td><?php echo $row['trang_thai']; ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row">

                            <!-- <div class="col-md-12">
                                    <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;"
                                        ng-click="ShowAspire()" ng-show="!ViewAspireForm">
                                        <label id="themnguyenvongdangky">+Thêm nguyện vọng đăng ký</label>
                                    </div>
                                    <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;" ng-click="HiddenAspire()" ng-show="ViewAspireForm">
        <label><i class="fa fa-minus" aria-hidden="true"></i> Thêm nguyện vọng đăng ký</label>
    </div>
                                </div> -->



                            <div id="searchContent" style="display:none;">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <label>Cơ sở đào tạo :</label>
                                        <select disabled="true" name="coso" class="form-control" id="csdt_edit_ts">
                                            <?php
                                            foreach ($listCoSoDaoTao as $row) { ?>
                                                <option value="<?php echo $row["ma_csdt"]; ?>">
                                                    <?php echo $row["ma_csdt"] . ": " . $row["ten_csdt"]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <label>Nguyện vọng:</label>
                                        <!-- <select disabled="true" ng-model="item.Aspiration.AspirationOrder" ng-options="sc.Id as sc.Name for (key, sc) in MyAspiration" ng-change="AspirationChange(item.Aspiration.AspirationOrder,'')" class="form-control select2" style="width: 100%;" ng-disabled="item.ProgressStep==4">
        </select> -->
                                        <select disabled="true" name="" id="tennguyenvong" class="form-control" required="required">
                                            <option value="1">Nguyện vọng 1</option>
                                            <option value="2">Nguyện vọng 2</option>
                                            <option value="3">Nguyện vọng 3</option>
                                            <option value="4">Nguyện vọng 4</option>
                                            <option value="5">Nguyện vọng 5</option>
                                            <option value="6">Nguyện vọng 6</option>
                                            <option value="7">Nguyện vọng 7</option>
                                            <option value="8">Nguyện vọng 8</option>
                                            <option value="9">Nguyện vọng 9</option>
                                            <option value="10">Nguyện vọng 10</option>
                                            <option value="11">Nguyện vọng 11</option>
                                            <option value="12">Nguyện vọng 12</option>
                                            <option value="13">Nguyện vọng 13</option>
                                            <option value="14">Nguyện vọng 14</option>
                                            <option value="15">Nguyện vọng 15</option>
                                            <option value="16">Nguyện vọng 16</option>
                                            <option value="17">Nguyện vọng 17</option>
                                            <option value="18">Nguyện vọng 18</option>
                                            <option value="19">Nguyện vọng 19</option>
                                            <option value="20">Nguyện vọng 20</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4 col-12">
                                        <label>Nhóm ngành xét tuyển :</label>
                                        <!-- <select disabled="true" ng-model="item.Aspiration.ProgramCode" ng-options="sc.ProgramCode as sc.ProgramsName for (key, sc) in EducationBase.educationPrograms" class="form-control select2" style="width: 100%;" ng-disabled="item.ProgressStep==4">
        </select> -->
                                        <select disabled="true" name="nhomganh" class="form-control" id="nhomnganhxettuyen">
                                            <?php foreach ($listNhomNganh as $row) { ?>
                                                <option value="<?php echo $row["ma_ndt"]; ?>">
                                                    <?php echo $row["ten_ndt"]; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>

                                    </div>



                                    <div class="col-sm-4 col-12">
                                        <label>Mã xét tuyển :</label>
                                        <input disabled="true" id="maxettuyen" type="text" ng-model="item.Aspiration.ProgramCode" class="form-control" placeholder="mã xét tuyển" required disabled value="">




                                    </div>



                                    <div class="col-sm-4 col-12">
                                        <label>Tổ hợp xét tuyển:</label>
                                        <!-- <select disabled="true" ng-model="item.Aspiration.CombinCode" ng-options="sc.CombinCode as sc.CombinName for (key, sc) in AllCombination" ng-change="CombinationChange(item.Aspiration.CombinCode)" class="form-control select2" style="width: 100%;" ng-disabled="item.ProgressStep==4">
        </select> -->
                                        <select disabled="true" name="tohopxettuyen" class="form-control" id="tohopxettuyen">
                                            <?php foreach ($listToHopMon as $row) { ?>
                                                <option value="<?php echo $row["ma_thm"]; ?>">
                                                    <?php echo $row["ma_thm"]; ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                </div>
                                <!--Điểm lớp 10 THPT-->
                                <div class="row">
                                    <div class="col-sm-4 col-12">
                                        <label>Lớp 10 :</label><span ng-bind-html="CombinSubjectByCode[0].SubjectCode" id="mon1"></span>
                                        <input disabled="true" type="number" step="0.1" max="10" class="form-control" ng-model="item.Aspiration.GPA10_1" id="GPA10_1" placeholder="Điểm trung bình cả năm môn 1 {{CombinSubjectByCode[0].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[1].SubjectCode " id="mon2"></span>
                                        <input disabled="true" type="number" step="0.1" max="10" class="form-control" ng-model="item.Aspiration.GPA10_2" id="GPA10_2" placeholder="Điểm trung bình cả năm môn 2 {{CombinSubjectByCode[1].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[2].SubjectCode" id="mon3"></span>
                                        <input disabled="true" type="number" step="0.1" max="10" class="form-control" ng-model="item.Aspiration.GPA10_3" id="GPA10_3" placeholder="Điểm trung bình cả năm môn 3 {{CombinSubjectByCode[2].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
                                    </div>
                                </div>
                                <!--Điểm lớp 11 THPT-->
                                <div class="row">
                                    <div class="col-sm-4 col-12">
                                        <label>Lớp 11 :</label><span ng-bind-html="CombinSubjectByCode[0].SubjectCode" id="monlop111"></span>
                                        <input disabled="true" type="number" step="0.1" max="10" class="form-control" ng-model="item.Aspiration.GPA11_1" id="GPA11_1" placeholder="Điểm trung bình cả năm môn 1 {{CombinSubjectByCode[0].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[1].SubjectCode" id="monlop112"></span>
                                        <input disabled="true" type="number" step="0.1" max="10" class="form-control" ng-model="item.Aspiration.GPA11_2" id="GPA11_2" placeholder="Điểm trung bình cả năm môn 2 {{CombinSubjectByCode[1].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[2].SubjectCode" id="monlop113"></span>
                                        <input disabled="true" type="number" step="0.1" min="0" max="10" class="form-control" ng-model="item.Aspiration.GPA11_3" id="GPA11_3" placeholder="Điểm trung bình cả năm môn 3 {{CombinSubjectByCode[2].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
                                    </div>
                                </div>
                                <!--Điểm lớp 12 THPT-->
                                <div class="row">
                                    <div class="col-sm-4 col-12">
                                        <label>Lớp 12 :</label><span ng-bind-html="CombinSubjectByCode[0].SubjectCode" id="monlop121"></span>
                                        <input disabled="true" type="number" step="0.1" max="10" class="form-control" ng-model="item.Aspiration.GPA12_1" id="GPA12_1" placeholder="Điểm trung bình cả năm môn 1 {{CombinSubjectByCode[0].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[1].SubjectCode" id="monlop122"></span>
                                        <input disabled="true" type="number" step="0.1" max="10" class="form-control" ng-model="item.Aspiration.GPA12_2" id="GPA12_2" placeholder="Điểm trung bình cả năm môn 2 {{CombinSubjectByCode[1].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
                                    </div>
                                    <div class="col-sm-4 col-12">
                                        <label>&nbsp;</label><span ng-bind-html="CombinSubjectByCode[2].SubjectCode" id="monlop123"></span>
                                        <input disabled="true" type="number" step="0.1" max="10" class="form-control" ng-model="item.Aspiration.GPA12_3" id="GPA12_3" placeholder="Điểm trung bình cả năm môn 3 {{CombinSubjectByCode[2].SubjectCode}}" required ng-disabled="item.ProgressStep==4">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-3 form-group pull-right">
                                    <input disabled="true" id="btnNguyenVong" name="ok" value="Lưu nguyện vọng"
                                        class="btn btn-primary btn-block">
                                </div> -->
                            </form>




                            <!--Minh chứng-->
                            <div class="col-md-12" ng-show="item.aspirationDtos.length>0">
                                <div class="row m-0">
                                    <div style="padding-top:10px;margin-bottom: 15px;" class="form-group has-success">
                                        <label><i class="fa fa-check" aria-hidden="true"></i> Danh mục file minh
                                            chứng </label>
                                    </div>
                                    <table class="table table-bordered table-hover" style="background-color:white" ng-show="item.candidateAttachments.length>0">
                                        <tr style="background-color: bisque;">
                                            <!-- <th>TT</th> -->
                                            <th>Mô tả</th>
                                            <th>Tên file</th>
                                            <th>Dung lượng</th>
                                            <!-- <th>#</th> -->
                                        </tr>
                                        <!-- <tr ng-repeat="file in item.candidateAttachments">
                                                <td ng-bind="$index+1"></td>
                                                <td>
                                                    <input disabled="true" type="text" max="100" class="form-control"
                                                        ng-model="file.FileDescription" placeholder="Mô tả">
                                                </td>
                                                <td ng-bind="file.FileName"></td>

                                                <td ng-bind="file.FileSize/1024 + '(KB)'"></td>
                                                <td>
                                                    <a href="javascript:void(0)" class="text-red"
                                                        ng-click="DeleteAttachFile(file)" title="Xóa file"
                                                        ng-if="item.ProgressStep<4">
                                                        <i class="fa fa-trash-o"></i>
                                                    </a>
                                                </td>
                                            </tr> -->
                                        <tbody>
                                            <?php
                                            foreach ($listFmc as $row) { ?>

                                                <tr class="w3-animate-left">

                                                    <!-- <td><?php echo $row['ma_file_minh_chung']; ?></td> -->
                                                    <td><?php echo $row['mo_ta']; ?></td>
                                                    <td><?php echo $row['ten_file']; ?></td>
                                                    <td><?php echo $row['dung_luong']; ?></td>



                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;" ng-click="ShowAttachFile()" ng-show="!ViewAttachForm">
                                            <!-- <label id="labelnopkemfileminhchung">+Nộp kèm file minh chứng và hoàn
                                                    thành hồ sơ</label> -->
                                        </div>
                                        <!-- <div style="border-bottom:0px solid #AAA;padding-top:10px;margin-bottom: 15px;" ng-click="HiddenAttachFile()" ng-show="ViewAttachForm">
            <label><i class="fa fa-minus" aria-hidden="true"></i> Nộp kèm file minh chứng và hoàn thành hồ sơ</label>
        </div> -->
                                    </div>
                                </div>

                                <div id="nopkemfileminhchungDiv" style="display:none;">
                                    <div ng-show="ViewAttachForm" id="attachfile">

                                        <div class="row">
                                            <div class="col-md-12" style="padding-top: 30px;">
                                                <div>
                                                    Nộp kèm file minh chứng (ảnh chụp/scan: Phiếu ĐKXT, Học bạ hoặc
                                                    Đơn xác nhận KQ học tập, Giấy xác nhận hưởng chế độ ưu tiên nếu
                                                    có).
                                                </div>
                                                <div class="text-red">
                                                    Lưu ý: Chỉ chấp nhận file pdf, jpg, jpeg, png. Có thể đính kèm
                                                    nhiều file
                                                </div>
                                                <input disabled="true" type="file" id="fileAttach" ng-model="fileAttachs" ngf-select ngf-multiple="true" class="form-control" onchange="angular.element(this).scope().loadFile(this.files)" ng-disabled="item.ProgressStep==4" />
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row" style="padding-top:30px">
                                        <div class="col-sm-12 col-12">
                                            <div class="col-sm-3 col-12" style="padding-bottom:20px">
                                                <button type="button" ng-click="SaveAttachFile()" class="btn btn-block btn-primary btn-lg" style="height:40px;font-size:17px;text-transform:uppercase" ng-disabled="item.ProgressStep==4">
                                                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu file minh
                                                    chứng
                                                </button>
                                            </div>
                                            <div class="col-sm-3 col-12 pull-right" ng-if="item.ProgressStep>=3">
                                                <!--ng-if="item.ProgressStep>=3">-->
                                                <!--ng-disabled="item.ProgressStep==4"-->
                                                <button type="button" ng-click="Finish()" class="btn btn-block btn-primary btn-lg" style="height:40px;font-size:17px;text-transform:uppercase" ng-disabled="item.ProgressStep==4">
                                                    <i class="fa fa-check" aria-hidden="true"></i> Hoàn thành hồ sơ</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                </form>
                                <?php echo validation_errors(); ?>
                            </div>
                            <div id="back-to-top">
                                <i class="fas fa-chevron-up"></i>
                            </div>

                            </body>