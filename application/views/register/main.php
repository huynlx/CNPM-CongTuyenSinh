<div class=" border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 pt-4">
                <form action="<?php echo base_url() ?>home/pro_register" method="POST">
                    <h2 class="text-center">Đăng kí tài khoản</h2>
                    <b class="text-danger"><?php echo $err ?></b>
                    <div class="form-group">
                        <label for="name">Họ tên:</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                        <label for="birthday">Ngày sinh:</label>
                        <input type="date" name="birthday" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3"><label for="gender">Giới tính:</label></div>
                        <div class="Sex col-md-9">
                            <div class="form-check-inline"><input class="form-check-input" type="radio" name="gt" value="Nam"><label class="form-check-label">Nam</label></div>
                            <div class="form-check-inline"><input class="form-check-input" type="radio" name="gt" value="Nữ"><label class="form-check-label">Nữ</label></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address">Địa chỉ:</label>
                        <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                        <label for="user">Username:</label>
                        <input type="text" name="user" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                        <label for="pw">Password:</label>
                        <input type="password" name="pw" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group">
                        <label for="cpw">Confirm Password:</label>
                        <input type="password" name="cpw" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                    <div class="form-group text-center">
                        <input class="form-control btn btn-primary w-25" type="submit" name="sm" id="" class="form-control" placeholder="" aria-describedby="helpId" value="Register">
                        <!-- <small id="helpId" class="text-muted">Help text</small> -->
                    </div>
                </form>
                <?php echo validation_errors() ?>
                
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>
</div>