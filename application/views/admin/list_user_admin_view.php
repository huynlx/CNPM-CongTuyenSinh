<!-- <div class="col-md-8 col-lg-9"> -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Bảng Tài khoản</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <div class=" float-sm-right">
                            <form action="<?php echo base_url(); ?>index.php/admin/get_list_user_s" method="post" class="form-inline">
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
                                        <th>ID</th>
                                        <th>Tên Đăng Nhập</th>
                                        <!-- <th>Mật Khẩu</th> -->
                                        <th>Cấp Độ</th>
                                        <th>Họ Tên</th>
                                        <th>Email</th>
                                        <th>Ngày Sinh</th>
                                        <th>Giới Tính</th>
                                        <th>Địa Chỉ</th>
                                        <th>SĐT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listUser as $row) { ?>
                                        <tr class="w3-animate-left">
                                            <td>
                                                <a class="edit ed" title="Sửa" href="<?php echo base_url(); ?>index.php/admin/edit_user/<?php echo $row['id_tk']; ?>"><em class="fas fa-pencil-alt"></em></a>
                                                <br>
                                                <a class="delete ed" title="Xoá" style="color: red;" onclick="return confirm('Bạn có muốn xóa không');" href="<?php echo base_url(); ?>index.php/admin/delete_user/<?php echo $row['id_tk']; ?>"><em class="fa fa-trash"></em></a>
                                            </td>
                                            <td><?php echo $row['id_tk']; ?></td>
                                            <td><?php echo $row['ten_dang_nhap']; ?></td>
                                            <!-- <td><?php //echo $row['mat_khau'];
                                                        ?></td> -->
                                            <td><?php echo $row['cap_do']; ?></td>
                                            <td><?php echo $row['ho_ten_tk']; ?></td>
                                            <td><?php echo $row['email_tk']; ?></td>
                                            <td><?php echo $row['ngay_sinh_tk'] ?></td>
                                            <td><?php echo $row['gioi_tinh_tk']; ?></td>
                                            <td><?php echo $row['dia_chi_tk']; ?></td>
                                            <td><?php echo $row['sdt_tk']; ?></td>
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
<!-- </div> -->
<!-- </div> -->