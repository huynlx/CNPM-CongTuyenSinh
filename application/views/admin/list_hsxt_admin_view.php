<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Bảng Hồ sơ xét tuyển</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class=" float-sm-right">
                        <form action="<?php echo base_url(); ?>index.php/admin/get_list_hsxt_s" method="post" class="form-inline">
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
                                    <th>Mã hồ sơ</th>
                                    <th>Mã thí sinh</th>
                                    <th>Họ Tên</th>
                                    <!-- <th>Giới Tính </th>
                    <th>Ngày Sinh</th>
                    <th>Tỉnh Thành Phố </th>
                    <th>Phường Thị Xã</th>
                    <th>Quận Huyện</th> -->
                   
                                    <th> Số CMND</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Email</th>
                                    <!-- <th>Hình ảnh CMND</th>
                    <th>Hình ảnh chân dung</th> -->
                                    <!-- <th>Tôn giáo</th> -->
                                    <th>Hộ khẩu</th>
                                    <!-- <th>Nguyện vọng</th> -->
                                    <th>Trạng thái</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listHsxt as $row) { ?>
                                    <tr class="w3-animate-left">
                                        <td>
                                            <a class="edit ed" href="<?php echo base_url(); ?>index.php/admin/edit_hsxt/<?php echo $row['ma_hsxt']; ?>"><em class="fas fa-pencil-alt"></em></a>
                                            <br>
                                            <a class="delete ed" style="color: red;" onclick="return confirm('Bạn có muốn xóa không?');" href="<?php echo base_url(); ?>index.php/admin/delete_hsxt/<?php echo $row['ma_hsxt']; ?>"><em class="fa fa-trash"></em></a>
                                        </td>
                                        <td><?php echo $row['ma_hsxt']; ?></td>
                                        <td><?php echo $row['ma_ts']; ?></td>
                                        <td><?php echo $row['ho_ten_ts']; ?></td>
                                        <td><?php echo $row['so_cmnd_cccd_ts']; ?></td>
                                        <td><?php echo $row['sdt_ts']; ?></td>
                                        <td><?php echo $row['email_ts']; ?></td>
                                        <td><?php echo $row['ho_khau_thon_ban_duong_pho']; ?></td>
                                        <!-- <td><?php echo $row['ten_nguyen_vong']; ?></td> -->
                                        <td>Đã nhận</td>
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