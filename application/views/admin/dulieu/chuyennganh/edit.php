<div class="x_panel">
    <div class="x_title">
        <h2> Chỉnh Sửa Chuyên Ngành </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
              //pre($list);
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('tenchuyennganh')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên Chuyên Ngành : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenchuyennganh" class="form-control" value=" <?php echo $list->tenchuyennganh ?>" placeholder = "Tên Chuyên Ngành">
                   
                    <?php if (!empty(form_error('tenchuyennganh'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenchuyennganh'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('machuyennganh')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã Bộ Môn : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="machuyennganh" class="form-control" value="<?php echo $list->machuyennganh?>"  placeholder="Mã khoa">
                   
                    <?php if (!empty(form_error('machuyennganh'))) : ?>
                        <span class="text-danger"><?php echo form_error('machuyennganh'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


             <div class="form-group">
                <div class="col-lg-2"></div>
                <label class="control-label col-lg-1">Tên Bộ Môn :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="mabomon">

                    <?php  foreach ($list_bomon as $value) { ?>
                        <option 
                            <?php if($list->mabomon == $value->mabomon){ echo"selected";} ?> value="<?php echo $value ->mabomon ?>"> <?php echo $value ->tenbomon ?> 
                        </option>
                    <?php } ?>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-2"></div>
                <label class="control-label col-lg-1">Active</label>
                <div class="col-lg-3">
                    <select class="form-control" name="active">

                        <option <?php if($list->hienthi ==1) {echo "selected";} ?> value="1">Hiện</option>
                        <option <?php if($list->hienthi ==0) {echo "selected";} ?>  value="0">Ẩn</option>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                
                
                
            </div>
            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value=" Update " class="btn btn-info">
            </div>

        </form>
    </div>
</div>