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
                    <input type="text" id="required2" name="makehoachtheolop" class="form-control" value="" placeholder="Mã kế hoạch: ">
                   
                    <?php if (!empty(form_error('makehoachtheolop'))) : ?>
                        <span class="text-danger"><?php echo form_error('makehoachtheolop'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

             <div class="form-group <?php echo !empty(form_error('mahedaotao')) ? 'has-error' : '' ?>  " >
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Chọn hệ đào tạo :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="mahedaotao">
                    <option value=" "> Chọn hệ đào tạo </option>
                    <?php  foreach ($list_hedaotao as $value) { ?>
                        <option  value="<?php echo $value ->mahedaotao ?>"> <?php echo $value ->tenhedaotao?> </option>
                    <?php } ?>
                    </select>

                    <?php if (!empty(form_error('mahedaotao'))) : ?>
                        <span class="text-danger"><?php echo form_error('mahedaotao'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>


            <div class="form-group <?php echo !empty(form_error('machuyennganh')) ? 'has-error' : '' ?> ">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Chọn chuyên ngành :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="machuyennganh" id="machuyennganh" class="required2">
                    <option value="">Mời bạn chọn chuyên ngành</option>
                    <?php  foreach ($list_chuyennganh as $value) { ?>
                        <option value="<?php echo $value ->machuyennganh ?>"> <?php echo $value ->tenchuyennganh?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('machuyennganh'))) : ?>
                        <span class="text-danger"><?php echo form_error('machuyennganh'); ?> </p></span>
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


            <div class="form-group <?php echo !empty(form_error('lop')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Chọn lớp :</label>
                <div class="col-lg-7">

                <select class="form-control" name="lop" id="lop">
                <option value=" ">Mời bạn chọn lớp </option>

                </select>
                    
                    <?php if (!empty(form_error('lop'))) : ?>
                        <span class="text-danger"><?php echo form_error('lop'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value="Add New" class="btn btn-info">
            </div>

        </form>
    </div>
</div>