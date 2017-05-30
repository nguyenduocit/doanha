<div class="x_panel">
    <div class="x_title">
        <h2>Phân Công Giảng Dạy Cho Giáo Viên <?php foreach ($list_giaovien as $value) {echo  $value->hoten; } ?> </h2>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
            <?php 
              $this->load->view('admin/partials/alert');
            ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group <?php echo !empty(form_error('giaovien')) ? 'has-error' : '' ?> ">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2">Giáo Viên </label>
                <div class="col-lg-7">
                    <select class="form-control" name="giaovien" id="giaovien" class="required2" >
                    <?php  foreach ($list_giaovien as $value) { ?>
                        <option value="<?php echo $value ->maGV ?>"> <?php echo $value ->hoten?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('giaovien'))) : ?>
                        <span class="text-danger"><?php echo form_error('giaovien'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>
             
            <div class="form-group <?php echo !empty(form_error('lop')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Lớp :</label>
                <div class="col-lg-7">

                <select class="form-control" name="lop" id="lop"  lop="lop" >
                    <option value=""> Chọn lớp </option>
                 <?php foreach ($lop as $key => $value) {
                        # code...
                        echo'<option value = "'.$value->malop.'">'.$value->tenlop.'</option>' ;
                    } ?>
                       
                </select>
                    
                    <?php if (!empty(form_error('lop'))) : ?>
                        <span class="text-danger"><?php echo form_error('lop'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group <?php echo !empty(form_error('hocky')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Học kỳ : </label>
                <div class="col-lg-7">
                    <select class="form-control" name="hocky" id="hockys" hocky ='hocky'>
                       
                        
                        
                    </select>

                    
                    <?php if (!empty(form_error('hocky'))) : ?>
                        <span class="text-danger"><?php echo form_error('hocky'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
            </div>


            


             <div class="form-group <?php echo !empty(form_error('mon')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Danh sách môn cần mở : </label>
                <div class="col-lg-7" >
                    <select class="form-control" name="monhoc" id="monhoc" class="required2">
                    <option value="">Mời bạn chọn môn học</option>
                    
                    </select>
                    <?php if (!empty(form_error('monhoc'))) : ?>
                        <span class="text-danger"><?php echo form_error('monhoc'); ?> </p></span>
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
                <input type="submit" value="Add New" class="btn btn-info">
            </div>

        </form>
    </div>



    <div class="x_content">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã Môn</th>
                    <th>Tên Môn</th>
                    <th>Lớp</th>
                    <th>LT</th>
                    <th>TH</th>
                    <th>T</th>
                    <th>Số Giờ </th>
                    <th>TCM</th>
                    <th>Người tạo </th>
                    <th>Ngày Tạo</th>
                    <th  class="text-center">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($list)) {
                        $stt = 0;

                        # code...
                        //pre($list);
                        foreach ($list as  $value) {  ?>

                         <tr class="row_<?php echo $value->id ?>">
                            <td><?php echo $stt = $stt +1 ?></td>
                            <td><?php echo $value ->mamonhoc ?></td>
                            <td><?php echo $value ->tenmonhoc ?></td>
                            <td><?php echo $value ->tenlop ?></td>
                            <td><?php echo $value ->soTCLT ?></td>
                            <td><?php echo $value ->soTCTH ?></td>
                            <td><?php echo ($value ->soTCTH + $value ->soTCLT) ?></td>
                            <td><?php echo $value ->soTCLT *15 + $value ->soTCTH * 45 ?></td>
                            <td><?php echo $value ->TCM ?></td>
                            
                            <td><?php echo $value ->hoten ?>  </td>
                            <td><?php echo $value ->created_at ?></td>
                            <td class="text-center">
                                <a class="btn btn-xs btn-danger btn-delete-action verify_action delete_pc " id ="<?php echo $value->id ?>"><i class="fa fa-trash-o"></i></a>
                            </td>
                            
                        </tr>
                <?php 
                        }
                    }
                 ?>
                 <tr>
                     <td>Tổng giờ: </td>
                     <td colspan="15">
                        <?php
                             $sum = 0;
                             foreach($list as $value)
                             {
                                $sum = $sum + $value ->soTCLT *15 + $value ->soTCTH * 45 ;
                             }
                             echo "<b>".$sum."</b>";
                        ?>
                     </td>
                 </tr>
               
            </tbody>
        </table>
        <div class="pagina">
            <nav aria-label="Page navigation" class="clearfix">
                <div class="pagi">
                    <?php
                    echo $this->pagination->create_links();
                    ?>
                </div>
                
                <div class="pull-right" style="margin-top: 20px;">
                    <a href="" type="button" class="btn btn-danger" onclick="history.go(-1); return false;" >Trở Về</a>
                </div>
            </nav>
        </div>
    </div>
</div>