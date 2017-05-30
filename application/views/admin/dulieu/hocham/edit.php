<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh Sửa Học Hàm</h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('tenhocham')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên học hàm : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenhocham" class="form-control" value="<?php echo $list->tenhocham ?>" placeholder="Tên học hàm">
                   
                    <?php if (!empty(form_error('tenhocham'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenhocham'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

             <div class="form-group <?php echo !empty(form_error('mahocham')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã học hàm : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" readonly="readonly" name="mahocham" class="form-control" value="<?php echo $list->mahocham ?>" placeholder="Mã hoc hàm">
                   
                    <?php if (!empty(form_error('mahocham'))) : ?>
                        <span class="text-danger"><?php echo form_error('mahocham'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group">
                
                
                
            </div>
            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;">Trở về</a>
                <input type="submit" value="Update" class="btn btn-info">
            </div>

        </form>
    </div>
</div>