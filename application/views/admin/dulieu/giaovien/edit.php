<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh Sửa Thông Tin Giáo Viên </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">
                <div class="col-lg-6">


                    <div class="form-group <?php echo !empty(form_error('hoten')) ? 'has-error' : '' ?>">
                        <label class="control-label col-lg-4">Họ và tên : </label>
                        <div class="col-lg-7">
                            <input type="text" id="required2" name="hoten" disabled="disabled"  class="form-control" value="<?php echo $list->hoten?>" placeholder = "Họ và tên " index="1">
                           
                            <?php if (!empty(form_error('hoten'))) : ?>
                                <span class="text-danger"><?php echo form_error('hoten'); ?> </p></span>
                            <?php endif; ?>
                        </div>
                    </div>



                    <div class="form-group">
                       
                        <label class="control-label col-lg-4">Khoa :</label>
                        <div class="col-lg-7">
                            <select class="form-control" name="makhoa" index="3">

                            <?php  foreach ($list_khoa as $value) { ?>
                                <option <?php echo $list->makhoa == $value->makhoa?"selected":" "; ?>  value="<?php echo $value ->makhoa ?>"> <?php echo $value ->tenkhoa?> </option>
                            <?php } ?>
                            </select>
                           
                         </div>
                    </div>



                    <div class="form-group">
                       
                        <label class="control-label col-lg-4">Bộ môn:</label>
                        <div class="col-lg-7">
                            <select class="form-control" name="mabomon">

                            <?php  foreach ($list_bomon as $value) { ?>
                                <option <?php echo $list->mabomon == $value->mabomon?"selected":" "; ?>  value="<?php echo $value ->mabomon ?>"> <?php echo $value ->tenbomon ?> </option>
                            <?php } ?>
                            </select>
                           
                        </div>
                    </div>


                    <div class="form-group">
                        
                        <label class="control-label col-lg-4">Tên chuyên ngành :</label>
                        <div class="col-lg-7">
                            <select class="form-control" name="machuyennganh">

                            <?php  foreach ($list_chuyennganh as $value) { ?>
                                <option <?php echo $list->manganh == $value->machuyennganh?"selected":" "; ?> class="chuyennganh" machuyennganh="<?php echo $value ->machuyennganh ?>"  value="<?php echo $value ->machuyennganh ?>"> <?php echo $value ->tenchuyennganh?> </option>
                            <?php } ?>
                            </select>
                           
                        </div>
                    </div>


                   <!--  <div class="form-group <?php //echo !empty(form_error('image')) ? 'has-error' : '' ?>">
                        <label class="control-label col-lg-4">Ảnh đại diện : </label>
                        <div class="col-lg-7">
                            <input type="file" name="image" id="image" class="form-control"  >
                        </div>
                    </div>
 -->
                    <div class="form-group"></div>


                   <!--  <div class="form-group <?php //echo !empty(form_error('sex')) ? 'has-error' : '' ?>">
                         <label class="control-label col-lg-4">Giới tính : </label>
                        <div class="col-lg-7">
                            <input type="radio" checked="" value="1" id="optionsRadios1" name="sex"> Nam 
                            <input type="radio"  value="1" id="optionsRadios1" name="sex"> Nữ 
                        </div>
                    </div> -->


                    <!--  end -->
                </div>


                <div class="col-lg-6">
                    
                    <div class="form-group <?php echo !empty(form_error('email')) ? 'has-error' : '' ?>">
                        <label class="control-label col-lg-4">Email : </label>
                        <div class="col-lg-7">
                            <input type="email" id="required2" disabled="disabled" name="email" class="form-control" value="<?php echo $list->email ?>" placeholder = "Email">
                           
                            <?php if (!empty(form_error('email'))) : ?>
                                <span class="text-danger"><?php echo form_error('email'); ?> </p></span>
                            <?php endif; ?>
                        </div>
                    </div>

                     <div class="form-group <?php echo !empty(form_error('maGV')) ? 'has-error' : '' ?>">
                        <label class="control-label col-lg-4">Mã giáo viên : </label>
                        <div class="col-lg-7">
                            <input type="text" id="required2" name="maGV" class="form-control" value="<?php echo $list->maGV ?>" placeholder = " Mã giáo viên"  index="2">
                           
                            <?php if (!empty(form_error('maGV'))) : ?>
                                <span class="text-danger"><?php echo form_error('maGV'); ?> </p></span>
                            <?php endif; ?>
                        </div>
                    </div>
                    

                    <div class="form-group <?php echo !empty(form_error('diachi')) ? 'has-error' : '' ?>">
                        <label class="control-label col-lg-4">Địa Chỉ : </label>
                        <div class="col-lg-7">
                            <input type="text" id="required2" disabled="disabled" name="diachi" class="form-control" value="<?php echo $list->diachi ?>" placeholder = "dienthoai" >
                           
                            <?php if (!empty(form_error('diachi'))) : ?>
                                <span class="text-danger"><?php echo form_error('diachi'); ?> </p></span>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="form-group <?php echo !empty(form_error('ngaysinh')) ? 'has-error' : '' ?>">
                        <label class="control-label col-lg-4">Ngày sinh : </label>
                        <div class="col-lg-7">
                            <input type="date" id="required2" disabled="disabled" name="ngaysinh" class="form-control" value="<?php echo $list->ngaysinh ?>" placeholder = "dienthoai" >
                           
                            <?php if (!empty(form_error('ngaysinh'))) : ?>
                                <span class="text-danger"><?php echo form_error('ngaysinh'); ?> </p></span>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="form-group <?php echo !empty(form_error('dienthoai')) ? 'has-error' : '' ?>">
                        <label class="control-label col-lg-4">Số điện thoại : </label>
                        <div class="col-lg-7">
                            <input type="number" id="required2" disabled="disabled" name="dienthoai" class="form-control" value="<?php echo $list->dienthoai ?>" placeholder = "">
                           
                            <?php if (!empty(form_error('dienthoai'))) : ?>
                                <span class="text-danger"><?php echo form_error('dienthoai'); ?> </p></span>
                            <?php endif; ?>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-lg-4">Học hàm:</label>
                        <div class="col-lg-7">
                            <select class="form-control" name="hocham">
                            <?php foreach($list_hocham as $value )  {?>
                               <option <?php echo $list->hocham == $value->mahocham?"selected":" "; ?>  value="<?php echo $value ->tenhocham ?>"><?php echo $value ->tenhocham ?></option>
                            <?php } ?>
                            </select>
                           
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Chức vụ:</label>
                        <div class="col-lg-7">
                            <select class="form-control" name="chucvu">
                            <?php foreach($list_chucvu as $value )  {?>
                               <option <?php echo $list->chucvu == $value->machucvu?"selected":" "; ?>  value="<?php echo $value ->tenchucvu ?>"><?php echo $value ->tenchucvu ?></option>
                            <?php } ?>
                            </select>
                           
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-lg-4">Trìn độ:</label>
                        <div class="col-lg-7">
                            <select class="form-control" name="trinhdo">
                            <?php foreach($list_trinhdo as $value )  {?>
                               <option <?php echo $list->trinhdo == $value->matrinhdo?"selected":" "; ?> value="<?php echo $value ->tentrinhdo ?>"><?php echo $value ->tentrinhdo ?></option>
                            <?php } ?>
                            </select>
                           
                        </div>
                    </div>
                   <!--  end -->


                </div>
            <div class="form-group"></div>
            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value="Update" class="btn btn-info">
            </div>

        </form>
    </div>
</div>