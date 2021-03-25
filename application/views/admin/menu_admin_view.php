<!-- <div class="row"> -->
<div class="col-md-4 col-lg-3">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url();?>admin/index" class="brand-link">
      <img src="https://yt3.ggpht.com/a/AATXAJxXwtVfQCScGEm93jvNCjitwu1lOKYhVZe2rSHWVA=s176-c-k-c0x00ffffff-no-rj" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Home Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/2b6848f5-5c1c-4b1f-a20c-ae0adc0bcb83/dbdz1xh-59c681d4-a504-4dc2-8e3a-46b37f461f69.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOiIsImlzcyI6InVybjphcHA6Iiwib2JqIjpbW3sicGF0aCI6IlwvZlwvMmI2ODQ4ZjUtNWMxYy00YjFmLWEyMGMtYWUwYWRjMGJjYjgzXC9kYmR6MXhoLTU5YzY4MWQ0LWE1MDQtNGRjMi04ZTNhLTQ2YjM3ZjQ2MWY2OS5wbmcifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6ZmlsZS5kb3dubG9hZCJdfQ.OzZyciiy2qiPgAacEyM8Q1UTo5qucG9ZP1I2rCpsjKA" class="img-circle elevation-3" alt="User Image">
        </div>
        <div class="info">
          <!-- <a href="#" class="d-block">Lê Xuân Huynh</a> -->
          <a href="#" class="d-block"><?php echo $this->session->userdata("ho_ten_tk") ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url();?>admin/index" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
           <?php
            if ($this->session->userdata("cap_do")==1){
                ?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Tài khoản
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                          
                          <a class="nav-link" href="<?php echo base_url();?>admin/add_user">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Thêm tài khoản</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="<?php echo base_url();?>admin/get_list_user">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Xem tài khoản</p>  
                          </a>
                      </li>
                    </ul>
                </li>
            <?php
            }
            ?>
          <li class="nav-item h
          as-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Cơ sở đào tạo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/add_csdt">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm cơ sở</p> 
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/get_list_csdt">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem Cơ Sở</p>  
                  </a>
                </li>
            </ul>
          </li>
          <li class="nav-item h
          as-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Ngành đào tạo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/add_ndt">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Ngành Đào Tạo</p> 
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/get_list_ndt"> 
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem Ngành Đào Tạo</p>
                  </a>
                </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                Hồ sơ xét tuyển
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>home/hsxt">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Hồ Sơ Xét Tuyển</p> 
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/get_list_hsxt">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem Hồ Sơ Xét Tuyển</p> 
                  </a>
                </li>
            </ul>
          </li>
          <!-- <li class="nav-item h
          as-treeview">
            <a href="<?php echo base_url();?>index.php/admin/get_list_dm" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Quản lý danh mục
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item h
          as-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Thí sinh
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/add_bv">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm thí sinh</p> 
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/get_list_bv">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem thí sinh</p> 
                  </a>
                </li>
            </ul>
          </li> -->

          <!-- log out -->
          <li class="nav-item h
          as-treeview">
            <a href="<?php echo base_url() ?>home/logout" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Đăng xuất
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</div>