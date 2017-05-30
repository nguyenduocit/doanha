<div class="x_panel">
    <div class="x_title">
        <h2>Kế hoạch giảng dạy cho giảng viên </h2>


        <div class="clearfix"></div>
    </div>
    
    <?php 
        $this->load->view('admin/partials/alert'); //pre($list_bomon);
    ?> 

    <div class="x_content">

          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

           <div class="form-group <?php echo !empty(form_error('namhoc')) ? 'has-error' : '' ?>  " >
                <div class="col-lg-2"></div>
                <label class="control-label col-lg-2">Năm Học :</label>
                <div class="col-lg-3">
                    <select class="form-control" name="namhoc">
                    <?php foreach($data_year as $value): ?>
                        <option <?php echo (isset($namhoc) == $value ->namhoc)?'selected':'' ?>   value="<?php echo $value ->namhoc ?>"> <?php echo $value ->namhoc ?> </option>
                    <?php endforeach; ?>
                    </select>

                    <?php if (!empty(form_error('namhoc'))) : ?>
                        <span class="text-danger"><?php echo form_error('namhoc'); ?> </p></span>
                    <?php endif; ?>
                   
                </div>
                <div class=" <?php echo !empty(form_error('hocky')) ? 'has-error' : ''?>">
                    <label class="control-label col-lg-1">Học kỳ : </label>
                    <div class="col-lg-2">
                        <select class="form-control" name="hocky">
                        <?php for($i = 1; $i<=10;$i++){ ?>
                            <option <?php echo ($hocky == $i )?'selected':'' ?>  class="hoclky" value="<?php echo $i ?>"> <?php echo  $i ?> </option>
                        <?php } ?>
                        </select>
                        <?php if (!empty(form_error('hocky'))) : ?>
                            <span class="text-danger"><?php echo form_error('hocky'); ?> </p></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


           


            
            
            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value=" Tìm kiếm" class="btn btn-info">
            </div>

        </form>
    </div>


    <div class="x_content">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã giáo viên </th>
                    <th>Tên giáo viên</th>
                    <th>Số giờ phân công</th>
                    <th>Số giờ tiêu chuẩn</th>
                    <th>Ngày Tạo</th>
                    <th  class="text-center">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($phancong)) {
                        $stt = 0;

                        # code...
                        //pre($list);
                        foreach ($phancong as  $value) {  ?>

                         <tr class="row_<?php echo $value->id ?>">
                            <td><?php echo $stt = $stt +1 ?></td>
                            <td><?php echo $value ->maGV ?></td>
                            <td><?php echo $value ->hoten ?></td>
                            <td><?php echo $value ->time ?></td>
                            <td>
                                <?php 
                                    foreach($value ->giochuan as $giochuan)
                                    {
                                        echo $giochuan->sogiochuan;
                                    }
                                ?>
                                
                            </td>
                            <td><?php echo $value ->created_at ?></td>
                            <td class="text-center">
                                <a href="<?php echo kehoachgiangday_url('DanhSachPhanCong/showList/'.$value->id.'/'.$namhoc.'/'.$hocky) ?>"><button type="button" class="btn btn-primary">Xem chi tiết</button></a>
                            </td>
                            
                        </tr>
                <?php 
                        }
                    }
                 ?>
               
            </tbody>
        </table>
       
    </div>
    
    
    
</div>