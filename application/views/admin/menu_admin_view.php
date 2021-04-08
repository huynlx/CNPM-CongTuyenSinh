<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url();?>admin/index" class="brand-link">
      <img src="<?php echo base_url();?>assets/dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Home Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Lê Xuân Huynh</a>
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
            if ($this->session->userdata("cap_do") == 0){
                ?>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Quản lý tài khoản
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
          <!-- <li class="nav-item h
          as-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Quản lý cơ sở đào tạo
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
          </li> -->
          <!-- <li class="nav-item h
          as-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Quản lý ngành đào tạo
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
          </li> -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                Quản lý hồ sơ xét tuyển
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/add_hsxt">
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
          <li class="nav-item h
          as-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Quản lý bài viết
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/add_bv">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm bài viết</p> 
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url();?>admin/get_list_bv">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Xem bài viết</p> 
                  </a>
                </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>