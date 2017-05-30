<div class="x_panel">
    <div class="x_title">
        <h2>Kê khai giờ giảng</h2>


        <div class="clearfix"></div>
    </div>
    
    <?php 
        $this->load->view('admin/partials/alert'); //pre($list_bomon);
    ?> 

    <div class="x_content">

          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

           <div class="form-group <?php echo !empty(form_error('namhoc')) ? 'has-error' : '' ?>  " >
                <div class="col-lg-1">
                </div>
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

                <div class="form-group">
                       
                        <label class="control-label col-lg-1">Bộ môn:</label>
                        <div class="col-lg-3">
                            <select class="form-control" name="mabomon" id="mabomon">

                            <?php  foreach ($list_bomon as $value) { ?>
                                <option  value="<?php echo $value ->mabomon ?>"> <?php echo $value ->tenbomon ?> </option>
                            <?php } ?>
                            </select>
                           
                        </div>
                
                </div>

                <div class="form-group col-lg-5 ">
                </div>
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value=" Tìm kiếm" class="btn btn-info">
                
            </div>

        </form>
    </div>


    <div class="x_content">
        <h2>BẢNG TỔNG HỢP THANH TOÁN TIỀN DẠY VƯỢT GIỜ, COI THI, CHẤM THI, HỖ TRỢ GIẢNG DẠY NĂM HỌC <?php echo isset($namhoc)? $namhoc :''; ?></h2>
        <?php
            if(isset($tenbomon) && !empty($tenbomon)){
                foreach($tenbomon as $val)
                {
                    echo"<p>".$val->tenbomon."</p>";
                }
            }
         ?>

        <?php $sum0 = 0; $sum1 = 0; ?>
        <?php  if (isset($list) && !empty($list)): ?>
            <p>Tổng số giáo viên : <?php echo count($list) ?></p>
        <?php foreach($list as $val): ?> 
            <p>Tổng số giờ thực hiện:
                <?php
                    echo $sum2 = $sum0 +  $val ->sogiothuchien ;
                ?> 
            </p>
            <P>Tổng số giờ tiêu chuẩn:
                <?php
                    echo $sum3 = $sum1 +  $val ->sogiotieuchuan ;
                ?> 
            </P>
         <?php endforeach; ?>
        <?php endif?>
            <h2>I. Giờ giảng dạy</h2>

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Họ và Tên</th>
                    <th>Trình độ</th>
                    <th>Chức danh </th>
                    <th>Sĩ số</th>
                    <th>Số giờ tiêu chuẩn</th>
                    <th>Số giờ thực hiện/th>
                    <th>Số giờ vượt mức</th>
                    <th>Mức thanh toán</th>
                    <th>Thành tiền</th>
                    <th>Chấm thi (4000đ/SV)</th>
                    <th>Hỗ trợ (5000đ/tiết tiêu chuẩn) </th>
                    <th>Tổng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($list) && !empty($list)) {
                        $stt = 0;
                        $tonggio = 0;

                        # code...
                        //pre($list);
                        foreach ($list as  $value) {  ?>

                         <tr class="row_<?php echo $value->id ?>">
                            <td><?php echo $stt = $stt +1 ?></td>
                            <td><?php echo $value ->hoten ?></td>
                            <td><?php echo $value ->trinhdo ?></td>
                            <td><?php echo $value ->hocham ?></td>
                            <td><?php echo $value ->siso ?></td>
                            <td><?php echo $value ->sogiotieuchuan ?></td>
                            <td><?php echo $value ->sogiothuchien ?> </td> 
                            <td><?php echo (( $giovuot = $value ->sogiothuchien - $value ->sogiotieuchuan)>0)?$giovuot:'0' ?></td>
                            <td><?php echo '30,000 đ'; ?></td>
                            <td>
                                <?php 
                                    if($giovuot >0)
                                    {
                                        $thanhtien = $giovuot * 30000;
                                        echo number_format($thanhtien).'đ';
                                    }else
                                    {
                                        $thanhtien = 0;
                                        echo '0';
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($value ->siso >0)
                                    {
                                        $chamthi = $value ->siso *4000;
                                        echo number_format($chamthi).'đ';
                                    }else
                                    {
                                        $chamthi ='0';
                                        echo '0';
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($giovuot >0)
                                    {
                                        $hotro = $giovuot * 5000;
                                        echo number_format($hotro).'đ';
                                    }else
                                    {
                                        $hotro = 0;
                                        echo '0';
                                    }
                                 ?>
                               
                            </td>
                            <td>
                                <?php
                                    $tong = $thanhtien + $chamthi + $hotro;
                                    echo number_format($tong).'đ';
                                 ?>
                            </td>
                            
                            
                        </tr>

                <?php 
                        }
                    }
                ?>
               
            </tbody>
        </table>
    
        <table>
            
            <thead>
                <tr>
                    <th><a href=""><button type="button" class="btn btn-primary">Xuất Excel</button></a></th>
                </tr>
            </thead>
           
        </table>
    </div>
    
    
    
</div>