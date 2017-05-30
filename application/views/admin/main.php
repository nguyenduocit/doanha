<!DOCTYPE html>
<html lang="en">
    <head>
        <!--load file head -->
        <?php $this->load->view('admin/partials/head') ?>
        <!--end -->
    </head>
    <body class="nav-md footer_fixed">
        <div class="container body">
            <div class="main_container">
                <!--load left-->
                <?php $this->load->view('admin/partials/left') ?>
                <!--end-->


                <!-- load top navigation -->
                <?php $this->load->view('admin/partials/top_nav') ?>
                <!-- end -->


                <!-- page content -->
                <div class="right_col" role="main">
                    <!-- Nội dung thay đổi -->
                        <?php $this->load->view($temp) ?>
                    <!-- end -->

                     <!-- load footer -->
                   
                <!-- end -->
                </div>
                <!-- /page content -->


                <footer>
                    <?php //$this->load->view('admin/partials/footer') ?>
                </footer>
            </div>
        </div>
        <!--load js-->
        <?php $this->load->view('admin/partials/js') ?>
        <!--end-->
    </body>
</html>