<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh Sửa Quy Định </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">
             


            <div class="form-group <?php echo !empty(form_error('maquydinh')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã quy định : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="maquydinh" class="form-control" value="<?php echo $list ->maquydinh ?>" placeholder="Mã quy định: ">
                   
                    <?php if (!empty(form_error('maquydinh'))) : ?>
                        <span class="text-danger"><?php echo form_error('maquydinh'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group ">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Chọn giáo viên :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="maGV" id="maGV" class="required2">
                    <option value="">Mời bạn chọn giáo viên</option>
                    <?php  foreach ($list_giaovien as $value) { ?>
                        <option <?php echo ($list->maGV == $value ->maGV)?"selected":"" ?> value="<?php echo $value ->maGV ?>"> <?php echo $value ->hoten?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('maGV'))) : ?>
                        <span class="text-danger"><?php echo form_error('maGV'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>
          

            
            <div class="form-group <?php echo !empty(form_error('hocky')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Học kỳ : </label>
                <div class="col-lg-7">
                     <select class="form-control" name="hocky" id="hocky" class="required2">
                        <?php for($i = 1; $i<=10;$i++){ ?>
                            <option <?php echo ($list->kyhoc == $i)?"selected":"" ?> class="hocky"  value="<?php echo $i ?>"> <?php echo  $i ?> </option>
                        <?php } ?>
                    </select>
                   
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

            <div class="form-group <?php echo !empty(form_error('sogiochuan')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Số giờ chuẩn  </label>
                <div class="col-lg-7">
                    <input type="number" id="required2" name="sogiochuan"  class="form-control sogiochuan" value="<?php echo $list ->sogiochuan ?>"  placeholder="Số giờ chuẩn">
                   
                    <?php if (!empty(form_error('sogiochuan'))) : ?>
                        <span class="text-danger"><?php echo form_error('sogiochuan'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


             <div class="form-group <?php echo !empty(form_error('mucthanhtoan')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mức thanh toán  </label>
                <div class="col-lg-7">
                    <input type="number" id="required2" name="mucthanhtoan"  class="form-control  mucthanhtoan" value="<?php echo $list->mucthanhtoan ?>"  placeholder="Mức thanh toán ">
                   
                    <?php if (!empty(form_error('mucthanhtoan'))) : ?>
                        <span class="text-danger"><?php echo form_error('mucthanhtoan'); ?> </p></span>
                    <?php endif; ?>
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
            </div>
            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value="Add New" class="btn btn-info">
            </div>

        </form>
    </div>
</div>