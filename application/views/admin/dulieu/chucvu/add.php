<div class="x_panel">
    <div class="x_title">
        <h2>Thêm Mới Chức Vụ</h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('tenchucvu')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên Chức Vụ : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenchucvu" class="form-control" value=" <?php set_value('tenchucvu') ?>" placeholder="Tên Chức Vụ">
                   
                    <?php if (!empty(form_error('tenchucvu'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenchucvu'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

             <div class="form-group <?php echo !empty(form_error('machucvu')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã Chức Vụ : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="machucvu" class="form-control" value="<?php set_value('machucvu') ?>" placeholder="Mã Chức Vụ">
                   
                    <?php if (!empty(form_error('machucvu'))) : ?>
                        <span class="text-danger"><?php echo form_error('machucvu'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group">
                
                
                
            </div>
            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;">Trở về</a>
                <input type="submit" value=" Add New" class="btn btn-info">
            </div>

        </form>
    </div>
</div>