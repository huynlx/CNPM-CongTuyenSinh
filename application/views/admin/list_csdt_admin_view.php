<div class="col-md-12 col-md-offset-1 me-list-admin">
    <div class="panel panel-default panel-table">
        <div class="panel panel-default panel-table">
            <div class="panel-heading">
                <div class="row">
                    <div class="col col-xs-6 title_form-wrap">
                        <h1 class="title_form">Bảng cơ sở đào tạo đào tạo</h1>
                        <form action="<?php echo base_url();?>index.php/admin/get_list_csdt_s" method="post" class="form-inline">
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
                    <th>Mã cơ sở</th>
                    <th>Tên cơ sở</th>
                    <th>Tỉnh/TP </th>
                    <th>Quận/huyện</th>
                    <th>Xã/phường </th>
                    <th>Thôn/bản/đường phố</th>
                    
                </tr>
                </thead>
                <tbody>
                <?php 
                foreach ($listCsdt as $row){?>
                
                    <tr class="w3-animate-left">
                        <td align="center">
                            <a class="edit ed" href="<?php echo base_url();?>index.php/admin/edit_csdt/<?php echo $row['ma_csdt'];?>"><em class="fas fa-pencil-alt"></em></a>
                            <br>
                            <a class="delete ed" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url();?>index.php/admin/delete_csdt/<?php echo $row['ma_csdt'];?>"><em class="fa fa-trash"></em></a>
                        </td>
                        <td><?php echo $row['ma_csdt'];?></td>
                        <td><?php echo $row['ten_csdt'];?></td>
                        <td><?php echo $row['dia_chi_tinh_thanh_pho'];?></td>
                        <td><?php echo $row['dia_chi_quan_huyen'];?></td>
                        <td><?php echo $row['dia_chi_xa_phuong'];?></td>
                        <td><?php echo $row['dia_chi_thon_ban_duong_pho'];?></td>
                        
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