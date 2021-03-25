<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Bảng điều khiển</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#" style="color: black;">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-lg col-6">
          <!-- small box -->
          <a href=<?php echo base_url() . "admin/get_list_user" ?>>
            <div class="small-box" style="background-color: #0E1731;">
              <div class="inner text-white">
                <h3><?php echo $count_User; ?></h3>

                <p>Thành viên</p>

              </div>

              <div class="icon">
                <i class="fas fa-users" style="font-size: 33px;color:white;"></i>
              </div>
            </div>
          </a>
        </div>
        <!-- ./col -->
        <div class="col-lg col-6">
          <a href=<?php echo base_url() . "admin/get_list_hsxt" ?>>

            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $count_Hsxt; ?></h3>

                <p>Hồ sơ xét tuyển</p>
              </div>
              <div class="icon">
                <i class="far fa-file" style="font-size: 33px;color:white;"></i>
              </div>
            </div>
        </div>
        </a>
        <!-- ./col -->
        <div class="col-lg col-6">
          <!-- small box -->
          <a href=<?php echo base_url() . "admin/get_list_csdt" ?>>
            <div class="small-box" style="background-color: #CAA52A;">
              <div class="inner">
                <h3><?php echo $count_Csdt; ?><sup style="font-size: 20px"></sup></h3>

                <p>Cơ sở đào tạo</p>
              </div>
              <div class="icon">
                <i class="fas fa-book-open" style="font-size: 33px;color:white;"></i>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg col-6">
          <!-- small box -->
          <a href=<?php echo base_url() . "admin/get_list_ndt" ?>>
            <div class="small-box" style="background-color: #BD527B;">
              <div class="inner">
                <h3><?php echo $count_Ndt; ?></h3>

                <p>Ngành đào tạo</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph" style="font-size: 33px;color:white;"></i>
              </div>
            </div>
          </a>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">




      </div>