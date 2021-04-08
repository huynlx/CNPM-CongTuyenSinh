<div class="content">
    <div class="col-md-12 ">
        <h1 class="title_form">Thêm cơ sở đào tạo</h1>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_csdt'); ?>
        <div class="form">
            <table class="table tb_ch">
                <tr>
                    <td><P>Tên cơ sở đào tạo:</p></td>
                    <td><textarea name="tencsdt" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
                <tr>
                    <td><p>Tỉnh/TP:</p></td>
                    <td>
                    
                    <select id="seltinhthanhphocsdt" name="tinhthanhphocsdt" class="form-control">
                    <option value="">Chọn tỉnh thành phố</option>
                            
                        </select>
                        <!-- <select id="sel">
        <option value="">Chọn tỉnh thành phố</option> -->
                        <!-- </select> -->
                    </td>
                </tr>
                <tr>
                    <td><p>Quận/huyện:</p></td>
                    <td><select id="selquanhuyencsdt" name="quanhuyencsdt" class="form-control">
                    <option value="">Chọn quận huyện</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Xã/phường:</p></td>
                    <td><textarea name="phuongthixacsdt" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
                <tr>
                    <td><P>Thôn/bản/đường phố:</p></td>
                    <td><textarea name="thonbanduongphocsdt" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
            </table>
        </div>
        <div class="col-md-3 form-group pull-right" style="margin-left:423px;">
            <input type="submit" name="ok" value="Thêm" class="btn btn-primary">
        </div>
    </form>
    <?php echo validation_errors();?>
</div>