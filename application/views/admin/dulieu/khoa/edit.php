<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh sửa khoa</h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
              //pre($list_khoa);
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">
          
             <div class="form-group <?php echo !empty(form_error('tenkhoa')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên Khoa : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenkhoa" class="form-control" value=" <?php echo $list_khoa ->tenkhoa; ?>" placeholder="Tên khoa">
                   
                    <?php if (!empty(form_error('tenkhoa'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenkhoa'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

             <div class="form-group <?php echo !empty(form_error('makhoa')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã Khoa : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="makhoa" class="form-control" value="<?php echo $list_khoa ->makhoa; ?>" placeholder="Mã khoa">
                   
                    <?php if (!empty(form_error('makhoa'))) : ?>
                        <span class="text-danger"><?php echo form_error('makhoa'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group">
                <div class="col-lg-2"></div>
                <label class="control-label col-lg-1">Active</label>
                <div class="col-lg-3">
                    <select class="form-control" name="active">
                        <option 
                        <?php 
                            if($list_khoa ->hienthi ==1)
                            {
                                echo "selected";
                            }
                        ?> 
                        value="1">Hiện</option>
                        <option
                           <?php 
                            if($list_khoa ->hienthi ==0)
                            {
                                echo "selected";
                            }
                        ?>  
                         value="0">Ẩn</option>
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                
                
                
            </div>
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="/cms_core/admin/modules/category/" class="btn btn-danger  ">Trở về</a>
                <input type="submit" value=" Update " class="btn btn-info">
            </div>

        </form>
    </div>
</div>