<div class="x_panel">
    <div class="x_title">
        <h2>Thêm Mới Lớp </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">


            <div class="form-group <?php echo !empty(form_error('mahedaotao')) ? 'has-error' : '' ?> ">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Chọn hệ đào tạo :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="mahedaotao">
                    <option value="">Chọn hệ đào tạo</option>
                   
                    <?php  foreach ($list_hedaotao as $value) { ?>
                        <option  value="<?php echo $value ->mahedaotao ?>"> <?php echo $value ->tenhedaotao?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('mahedaotao'))) : ?>
                        <span class="text-danger"><?php echo form_error('mahedaotao'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('machuyennganh')) ? 'has-error' : '' ?>">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Tên chuyên ngành :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="machuyennganh">
                    <option value="">Chọn chuyên ngành</option>
                    <?php  foreach ($list_chuyennganh as $value) { ?>
                        <option class="chuyennganh" machuyennganh="<?php echo $value ->machuyennganh ?>"  value="<?php echo $value ->machuyennganh ?>"> <?php echo $value ->tenchuyennganh?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('machuyennganh'))) : ?>
                        <span class="text-danger"><?php echo form_error('machuyennganh'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('magv')) ? 'has-error' : '' ?>">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Giáo viên chủ nhiệm :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="magv">
                    <option value="">Chọn giáo viên</option>
                    <?php  foreach ($list_admin as $value) { ?>
                        <option  value="<?php echo $value ->maGV ?>"> <?php echo $value ->hoten ?> </option>
                    <?php } ?>
                    </select>

                    <?php if (!empty(form_error('magv'))) : ?>
                        <span class="text-danger"><?php echo form_error('magv'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>


            <div class="form-group <?php echo !empty(form_error('tenlop')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên lớp : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenlop" class="form-control" value="<?php set_value('tenlop') ?>" placeholder = " Tên lớp ">
                   
                    <?php if (!empty(form_error('tenlop'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenlop'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


             <div class="form-group <?php echo !empty(form_error('malop')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã lớp : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="malop" class="form-control" value="" placeholder = "Mã lớp ">
                   
                    <?php if (!empty(form_error('malop'))) : ?>
                        <span class="text-danger"><?php echo form_error('malop'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group <?php echo !empty(form_error('siso')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Sĩ số : </label>
                <div class="col-lg-7">
                    <input type="number" id="required2" name="siso" class="form-control" value="<?php set_value('siso') ?>"  placeholder="Sĩ số">
                   
                    <?php if (!empty(form_error('siso'))) : ?>
                        <span class="text-danger"><?php echo form_error('siso'); ?> </p></span>
                    <?php endif; ?>
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