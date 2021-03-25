<div class="me-TTCN mt-1">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="d-none d-lg-block col-lg-5 text-center">
            <img src="https://i.pinimg.com/564x/42/f5/81/42f58180812f93d8eb09b94e959103a2.jpg" class="w-75 h-auto" style="max-height:650px;">
        </div>
        <div class="col-lg-5 mt-4">
            <div class="row register-form">
                <form action="<?php echo base_url(); ?>index.php/admin/pro_edit_user/<?php echo $user['id_tk']; ?>" method="post" class="custom-form" style="padding: 0; margin: 0; width: 100%">
                    <h2 class="text-center">Sửa Tài Khoản</h2>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">ID</label></div>
                        <div class="col-sm-6 input-column"><input name="id" class="form-control" type="text" value="<?php echo $user['id_tk']; ?>" readonly></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Tên Đăng Nhập</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="text" name="tk" readonly value="<?php echo $user['ten_dang_nhap']; ?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Mật Khẩu</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="text" name="mk" value="<?php echo $user['mat_khau']; ?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Họ Tên</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="text" name="ht" value="<?php echo $user['ho_ten_tk']; ?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Giới Tính</label></div>
                        <div class="col-lg-4 col-md-4 label-column">
                            <div class="Sex">
                                <div class="form-check-inline"><input class="form-check-input" type="radio" name="gt" value="Nam" checked><label class="form-check-label">Nam</label></div>
                                <div class="form-check-inline"><input class="form-check-input" type="radio" name="gt" value="Nữ" <?php if ($user['gioi_tinh_tk'] === "Nữ") echo "checked"; ?>><label class="form-check-label">Nữ</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Email</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="text" name="email" value="<?php echo $user['email_tk']; ?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Ngày Sinh</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="date" name="ns" value="<?php echo $user['ngay_sinh_tk']; ?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Số Điện Thoại</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="tel" name="sdt" value="<?php echo $user['sdt_tk']; ?>"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label" for="repeat-pawssword-input-field">Địa Chỉ</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="text" name="dc" value="<?php echo $user['dia_chi_tk']; ?>"></div>
                    </div>
                    <div class="w-100 text-center">
                    <input class="btn btn-primary" type="submit" value="Lưu">
                    </div>
                </form>
                <?php echo validation_errors(); ?>
            </div>
        </div>
    </div>
</div>