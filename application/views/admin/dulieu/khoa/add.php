<div class="x_panel">
    <div class="x_title">
        <h2>Thêm mới khoa</h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
    
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label class="control-label col-lg-3">Tên khoa</label>
                <div class="col-lg-7">
                     <input type="text" id="required2" name="tenkhoa" class="form-control" value="<?php echo set_value('tenkhoa') ?>" placeholder="Tên khoa ">
                     <?php echo form_error('tenkhoa'); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-3">Makhoa</label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="makhoa" class="form-control" value="" placeholder="Ma khoa ">
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
                <a href="/cms_core/admin/modules/category/" class="btn btn-danger  ">Trở về</a>
                <input type="submit" value="Thêm mới danh mục" class="btn btn-info">
            </div>

        </form>
    </div>
</div>