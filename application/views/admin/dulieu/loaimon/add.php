<div class="x_panel">
    <div class="x_title">
        <h2>Thêm Mới Loại Môn</h2>
        <div class="clearfix"></div>
    </div>
     <!-- Hiện thông báo -->
    <?php  $this->load->view('admin/partials/alert') ?>
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form method="post" action="" class="form-horizontal" id="block-validate" novalidate="novalidate"  enctype="multipart/form-data">


            <div class="form-group <?php echo !empty(form_error('maloaimon')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã loại môn</label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="maloaimon" class="form-control" value="<?php echo  set_value('maloaimon') ?>" placeholder="Mã hệ loại môn">
                   
                    <?php if (!empty(form_error('maloaimon'))) : ?>
                        <span class="text-danger"><?php echo form_error('maloaimon'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>



            <div class="form-group <?php echo !empty(form_error('tenloaimon')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên loại môn</label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenloaimon" class="form-control" value="<?php echo set_value('tenloaimon') ?>" placeholder="Tên  loại môn">
                    <?php if (!empty(form_error('tenloaimon'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenloaimon'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('quydoi')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Quy đổi</label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="quydoi" class="form-control" value="<?php echo set_value('quydoi') ?>" placeholder="Nhập mã quy đổi">
                    <?php if (!empty(form_error('quydoi'))) : ?>
                        <span class="text-danger"><?php echo form_error('quydoi'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

          
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="<?php echo admin_url('loaimon') ?>" class="btn btn-danger  ">Trở về</a>
                <input type="submit" value="Thêm mới loại môn" class="btn btn-info">
            </div>

        </form>
    </div>
</div>