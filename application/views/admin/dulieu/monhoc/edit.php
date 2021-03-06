<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh Sửa Môn Học </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('tenmonhoc')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Tên môn học : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="tenmonhoc" class="form-control" value="<?php echo $list->tenmonhoc?>" placeholder = " Tên môn học ">
                   
                    <?php if (!empty(form_error('tenmonhoc'))) : ?>
                        <span class="text-danger"><?php echo form_error('tenmonhoc'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group <?php echo !empty(form_error('mamonhoc')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Mã môn học : </label>
                <div class="col-lg-7">
                    <input type="text" id="required2" name="mamonhoc" readonly="readonly" class="form-control" value="<?php echo $list->mamonhoc  ?>" placeholder = " Tên mã môn học ">
                   
                    <?php if (!empty(form_error('mamonhoc'))) : ?>
                        <span class="text-danger"><?php echo form_error('mamonhoc'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group <?php echo !empty(form_error('mahedaotao')) ? 'has-error' : '' ?>">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Chọn hệ đào tạo :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="mahedaotao">
                    <option value=""> Chọn hệ đào tạo</option>

                    <?php  foreach ($list_hedaotao as $value) { ?>
                        
                        <option <?php if($list ->mahedaotao == $value ->mahedaotao){ echo "selected";} ?>  value="<?php echo $value ->mahedaotao ?>"> <?php echo $value ->tenhedaotao?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('mahedaotao'))) : ?>
                        <span class="text-danger"><?php echo form_error('mahedaotao'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('machuyennganh')) ? 'has-error' : '' ?>">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Tên chuyên ngành :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="machuyennganh">
                    <option value="">Chọn chuyên ngành</option>

                    <?php  foreach ($list_chuyennganh as $value) { ?>
                        
                        <option <?php if($list ->machuyennganh == $value ->machuyennganh){ echo "selected";} ?> class="chuyennganh" machuyennganh="<?php echo $value ->machuyennganh ?>"  value="<?php echo $value ->machuyennganh ?>"> <?php echo $value ->tenchuyennganh?> </option>
                    <?php } ?>
                    </select>
                     <?php if (!empty(form_error('machuyennganh'))) : ?>
                        <span class="text-danger"><?php echo form_error('machuyennganh'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>

             <div class="form-group <?php echo !empty(form_error('tengiaovien')) ? 'has-error' : '' ?> ">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Giáo viên giảng dạy :</label>
                <div class="col-lg-7">
                    <select class="form-control" name="tengiaovien">
                     <option value="">Chọn giáo viên</option>

                    <?php  foreach ($list_giaovien as $value) { ?>
                       
                        <option <?php echo ($list->giaovien == $value ->maGV )?"selected":"" ?> class="maGV" maGV="<?php echo $value ->hoten ?>"  value="<?php echo $value ->maGV ?>"> <?php echo $value ->hoten?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('tengiaovien'))) : ?>
                        <span class="text-danger"><?php echo form_error('tengiaovien'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('maloaimon')) ? 'has-error' : '' ?>">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Loại Môn:</label>
                <div class="col-lg-7">
                    <select class="form-control" name="maloaimon">
                    <option value="">Chọn loại môn</option>

                    <?php  foreach ($list_loaimon as $value) { ?>
                        
                        <option <?php if($list ->maloaimon == $value ->maloaimon){ echo "selected";} ?>  value="<?php echo $value ->maloaimon ?>"> <?php echo $value ->tenloaimon ?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('maloaimon'))) : ?>
                        <span class="text-danger"><?php echo form_error('maloaimon'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>


            <div class="form-group <?php echo !empty(form_error('TCM')) ? 'has-error' : '' ?>">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">TCM:</label>
                <div class="col-lg-7">
                    <select class="form-control" name="TCM">
                        <option value="">Chọn </option>
                        <option value="ĐC" <?php if($list ->TCM ==='ĐC'){ echo "selected";} ?> >ĐC</option>
                        <option value="CSN" <?php if($list ->TCM ==='CSN'){ echo "selected";} ?> >CSN</option>
                        <option value="CN" <?php if($list ->TCM ==='CN'){ echo "selected";} ?> >CN</option>          
                        <option value="TH" <?php if($list ->TCM ==='TH'){ echo "selected";} ?> >TH</option>
                        <option value="TN" <?php if($list ->TCM ==='TN'){ echo "selected";} ?> >TN</option>
                        <option value="XN" <?php if($list ->TCM ==='XN'){ echo "selected";} ?> >XN</option>
                    </select>

                    <?php if (!empty(form_error('TCM'))) : ?>
                        <span class="text-danger"><?php echo form_error('TCM'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('soTCTH')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3"> Số tín chỉ thực hành : </label>
                <div class="col-lg-7">
                    <input type="number" id="required2" name="soTCTH" class="form-control" value="<?php echo $list ->soTCTH ?>"  placeholder="soTCTH">
                   
                    <?php if (!empty(form_error('soTCTH'))) : ?>
                        <span class="text-danger"><?php echo form_error('soTCTH'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

             <div class="form-group <?php echo !empty(form_error('soTCLT')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Số tín chỉ lý thuyết : </label>
                <div class="col-lg-7">
                    <input type="number" id="required2" name="soTCLT" class="form-control" value="<?php echo $list ->soTCLT ?>"  placeholder="soTCLT">
                   
                    <?php if (!empty(form_error('soTCLT'))) : ?>
                        <span class="text-danger"><?php echo form_error('soTCLT'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-2"></div>
                <label class="control-label col-lg-1">Active</label>
                <div class="col-lg-3">
                    <select class="form-control" name="active">
                        <option <?php  if($list->hienthi == 1){echo "selected";} ?> value="1">Hiện</option>
                        <option <?php echo ($list->hienthi == 0)?"selected": ""; ?> value="0">Ẩn</option>
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