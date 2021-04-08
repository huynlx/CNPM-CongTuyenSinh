<div class="content">
    <div class="col-md-6 add-dm">
        <h4 class="text-center"><b>Thêm Hồ Sơ Xét Tuyển</b></h4>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_hsxt'); ?>
    <div class="form">
        <div class="row">
            <div class="col-md-9">
                <div class="form-group">
                    <label for="" class="title__ip">Họ, chữ đệm và tên của thí sinh:</label>
                    <input required  type="text" class="form-control"   name="ht"
                        placeholder="Họ, chữ đệm và tên của thí sinh">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="" class="title__ip">Giới tính:</label>
                    <select required  id="input" class="form-control" name="gt">
                        <option value="">Chọn giới tính</option>
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
                    <input required  type="date" name="ngaythangnamsinh" id="ngaythangnamsinh" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Nơi sinh:</label>
                    <select required  id="selNoiSinhAddHsxt" name="noisinh" class="form-control">
                        <option value="">Chọn nơi sinh</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Dân tộc:</label>
                    <select required  id="selDanTocAddHsxt" name="dantoc" class="form-control">
                        <option value="">Chọn dân tộc</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Chứng minh thư nhân dân:</label>
                    <input required  type="text" class="form-control" name="socmnd" 
                        placeholder="Số chứng minh thư nhân dân hoặc căn cước công dân">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Ngày cấp:</small> </label>
                    <input required  type="date" name="ngaycap" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Nơi cấp:<small>(ghi theo cmnd/cccd)</small> </label>
                    <input required  type="text" class="form-control"  name="noicap">
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
                    <select required  id="selTinhThanhPhoAddHsxt" name="tinhthanhpho" class="form-control">
                        <option value="">Chọn tỉnh thành phố</option>

                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Quận/huyện:</label>
                    <select required  id="selQuanHuyenAddHsxt" name="quanhuyen" class="form-control">
                        <option value="">Chọn quận huyện</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Xã/phường:</label>
                    <input required  type="text" class="form-control" name="phuongthixa" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="" class="title__ip">Thôn/bản/đường phố:</label>
                    <input required  type="text" class="form-control"  name="thonbanduongpho">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <p><b>Nơi học lớp 10 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và
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
                    <select required  id="selTinhThanhPhoLop10AddHsxt" name="tinhthanhpholop10" class="form-control">
                        <option value="">Chọn tỉnh thành phố</option>

                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Quận/huyện:</label>
                    <select required  id="selQuanHuyenLop10AddHsxt" name="quanhuyenlop10" class="form-control">
                        <option value="">Chọn quận huyện</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Trường THPT:</label>
                    <select required  id="selTruongThptLop10AddHsxt" name="truongthptlop10" class="form-control">
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
                    <p><b>Nơi học lớp 11 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và
                        ghi mã tỉnh, mã trường)</p>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Tỉnh/TP:</label>
                    <select required  id="selTinhThanhPhoLop11AddHsxt" name="tinhthanhpholop11" class="form-control">
                        <option value="">Chọn tỉnh thành phố</option>

                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Quận/huyện:</label>
                    <select required  id="selQuanHuyenLop11AddHsxt" name="quanhuyenlop11" class="form-control">
                        <option value="">Chọn quận huyện</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Trường THPT:</label>
                    <select required  id="selTruongThptLop11AddHsxt" name="truongthptlop11" class="form-control">
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
                    <p><b>Nơi học lớp 12 THPT</b>(Ghi tên trường và nơi trường đóng: huyện (quận), tỉnh (thành phố) và
                        ghi mã tỉnh, mã trường)</p>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Tỉnh/TP:</label>
                    <select required  id="selTinhThanhPhoLop12AddHsxt" name="tinhthanhpholop12" class="form-control">
                        <option value="">Chọn tỉnh thành phố</option>

                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Quận/huyện:</label>
                    <select required  id="selQuanHuyenLop12AddHsxt" name="quanhuyenlop12" class="form-control">
                        <option value="">Chọn quận huyện</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Trường THPT:</label>
                    <select required  id="selTruongThptLop12AddHsxt" name="truongthptlop12" class="form-control">
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
                    <input required  type="text" class="form-control" name="sdt"  placeholder="Điện thoại liên lạc">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="" class="title__ip">Email:</label>
                    <input required  type="email" class="form-control" name="email"  placeholder="Email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Năm tốt nghiệp:</label>
                    <!-- <select required   id="input" class="form-control" >
                                            <option value=""></option>
                                            <option value="">2020</option>
                                            <option value="">2021</option>
                                        </select> -->
                    <input required  type="text" name="namtotnghiep" class="form-control"  placeholder="Năm tốt nghiệp">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="" class="title__ip">Khu vực ưu tiên:</label>
                    <select required  id="input" name="khuvucuutien" class="form-control">
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
                    <select required   id="input" name="doituonguutien" class="form-control">
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

    </div>
    <div class="col-md-3 form-group pull-right">
        <input required  type="submit" name="ok" value="Thêm" class="btn btn-primary btn-block">
    </div>
    </form>
    <?php echo validation_errors();?>
</div>