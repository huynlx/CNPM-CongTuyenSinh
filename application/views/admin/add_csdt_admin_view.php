<div class="me-TTCN mt-1">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="d-none d-lg-block col-lg-5 text-center">
            <img src="https://yt3.ggpht.com/dp42tS9h6DHEqcOkaBrTa1HqLCzfdvc3k80KczoAPBMyyZgP3pGyZcU2c6ez42VUCHvIil2iYQ=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" class="w-75 h-auto">
        </div>
        <div class="col-lg-5 mt-4">
            <div class="row register-form">
                <?php echo form_open_multipart('/admin/pro_add_csdt'); ?>
                <h2>Thêm cơ sở đào tạo</h2>
                <div class="form">
                    <table class="table tb_ch">
                        <tr class="add">
                            <td>
                                <P>Tên cơ sở đào tạo:</p>
                            </td>
                            <td><textarea name="tencsdt" class="form-control" id="" cols="30" rows="1"></textarea></td>
                        </tr>
                        <tr class="add">
                            <td>
                                <p>Tỉnh/TP:</p>
                            </td>
                            <td>

                                <select id="seltinhthanhphocsdt" name="tinhthanhphocsdt" class="form-control">
                                    <option value="">Chọn tỉnh thành phố</option>

                                </select>
                                <!-- <select id="sel">
        <option value="">Chọn tỉnh thành phố</option> -->
                                <!-- </select> -->
                            </td>
                        </tr>
                        <tr class="add">
                            <td>
                                <p>Quận/huyện:</p>
                            </td>
                            <td><select id="selquanhuyencsdt" name="quanhuyencsdt" class="form-control">
                                    <option value="">Chọn quận huyện</option>
                                </select>
                            </td>
                        </tr>
                        <tr class="add">
                            <td>
                                <P>Xã/phường:</p>
                            </td>
                            <td><select id="selxaphuongcsdt" name="phuongthixa" class="form-control">
                                    <option value="">Chọn xã phường</option>
                                </select>
                            </td>
                            <!-- <td><textarea name="phuongthixacsdt" class="form-control" id="" cols="30" rows="1"></textarea></td> -->
                        </tr>
                        <tr class="add">
                            <td>
                                <P>Thôn/bản/đường phố:</p>
                            </td>
                            <td><textarea name="thonbanduongphocsdt" class="form-control" id="" cols="30" rows="1"></textarea></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3 form-group pull-right" style="margin-left:423px;">
                    <input type="submit" name="ok" value="Thêm" class="btn btn-primary">
                </div>
                <?php echo form_close(); ?>

                <?php echo validation_errors(); ?>
            </div>
        </div>
    </div>
</div>