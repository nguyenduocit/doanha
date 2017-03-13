<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>
        <div class="clearfix"></div>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo public_url('admin/') ?>images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Bảng điều khiển</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo admin_url('home') ?>"><i class="fa fa-home"></i> Trang chủ </a>
                    </li>
                    <li>
                        <a><i class="fa fa-database"></i> Dữ liệu hệ thống <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo admin_url('khoa') ?>">Quản lý Khoa</a></li>
                            <li><a href="<?php echo admin_url('bomon') ?>">Quản lý Bộ Môn</a></li>
                            <li><a href="<?php echo admin_url('chuyennganh') ?>">Quản lý Chuyên Ngành</a></li>
                            <li><a href="<?php echo admin_url('hedaotao') ?>">Quản lý Hệ Đào Tạo</a></li>
                            <li><a href="<?php echo admin_url('loaimon') ?>">Quản lý Loại Môn</a></li>
                            <li><a href="<?php echo admin_url('lop') ?>">Quản lý Lớp</a></li> 
                            <li><a href="<?php echo admin_url('monhoc') ?>">Quản lý môn học</a></li>
                            <li><a href="<?php echo admin_url('admin') ?>">Quản lý giáo viên</a></li> 
                            <li><a href="<?php echo admin_url('hocham') ?>">Quản lý học hàm</a></li>
                            <li><a href="<?php echo admin_url('trinhdo') ?>">Quản lý trình độ</a></li>
                            <li><a href="<?php echo admin_url('chucvu') ?>">Quản lý chức vụ</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="e_commerce.html">E-commerce</a></li>
                           
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>