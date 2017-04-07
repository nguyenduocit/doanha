<div class="x_panel">
    <div class="x_title">
        <h2>Thêm Kế Hoạch Chung </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('makehoachchung')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã kế hoạch  : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="makehoachchung" class="form-control" value="<?php set_value('makehoachchung') ?>" placeholder="Mã kế hoạch: ">
                   
                    <?php if (!empty(form_error('makehoachchung'))) : ?>
                        <span class="text-danger"><?php echo form_error('makehoachchung'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Chọn hệ đào tạo :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="mahedaotao">

                    <?php  foreach ($list_hedaotao as $value) { ?>
                        <option  value="<?php echo $value ->mahedaotao ?>"> <?php echo $value ->tenhedaotao?> </option>
                    <?php } ?>
                    </select>
                   
                </div>
            </div>

             <div class="form-group">
                <div class="col-lg-2"></div>
                <label class="control-label col-lg-1">Tên Khoa</label>
                <div class="col-lg-7">
                    <select class="form-control" name="makhoa" id="makhoa">

                    <?php  foreach ($list_khoa as $value) { ?>
                        <option value="<?php echo $value ->makhoa ?>"> <?php echo $value ->tenkhoa ?> </option>
                    <?php } ?>
                    </select>
                   
                </div>
            </div>


            <div class="form-group">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Bộ môn :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="mabomon" id="mabomon">

                   <!--  <?php  //foreach ($list_bomon as $value) { ?>
                        <option class="bomon" mabomon="<?php //echo $value ->mabomon ?>"  value="<?php //echo $value ->mabomon ?>"> <?php //echo $value ->tenbomon?> </option>
                    <?php //} ?> -->
                    </select>
                   
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2"> Chuyên Ngành :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="machuyennganh" id="machuyennganh">

                   <!--  <?php  //foreach ($list_bomon as $value) { ?>
                        <option class="bomon" mabomon="<?php //echo $value ->mabomon ?>"  value="<?php //echo $value ->mabomon ?>"> <?php //echo $value ->tenbomon?> </option>
                    <?php //} ?> -->
                    </select>
                   
                </div>
            </div>

            
            <div class="form-group <?php echo !empty(form_error('hocky')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Học kỳ : </label>
                <div class="col-lg-7">
                    <select class="form-control" name="hocky">

                    <?php for($i = 1; $i<=10;$i++){ ?>
                        <option class="hoclky" value="<?php echo $i ?>"> <?php echo  $i ?> </option>
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
                <label class="control-label col-lg-3">Số lớp cần mở: </label>
                <div class="col-lg-7">
                    <input type="number" id="required2" name="solop" class="form-control" value="<?php set_value('solop') ?>"  placeholder="Sĩ số">
                   
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
                <input type="submit" value=" Add New" class="btn btn-info">
            </div>

        </form>
    </div>
</div>