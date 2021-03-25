
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Bảng Cơ sở đào tạo</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                    <div class=" float-sm-right">
                        <form action="<?php echo base_url(); ?>index.php/admin/get_list_csdt_s" method="post" class="form-inline">
                            <div class="form_ip">
                                <input class="search-field form-control" type="text" placeholder="Tìm kiếm.." name="search">
                                <div class="btn_tk">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <div class="col-lg col-12">
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
                                foreach ($listCsdt as $row) { ?>

                                    <tr class="w3-animate-left">
                                        <td>
                                            <a class="edit ed" href="<?php echo base_url(); ?>index.php/admin/edit_csdt/<?php echo $row['ma_csdt']; ?>"><em class="fas fa-pencil-alt"></em></a>
                                            <br>
                                            <a class="delete ed" style="color: red;" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url(); ?>index.php/admin/delete_csdt/<?php echo $row['ma_csdt']; ?>"><em class="fa fa-trash"></em></a>
                                        </td>
                                        <td><?php echo $row['ma_csdt']; ?></td>
                                        <td><?php echo $row['ten_csdt']; ?></td>
                                        <td><?php echo $row['dia_chi_tinh_thanh_pho']; ?></td>
                                        <td><?php echo $row['dia_chi_quan_huyen']; ?></td>
                                        <td><?php echo $row['dia_chi_xa_phuong']; ?></td>
                                        <td><?php echo $row['dia_chi_thon_ban_duong_pho']; ?></td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="list123">
                        <?php echo $this->pagination->create_links(); ?>
                    </div>
                </div>




            </div>
        </div>
</div>