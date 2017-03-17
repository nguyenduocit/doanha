<div class="x_panel">
    <div class="x_title">
        <h2>Thêm Kế Hoạch Theo Lớp </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('makehoachtheolop')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã kế hoạch  : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="makehoachtheolop" class="form-control" value="<?php echo $list ->makehoachtheolop ?>" placeholder="Mã kế hoạch: ">
                   
                    <?php if (!empty(form_error('makehoachtheolop'))) : ?>
                        <span class="text-danger"><?php echo form_error('makehoachtheolop'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Chọn chuyên ngành :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="machuyennganh">

                    <?php  foreach ($list_chuyennganh as $value) { ?>
                        <option <?php echo $list->chuyennganh == $value->machuyennganh ? "selected":"" ?>   value="<?php echo $value ->machuyennganh ?>"> <?php echo $value ->tenchuyennganh?> </option>
                    <?php } ?>
                    </select>
                   
                </div>
          

            
            <div class="form-group <?php echo !empty(form_error('hocky')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Học kỳ : </label>
                <div class="col-lg-7">
                    <select class="form-control" name="hocky">

                    <?php for($i = 1; $i<=10;$i++){ ?>
                        <option<?php echo $list->hocky == $i ? "selected":"" ?> class="hoclky" value="<?php echo $i ?>"> <?php echo  $i ?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('hocky'))) : ?>
                        <span class="text-danger"><?php echo form_error('hocky'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('namhoc')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Năm học </label>
                <div class="col-lg-7">
                    <?php 
                        $now = getdate(); 
                        $nam =  $now["year"];
                        $nams = $nam + 1;
                        $namhoc = $nam."-".$nams;
                      ?>
                    <input type="text" id="required2" name="namhoc" readonly="readonly" class="form-control" value="<?php echo $namhoc ?>"  placeholder="Năm học">
                   
                    <?php if (!empty(form_error('namhoc'))) : ?>
                        <span class="text-danger"><?php echo form_error('namhoc'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('solop')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Số được mỏ: </label>
                <div class="col-lg-7">
                    <input type="number" id="required2" name="solop" class="form-control" value="<?php echo $list->solop ?>"  placeholder="Sĩ số">
                   
                    <?php if (!empty(form_error('solop'))) : ?>
                        <span class="text-danger"><?php echo form_error('solop'); ?> </p></span>
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
                <input type="submit" value="Update" class="btn btn-info">
            </div>

        </form>
    </div>
</div>