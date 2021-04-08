<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6 title_form-wrap">
                        <div class="col col-xs-6 title_form-wrap">
                        <h1 class="title_form">Bảng bài viết</h1>
                        <form action="<?php echo base_url();?>index.php/admin/get_list_bv_s" method="post" class="form-inline">
                            <div class="form-control form_ip">
                                <input class="form-control search-field" type="text" placeholder="Tìm kiếm.." name="search">
                                <div class="btn_tk">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-list">
                <thead>
                <tr>
                    <th><em class="fa fa-cog"></em></th>
                    <th>Mã</th>
                    <th>Tiêu Đề</th>
                    <th>Nội Dung Tóm Tắt</th>
                    <th>Link Ảnh Bìa</th>   
                    <th>Danh Mục</th>                 
                </tr>
                </thead>
                <tbody>
                <?php foreach ($listBV as $row){?>
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a  class="edit ed" href="<?php echo base_url() . 'index.php/admin/edit_bv/' . $row['ma_bv'];?>"><em class="fas fa-pencil-alt"></em></a>
                            <br>
                            <a  class="delete ed" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url() . "index.php/admin/delete_bv/" . $row['ma_bv'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['ma_bv'];?></td>
                        <td><?php echo $row['tieu_de_bv'];?></td>
                        <td><?php
                            echo substr($row['noi_dung_tom_tat_bv'],0,70) . "  ...";
                            ?></td>
                        <td><?php echo $row['link_anh_bia_bv'];?></td>
                        <td><?php echo $row['ten_dm'];?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="list123">
            <?php echo $this->pagination->create_links();?>
        </div>
    </div>
</div>