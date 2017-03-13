<div class="x_panel">
    <div class="x_title">
        <h2>Thêm Mới Hệ Đào Tạo</h2>
        <div class="clearfix"></div>
    </div>
     <!-- Hiện thông báo -->
    <?php  $this->load->view('admin/partials/alert') ?>
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form method="post" action="" class="form-horizontal" id="block-validate" novalidate="novalidate"  enctype="multipart/form-data">


            <div class="form-group <?php echo !empty(form_error('mahedaotao')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã hệ</label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="mahedaotao" class="form-control" value="<?php echo  set_value('mahedaotao') ?>" placeholder="Mã hệ đào tạo">
                   
                    <?php if (!empty(form_error('mahedaotao'))) : ?>
                        <span class="text-danger"><?php echo form_error('mahedaotao'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>



            <div class="form-group <?php echo !empty(form_error('tenhedaotao')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên hệ đào tạo</label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenhedaotao" class="form-control" value="" placeholder="Tên  hệ đào tạo">
                    <?php if (!empty(form_error('mahedaotao'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenhedaotao'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-3">Số kỳ</label>
                <div class="col-lg-3">
                    <select class="form-control" name="soky">
                        <?php for($i=1 ; $i <= 10 ;$i++){ ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                        <?php }?>
                        
                    </select>
                   
                </div>

                <label class="control-label col-lg-1">Active</label>
                <div class="col-lg-3">
                    <select class="form-control" name="active">
                        <option value="1">Hiện</option>
                        <option value="0">Ẩn</option>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                
                <label class="control-label col-lg-3">Hệ số</label>
                <div class="col-lg-3">
                    <input type="number" id="required2" name="heso" class="form-control" value="0">
                </div>
                
            </div>
            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="<?php echo admin_url('hedaotao') ?>" class="btn btn-danger  ">Trở về</a>
                <input type="submit" value="Thêm mới hệ đào tạo" class="btn btn-info">
            </div>

        </form>
    </div>
</div>