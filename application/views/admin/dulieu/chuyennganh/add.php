<div class="x_panel">
    <div class="x_title">
        <h2>Thêm Mới Chuyên Ngành </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('tenchuyennganh')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên Chuyên Ngành : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenchuyennganh" class="form-control" value=" <?php set_value('tenchuyennganh') ?>" placeholder = "Tên bộ môn">
                   
                    <?php if (!empty(form_error('tenchuyennganh'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenchuyennganh'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('machuyennganh')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã Chuyên Ngành : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="machuyennganh" class="form-control" value="<?php set_value('machuyennganh') ?>"  placeholder="Mã chuyên ngành">
                   
                    <?php if (!empty(form_error('machuyennganh'))) : ?>
                        <span class="text-danger"><?php echo form_error('machuyennganh'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


             <div class="form-group">
                <label class="control-label col-lg-3">Tên Bộ môn</label>
                <div class="col-lg-7">
                    <select class="form-control" name="mabomon">

                    <?php  foreach ($list_bomon as $value) { ?>
                        <option value="<?php echo $value ->mabomon ?>"> <?php echo $value ->tenbomon?> </option>
                    <?php } ?>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-2"></div>
                <label class="control-label col-lg-1">Active</label>
                <div class="col-lg-3">
                    <select class="form-control" name="active">
                        <option value="1">Hiện</option>
                        <option value="0">Ẩn</option>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                
                
                
            </div>
            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value=" Add New" class="btn btn-info">
            </div>

        </form>
    </div>
</div>