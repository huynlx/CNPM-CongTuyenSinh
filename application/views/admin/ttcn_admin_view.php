<div class="me-TTCN mt-1">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="d-none d-lg-block col-lg-5 text-center">
            <img src="<?php echo base_url() ?>assets/img/ttcn.png"  style="max-height:650px;">
        </div>
        <div class="col-lg-5 mt-4">
            <div class="row register-form">
            <form class="" method="post" action="<?php echo base_url() . 'index.php/home/pro_ttcn/' .$user['id_tk']; ?>" style="padding: 0; margin: 0; width: 100%">
                    <h2 class="text-center">Thông Tin Cá Nhân</h2>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">ID</label></div>
                        <div class="col-sm-6 input-column"><input name="id" class="form-control" type="text" value="<?php echo $user['id_tk'];?>" readonly></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Tên Đăng Nhập</label></div>
                        <div class="col-sm-6 input-column"><input name="tk" class="form-control" type="text" value="<?php echo $user['ten_dang_nhap'];?>" readonly></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Mật Khẩu</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control hide-update" type="text" name="mk" value="<?php echo $user['mat_khau'];?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Họ Tên</label></div>
                        <div class="col-sm-6 input-column"><input name="ht" class="form-control hide-update" type="text" value="<?php echo $user['ho_ten_tk'];?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Giới Tính</label></div>
                        <div class="col-sm-6">
                            <div class="Sex">
                                <div class="form-check"><input class="form-check-input hide-update" type="radio" name="gt" value="Nam" checked><label class="form-check-label hide-update">Nam</label></div>
                                <div class="form-check"><input class="form-check-input hide-update" type="radio" name="gt" value="Nữ" <?php if ($user['gioi_tinh_tk'] === "Nữ")echo "checked";?>><label class="form-check-label hide-update">Nữ</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Email</label></div>
                        <div class="col-sm-6 input-column"><input name="email" class="form-control hide-update" type="text" value="<?php echo $user['email_tk'];?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Ngày Sinh</label></div>
                        <div class="col-sm-6 input-column"><input name="ns" class="form-control hide-update" type="date" value="<?php echo $user['ngay_sinh_tk'];?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Số Điện Thoại</label></div>
                        <div class="col-sm-6 input-column"><input name="sdt" class="form-control hide-update" type="text" value="<?php echo $user['sdt_tk'];?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Địa Chỉ</label></div>
                        <div class="col-sm-6 input-column"><input name="dc" class="form-control hide-update" type="text" value="<?php echo $user['dia_chi_tk'];?>"></div>
                    </div>
                    <input class="btn btn-light submit-button hide-update border " type="submit" value="Cập Nhật">
                </form>
                <?php echo validation_errors(); ?>
            </div>
        </div>
    </div>
</div>

