<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Bảng Ngành đào tạo</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class=" float-sm-right">
                        <form action="<?php echo base_url(); ?>index.php/admin/get_list_ndt_s" method="post" class="form-inline">
                            <div class="form_ip">
                                <input class="search-field form-control" type="text" placeholder="Tìm kiếm.." name="search">
                                <div class="btn_tk">
                                    <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.col -->
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
                                    <th>Mã ngành</th>
                                    <th>Tên ngành</th>
                                    <th>Chương trình đào tạo</th>
                                    <th>Ghi chú</th>
                                    <th>Giới thiệu </th>
                                    <th>Cơ sở đào tạo</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listNdt as $row) { ?>
                                    <tr class="w3-animate-left">
                                        <td>
                                            <a class="edit ed" href="<?php echo base_url(); ?>index.php/admin/edit_ndt/<?php echo $row['ma_ndt']; ?>"><em class="fas fa-pencil-alt"></em></a>
                                            <br>
                                            <a class="delete ed" style="color: red;" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url(); ?>index.php/admin/delete_ndt/<?php echo $row['ma_ndt']; ?>"><em class="fa fa-trash"></em></a>
                                        </td>
                                        <td><?php echo $row['ma_ndt']; ?></td>
                                        <td><?php echo $row['ten_ndt']; ?></td>
                                        <td><?php echo $row['chuong_trinh_dao_tao']; ?></td>
                                        <td><?php echo $row['ghi_chu_ndt']; ?></td>
                                        <td><?php echo $row['gioi_thieu_ndt']; ?></td>
                                        <td><?php echo $row['ten_csdt']; ?></td>
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