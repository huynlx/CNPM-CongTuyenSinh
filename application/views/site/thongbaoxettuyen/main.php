<div id="main">
    <div class="container">
        <div id="main__wrapp">
            <div id="main__left">
                <div class="main__left--news">
                <?php foreach($dmC as $dm){?>
                    
                    <h1 class="title__news">
                        <p><?php echo $dm["ten_dm"]; ?></p>
                    </h1>
                    <ul class="list__news">
                        <?php foreach($bvC as $bv){
                            if ($bv["ma_dm"] == $dm["ma_dm"]) {?>

                            <li  class="list__news--item">
                                <a href="">
                                    <?php echo $bv["tieu_de_bv"]; ?>
                                </a>
                            </li>

                            <?php
                            }                            
                        }                        
                        ?>
                    </ul>

                    <?php
                }                    
                ?>
                </div>
            </div>
            <div id="main__right">
                <div class="col-tuyensinh">
                    <div id="block-xet-hoc-ba" class="block block-1">
                        <p>
                            <a href="<?php echo base_url();?>home/xhb">
                                <img src="<?php echo base_url();?>assets/img/img_dhtl/hb.gif" alt="">
                            </a>
                        </p>
                    </div>
                    <div id="block-hoi-dap" class="block block-hoi-dap">
                        <h2 class="block__title"><?php echo $TVTS["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                                <?php foreach ($TVTSC as $row) {?>
                                    
                                    <li class="views-row">
                                        <div class="views-filed-title">
                                            <a href=""><?php echo $row["ten_dm"]; ?></a>
                                        </div>
                                    </li>

                                    <?php
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div id="block-video" class="block block-video">
                        <div class="content">
                            <iframe src="https://www.youtube.com/embed/_BkPGggLKpI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div id="block-tin-tuyen-sinh" class="block block-menu">
                        <h2 class="block__title"><?php echo $TSCLY["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                                <?php foreach ($TSCLYC as $row) {?>
                                    
                                    <li class="views-row">
                                        <div class="views-filed-title">
                                            <a href=""><?php echo $row["ten_dm"]; ?></a>
                                        </div>
                                    </li>

                                    <?php
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div id="block-9" class="block block-block">
                        <h2 class="block__title">
                            <a href="">
                                <i class="fas fa-exclamation-circle fa-2x" style="color:#fff;"></i>
                            </a>
                            <p>
                                THÔNG TIN GIỚI THIỆU TRƯỜNG 
                                <br>
                                ĐẠI HỌC THỦY LỢI
                            </p>
                        </h2>
                      
                    </div>
                    <div id="block-thong-tin-hoat-dong" class="block block-menu">
                        <h2 class="block__title"><?php echo $TTHD["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                                    <?php foreach($bvC as $bv){
                                    if ($bv["ma_dm"] == $TTHD["ma_dm"]) {?>
                                    <li class="views-row">
                                        <div class="views-filed-title">
                                            <a href=""><?php echo $bv["tieu_de_bv"]; ?></a>
                                        </div>
                                    </li>
                                    <?php
                                    }                            
                                }                        
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div id="block-thong-tin-nganh-tuyens-sinh" class="block block-menu">
                        <h2 class="block__title"><?php echo $TTNTS["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                            <?php foreach ($TTNTSC as $row) {?>
                                    
                                    <li class="views-row">
                                        <div class="views-filed-title">
                                            <a href=""><?php echo $row["ten_dm"]; ?></a>
                                        </div>
                                    </li>

                                    <?php
                                } ?>
                            </ul>
                        </div>
                    </div>
                    <div id="block-thong-tin-nganh-tuyens-sinh" class="block block-menu">
                        <h2 class="block__title"><?php echo $WSKV["ten_dm"]; ?></h2>
                        <div class="content">
                            <ul class="menu-news">
                                <?php foreach($bvC as $bv){
                                    if ($bv["ma_dm"] == $WSKV["ma_dm"]) {?>

                                    <li  class="list__news--item">
                                        <a href="http://ce.tlu.edu.vn/" target="_blank"><?php echo $bv["tieu_de_bv"]; ?></a>
                                    </li>

                                    <?php
                                    }                            
                                }                        
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
