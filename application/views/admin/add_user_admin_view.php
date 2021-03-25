<div class="me-TTCN mt-1" >
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="d-none d-lg-block col-lg-5 text-center">
            <img src="https://yt3.ggpht.com/dp42tS9h6DHEqcOkaBrTa1HqLCzfdvc3k80KczoAPBMyyZgP3pGyZcU2c6ez42VUCHvIil2iYQ=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" class="w-75 h-auto">
        </div>
        <div class="col-lg-5 mt-4">
            <div class="row register-form">
                <form action="<?php echo base_url(); ?>index.php/admin/pro_add_user" method="post" class="custom-form" style="padding: 0; margin: 0; width: 100%">
                    <h2 class="title_form text-center">Thêm Tài khoản</h2>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Tên Đăng Nhập</label></div>
                        <div class="col-sm-6 input-column"><input class="form-control" type="text" name="tk"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Mật Khẩu</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="text" name="mk"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Họ Tên</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="text" name="ht"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Giới Tính</label></div>
                        <div class="col-sm-6 label-column">
                            <div class="Sex">
                                <div class="form-check-inline"><input class="form-check-input" type="radio" name="gt" value="Nam"><label class="form-check-label">Nam</label></div>
                                <div class="form-check-inline"><input class="form-check-input" type="radio" name="gt" value="Nữ"><label class="form-check-label">Nữ</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Email</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="text" name="email"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Ngày Sinh</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="date" name="ns"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Số Điện Thoại</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="text" name="sdt"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label">Địa Chỉ</label></div>
                        <div class="col-sm-6 label-column"><input class="form-control" type="text" name="dc"></div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-sm-4 label-column"><label class="col-form-label"></label></div>
                        <div class="col-sm-6 label-column">
                            <input class="btn btn-primary" type="submit" value="Đăng Ký">
                        </div>
                    </div>
                </form>
                <?php echo validation_errors(); ?>
            </div>
        </div>
    </div>
</div>