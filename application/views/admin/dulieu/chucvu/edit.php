<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh Sửa Chức Vụ</h2>
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
                <label class="control-label col-lg-3">Tên trình độ : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenchucvu" class="form-control" value="<?php echo $list->tenchucvu ?>" placeholder="Tên trình độ">
                   
                    <?php if (!empty(form_error('tenchucvu'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenchucvu'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

             <div class="form-group <?php echo !empty(form_error('machucvu')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã trình độ : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" readonly="readonly" name="machucvu" class="form-control" value="<?php echo $list->machucvu ?>" placeholder="Mã hoc hàm">
                   
                    <?php if (!empty(form_error('machucvu'))) : ?>
                        <span class="text-danger"><?php echo form_error('machucvu'); ?> </p></span>
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