<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh Sửa Trình Độ</h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('tentrinhdo')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên trình độ : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tentrinhdo" class="form-control" value="<?php echo $list->tentrinhdo ?>" placeholder="Tên trình độ">
                   
                    <?php if (!empty(form_error('tentrinhdo'))) : ?>
                        <span class="text-danger"><?php echo form_error('tentrinhdo'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

             <div class="form-group <?php echo !empty(form_error('matrinhdo')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã trình độ : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="matrinhdo" class="form-control" value="<?php echo $list->matrinhdo ?>" placeholder="Mã hoc hàm">
                   
                    <?php if (!empty(form_error('matrinhdo'))) : ?>
                        <span class="text-danger"><?php echo form_error('matrinhdo'); ?> </p></span>
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