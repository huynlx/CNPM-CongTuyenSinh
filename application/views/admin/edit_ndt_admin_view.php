<div class="me-TTCN mt-1">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="d-none d-lg-block col-lg-5 text-center">
            <img src="https://i.pinimg.com/564x/42/f5/81/42f58180812f93d8eb09b94e959103a2.jpg" class="w-75 h-auto" style="max-height:650px;">
        </div>
        <div class="col-lg-5 mt-4">
            <div class="row register-form">
                <?php echo form_open_multipart('/admin/pro_edit_ndt/' . $ndt['ma_ndt']); ?>
                <h2 class="text-center">Sửa ngành đào tạo</h2>
                <div class="form">
                    <table class="table">
                        <tr>
                            <td>
                                <P>Mã ngành</p>
                            </td>
                            <td><textarea name="manganh" class="form-control" id="" cols="30" rows="1"><?php echo $ndt['ma_ndt']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <P>Tên ngành</p>
                            </td>
                            <td><textarea name="tennganh" class="form-control" id="" cols="30" rows="1"><?php echo $ndt['ten_ndt']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <P>Chương trình đào tạo</p>
                            </td>
                            <td><textarea name="chuongtrinhdaotao" class="form-control" id="" ><?php echo $ndt['chuong_trinh_dao_tao']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <P>Ghi chú</p>
                            </td>
                            <td><textarea name="ghichu" class="form-control" id=""><?php echo $ndt['ghi_chu_ndt']; ?></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <P>Giới thiệu</p>
                            </td>
                            <td><textarea name="gioithieu" class="form-control" id=""><?php echo $ndt['gioi_thieu_ndt']; ?></textarea></td>
                        </tr>

                        <tr>
                            <td>
                                <p>Lựa chọn cơ sở</p>
                            </td>

                            <!-- <td><select name="coso" class="form-control">
                            <option value="1" selected>Cơ sở 1</option>
                            <option value="2" <?php if ($ndt['ma_csdt'] === "2") echo "selected" ?>>Cơ sở 2</option>
                            <option value="3" <?php if ($ndt['ma_csdt'] === "3") echo "selected" ?>>Cơ sở 3</option>
                        </select> -->
                            <td>
                                <select name="coso" class="form-control">
                                    <?php foreach ($listCoSoDaoTao as $row) { ?>
                                        <option value="<?php echo $row["ma_csdt"]; ?>"><?php echo  $row["ten_csdt"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                    <!-- <option value="Cơ sở khác">Cơ sở khác</option> -->
                                </select>
                            </td>

                        </tr>
                    </table>
                </div>
                <div class="col-md-3 form-group pull-right">
                    <input type="submit" name="ok" value="Lưu" class="btn btn-primary btn-block">
                </div>
                <?php echo form_close(); ?>
                <?php echo validation_errors(); ?>
            </div>
        </div>
    </div>
</div>