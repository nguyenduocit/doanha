<div class="x_panel">
    <div class="x_title">
        <h2>Cập Nhật Hệ Đào Tạo Mới</h2>
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
                    <input type="text" id="required2" name="mahedaotao" readonly="readonly" class="form-control" value="<?php echo $hedaotaoEdit->mahedaotao ?>" placeholder="Mã hệ đào tạo">
                   
                    <?php if (!empty(form_error('mahedaotao'))) : ?>
                        <span class="text-danger"><?php echo form_error('mahedaotao'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>



            <div class="form-group <?php echo !empty(form_error('tenhedaotao')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên hệ đào tạo</label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenhedaotao"  class="form-control" value="<?php echo $hedaotaoEdit->tenhedaotao ?>" placeholder="Tên  hệ đào tạo">
                    <?php if (!empty(form_error('mahedaotao'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenhedaotao'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-3">Số kỳ</label>
                <div class="col-lg-3">
                    <select class="form-control" name="soky">
                        <option value="1" <?php echo ($hedaotaoEdit->soky == 1 ? 'selected = "selected"' : '') ?>>1</option>
                        <option value="2" <?php echo ($hedaotaoEdit->soky == 2 ? 'selected = "selected"' : '') ?>>2</option>
                        <option value="3" <?php echo ($hedaotaoEdit->soky == 3 ? 'selected = "selected"' : '') ?>>3</option>
                        <option value="4" <?php echo ($hedaotaoEdit->soky == 4 ? 'selected = "selected"' : '') ?>>4</option>
                        <option value="5" <?php echo ($hedaotaoEdit->soky == 5 ? 'selected = "selected"' : '') ?>>5</option>
                        <option value="6" <?php echo ($hedaotaoEdit->soky == 6 ? 'selected = "selected"' : '') ?>>6</option>
                        <option value="7" <?php echo ($hedaotaoEdit->soky == 7 ? 'selected = "selected"' : '') ?>>7</option>
                        <option value="8" <?php echo ($hedaotaoEdit->soky == 8 ? 'selected = "selected"' : '') ?>>8</option>
                        <option value="9" <?php echo ($hedaotaoEdit->soky == 9 ? 'selected = "selected"' : '') ?>>9</option>
                        <option value="10" <?php echo ($hedaotaoEdit->soky == 10 ? 'selected = "selected"' : '') ?>>10</option>
                    </select>
                   
                </div>

                <label class="control-label col-lg-1">Active</label>
                <div class="col-lg-3">
                    <select class="form-control" name="active">
                        <option value="1" <?php echo ($hedaotaoEdit->hienthi == 1 ? 'selected = "selected"' : '') ?>>Hiện</option>
                        <option value="0" <?php echo ($hedaotaoEdit->hienthi == 0 ? 'selected = "selected"' : '') ?>>Ẩn</option>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                
                <label class="control-label col-lg-3">Hệ số</label>
                <div class="col-lg-3">
                    <input type="number" id="required2" name="heso" class="form-control" value="<?php echo $hedaotaoEdit->hs2 ?>">
                </div>
                
            </div>
            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="<?php echo admin_url('hedaotao') ?>" class="btn btn-danger  ">Trở về</a>
                <input type="submit" value="Cập nhật hệ đào tạo" class="btn btn-info">
            </div>

        </form>
    </div>
</div>