<div class="me-TTCN mt-1">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="d-none d-lg-block col-lg-5 text-center">
            <img src="https://yt3.ggpht.com/dp42tS9h6DHEqcOkaBrTa1HqLCzfdvc3k80KczoAPBMyyZgP3pGyZcU2c6ez42VUCHvIil2iYQ=s540-w390-h540-c-k-c0x00ffffff-no-nd-rj" class="w-75 h-auto">
        </div>
        <div class="col-lg-5 mt-4">
            <div class="row register-form">
                <?php echo form_open_multipart('/admin/pro_add_ndt'); ?>
                <h2 class="text-center">Thêm ngành đào tạo</h2>
                <div class="form">
                    <table class="table tb_ch">
                        <tr>
                            <td>
                                <P>Mã ngành</p>
                            </td>
                            <td><textarea name="manganh" class="form-control" id="" cols="30" rows="1"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <P>Tên ngành</p>
                            </td>
                            <td><textarea name="tennganh" class="form-control" id="" cols="30" rows="1"></textarea></td>
                        </tr>

                        <tr>
                            <td>
                                <P>Chương trình đào tạo</p>
                            </td>
                            <td><textarea name="chuongtrinhdaotao" class="form-control" id="" cols="30" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <P>Ghi chú</p>
                            </td>
                            <td><textarea name="ghichu" class="form-control" id="" cols="30" rows="2"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <P>Giới thiệu</p>
                            </td>
                            <td><textarea name="gioithieu" class="form-control" id="" cols="30" rows="3"></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <p>Cơ sở đào tạo</p>
                            </td>
                            <td><select name="coso" class="form-control">
                                    <?php foreach ($listCoSoDaoTao as $row) { ?>
                                        <option value="<?php echo $row["ma_csdt"]; ?>"><?php echo $row["ten_csdt"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                    <!-- <option value="Cơ sở khác">Cơ sở khác</option> -->
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-3 form-group pull-right" style="margin-left:370px;">
                    <input type="submit" name="ok" value="Thêm" class="btn btn-primary">
                </div>
                <?php echo form_close(); ?>
                <?php echo validation_errors(); ?>
            </div>
        </div>
    </div>
</div>