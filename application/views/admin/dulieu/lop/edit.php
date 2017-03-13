<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh Sửa Lớp </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">


            <div class="form-group">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Chọn hệ đào tạo :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="mahedaotao">

                    <?php  foreach ($list_hedaotao as $value) { ?>

                        <option  <?php if($list ->mahedaotao == $value ->mahedaotao){ echo "selected";} ?>  value="<?php echo $value ->mahedaotao ?>"> <?php echo $value ->tenhedaotao?> </option>
                    <?php } ?>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Tên chuyên ngành :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="machuyennganh">

                    <?php  foreach ($list_chuyennganh as $value) { ?>
                        <option <?php if($list ->machuyennganh == $value ->machuyennganh){ echo "selected";} ?> class="chuyennganh" machuyennganh="<?php echo $value ->machuyennganh ?>"  value="<?php echo $value ->machuyennganh ?>"> <?php echo $value ->tenchuyennganh?> </option>
                    <?php } ?>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Giáo viên chủ nhiệm :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="magv">

                    <?php  foreach ($list_admin as $value) { ?>
                        <option <?php if($list ->gvcn == $value ->maGV){ echo "selected";} ?> value="<?php echo $value ->maGV ?>"> <?php echo $value ->hoten ?> </option>
                    <?php } ?>
                    </select>
                   
                </div>
            </div>


            <div class="form-group <?php echo !empty(form_error('tenlop')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên lớp : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenlop" class="form-control" value=" <?php echo $list->tenlop ?>" placeholder = " Tên lớp ">
                   
                    <?php if (!empty(form_error('tenlop'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenlop'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


             <div class="form-group <?php echo !empty(form_error('malop')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã lớp : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="malop" class="form-control" value=" <?php echo $list->malop ?>" placeholder = " Tên lớp ">
                   
                    <?php if (!empty(form_error('malop'))) : ?>
                        <span class="text-danger"><?php echo form_error('malop'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group <?php echo !empty(form_error('siso')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Sĩ số : </label>
                <div class="col-lg-7">
                    <input type="number" id="required2" name="siso" class="form-control" value="<?php echo $list->siso ?>"  placeholder="Sĩ số">
                   
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
                        <option <?php  if($list->hienthi == 1){echo "selected";} ?> value="1">Hiện</option>
                        <option <?php echo ($list->hienthi == 0)?"selected": ""; ?> value="0">Ẩn</option>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                
                
                
            </div>
            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value="Update" class="btn btn-info">
            </div>

        </form>
    </div>
</div>