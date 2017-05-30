<div class="x_panel">
    <div class="x_title">
        <h2>Phân Công Giảng dạy </h2>


        <div class="clearfix"></div>
    </div>
    
    <?php 
              $this->load->view('admin/partials/alert'); //pre($list_bomon);
        ?> 

    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('tengiaovien')) ? 'has-error' : '' ?> ">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Giáo viên giảng dạy :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="tengiaovien">
                    <option value="">Chọn giáo viên </option>
                    <?php  foreach ($list_giaovien as $value) { ?>
                        <option class="tengiaovien" machuyennganh="<?php echo $value ->hoten ?>"  value="<?php echo $value ->maGV ?>"> <?php echo $value ->hoten?> </option>
                    <?php } ?>
                    </select>

                    <?php if (!empty(form_error('tengiaovien'))) : ?>
                        <span class="text-danger"><?php echo form_error('tengiaovien'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('hocky')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Học kỳ : </label>
                <div class="col-lg-7">
                     <select class="form-control" name="hocky" id="hockys" hocky ='hocky'>
                        <option value="">Mời bạn chọn học kỳ</option>
                        <?php for($i = 1; $i<=10;$i++){ ?>
                            <option class="hocky"  value="<?php echo $i ?>"> <?php echo  $i ?> </option>
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

            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value=" Add New" class="btn btn-info">
            </div>

        </form>
    </div>



    
    
    
</div>