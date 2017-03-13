<div class="x_panel">
    <div class="x_title">
        <h2> Chỉnh Sửa Bộ Môn </h2>
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

            <div class="form-group <?php echo !empty(form_error('tenbomon')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên Bộ môn : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenbomon" class="form-control" value=" <?php echo $list->tenbomon?>" placeholder = "Tên bộ môn">
                   
                    <?php if (!empty(form_error('tenbomon'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenbomon'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('mabomon')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã Bộ Môn : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="mabomon" class="form-control" value="<?php echo $list->mabomon?>"  placeholder="Mã khoa">
                   
                    <?php if (!empty(form_error('mabomon'))) : ?>
                        <span class="text-danger"><?php echo form_error('mabomon'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('viettat')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Viết tắt : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="viettat" class="form-control" value="<?php echo $list->viettat ?>" placeholder="Viết tắt">
                   
                    <?php if (!empty(form_error('viettat'))) : ?>
                        <span class="text-danger"><?php echo form_error('viettat'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


             <div class="form-group">
                <div class="col-lg-2"></div>
                <label class="control-label col-lg-1">Tên Khoa</label>
                <div class="col-lg-7">
                    <select class="form-control" name="makhoa">

                    <?php  foreach ($list_khoa as $value) { ?>
                        <option 
                            <?php if($list->makhoa == $value->makhoa){ echo"selected";} ?> value="<?php echo $value ->makhoa ?>"> <?php echo $value ->tenkhoa ?> 
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
                <a href="#" class="btn btn-danger  ">Trở về</a>
                <input type="submit" value=" Update " class="btn btn-info">
            </div>

        </form>
    </div>
</div>