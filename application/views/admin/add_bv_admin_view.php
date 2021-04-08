<div class="content">
    <div class="col-md-12">
        <h1 class="title_form"><b>Thêm Bài Viết</b></h1>
    </div>
    <?php echo form_open_multipart('/admin/pro_add_bv'); ?>
        <div class="form">
            <table class="table tb_ch" id = "form_add_bv">
                <tr><td><p>Lựa chọn danh mục</p></td>
                    <td colspan="2"><select name="dm" class="form-control">
                        <?php foreach ($listDanhMuc as $row){?>                            
                            <option value="<?php echo $row["ma_dm"]; ?>"><?php echo $row["ma_dm"] . ": " . $row["ten_dm"]; ?></option>
                            <?php
                        }
                        ?>
                        <!-- <option value="Danh Mục Khác">Danh Mục Khác</option> -->
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><P>Tiêu đề</p></td>
                    <td colspan="2"><textarea name="td" class="form-control" id="" cols="30" rows="1"></textarea></td>
                </tr>
                <tr>
                    <td><P>Nội dung Tóm Tắt</p></td>
                    <td colspan="2"><textarea name="ndtt" class="form-control" id="" cols="30" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td><P>Ảnh Bìa</p></td>
                    <td colspan="2"><input type="file" name="link" class="form-control"></td>
                </tr>
                <input id = "count_ctbv_form_add_bv" type="text" style = "display: none;" value = "0" name = "count">             
                <!-- <tr>
                    <td><p>Chi tiết bài viết</p><a class="btn btn-default delete_ctbv_form_add_bv" href=""><em class="fa fa-trash"></em></a></td>
                    <td><p>Nội dung chi tiết</p><textarea name="ndct'+ countAdd +'" class="form-control" id="" cols="40" rows="1"></textarea></td>
                    <td><P>Ảnh chi tiết</p><input type="file" name="linkct'+ countAdd +'" class="form-control"></td>                        
                </tr> -->
            </table>            
        </div>
        <!-- <div class="col-md-3 form-group pull-right">
            <input type="buton" value="Thêm chi tiết" class="btn btn-primary left" id = "add_ctbv_form_add_bv">                  
            <input type="submit" name="ok" value="Thêm" class="btn btn-primary right" id = "save_form_add_bv">
        </div> -->
        <div class="form-row form-group">
                <div class="col-lg-3 col-md-3 label-column"><label class="col-form-label"></label></div>
                <div class="col-lg-8 col-md-8 row_add-bv ">
                    <input value="Thêm chi tiết" class="btn btn-primary" id = "add_ctbv_form_add_bv">                  
                    <div class="add_bv">
                        <input type="submit" name="ok" value="Thêm" class="btn btn-primary" id = "save_form_add_bv">
                    </div>
                </div>
            </div>
    </form>
    <?php echo validation_errors();?>
</div>