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

                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value=" Tìm kiếm" class="btn btn-info">
                
            </div>

        </form>
    </div>


    <div class="x_content">
        <h2>Bảng kê khai giờ giảng năm học <?php echo isset($namhoc)? $namhoc :''; ?></h2>
        <?php if(isset($list_giaovien)): ?>
        <?php foreach($list_giaovien as $val): ?>
            <p>Họ và tên : <?php echo $val->hoten ?></p>
            <p>
                Bộ Môn :
                <?php
                    foreach($val->tenbomon as $value)
                    {
                        echo $value->tenbomon;
                    }
                 ?>
            </p>
            <p>Chức danh : <?php echo $val->chucvu ?></p>
        <?php endforeach; ?>
        <?php endif; ?>

        <h2>I. Giờ giảng dạy</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Học phần</th>
                    <th>Học kỳ</th>
                    <th>Số TC/ĐVHT</th>
                    <th>Số tiết</th>
                    <th>Mã lớp</th>
                    <th>Sĩ số</th>
                    <th>Hệ số 1 (theo sĩ số)</th>
                    <th>Hệ số 2 (ĐH/ CĐ/ TC/ VHVL)</th>
                    <th>Hệ số 3 (TC/NC)</th>
                    <th>Hệ số 4 (LT/TH)</th>
                    <th>Số giờ được tính </th>
                    <th>Thanh toán tiền ra đề, coi thi, chấm bài</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($list) && !empty($list)) {
                        $stt = 0;
                        $tonggio = 0;

                        # code...
                        //pre($list);
                        $excel = array();
                        foreach ($list as  $value) {  ?>

                         <tr class="row_<?php echo $value->id ?>">
                            <td><?php echo $stt = $stt +1 ; $excel[$stt]['STT'] = $stt;  ?></td>
                            <td><?php echo $value ->tenmonhoc ; $excel[$stt]['tenmonhoc'] = $value ->tenmonhoc ;  ?></td>
                            <td><?php echo $value ->hocky ; $excel[$stt]['hocky'] = $value ->hocky ; ?></td>
                            <td><?php echo  $stc = $value ->soTCLT + $value ->soTCTH ; $excel[$stt]['stc'] = $stc ; ?></td>
                            <td><?php echo $tongsotiet = $value ->soTCLT *15 + $value ->soTCTH * 45 ; $excel[$stt]['tongsotiet'] = $tongsotiet ;  ?></td>
                            <td><?php echo $value ->malop ; $excel[$stt]['malop'] = $value ->malop ;  ?></td>
                            <td><?php echo $value ->siso ; $excel[$stt]['siso'] = $value ->siso ;   ?></td> 
                            <td>
                                <?php
                                   if($value ->siso > 36)
                                   {
                                        echo $hs1 = 1.4;
                                   }
                                   elseif( 31 < $value ->siso && $value ->siso < 36)
                                   {
                                        echo $hs1 = 1.2;
                                   }
                                   elseif(26< $value ->siso  && $value ->siso < 31){

                                        echo $hs1 = 1.1;
                                   }elseif(20 < $value ->siso && $value ->siso < 26)
                                   {
                                        echo $hs1 = 1;
                                   }else{
                                        echo $hs1 = 0.8;
                                   }
                                   $excel[$stt]['hs1'] = $hs1 ;
                                ?>
                                
                            </td>
                            <td><?php echo $hs2 = 1;  $excel[$stt]['hs2'] = $hs2 ; ?></td>
                            <td>
                                <?php
                                    if($value ->soTCLT >=2)
                                    {
                                        echo $hs3 = 1.1;
                                    }elseif($value ->soTCLT <2)
                                    {
                                        echo $hs3 = 1;
                                    }
                                     $excel[$stt]['hs3'] = $hs3 ;
                                 ?>
                                
                            </td>
                            <td>
                                <?php
                                    if($value ->soTCTH >= 0)
                                    {
                                        echo $hs4 = 1;
                                    }elseif($value ->soTCTH = 0)
                                    {
                                        echo $hs4 = 0.6;
                                    }
                                     $excel[$stt]['hs4'] = $hs4 ;
                                 ?>
                            </td>
                            <td>
                                <?php echo $tonggio =  $tongsotiet* $hs1*$hs2*$hs3*$hs4 ?>
                                <?php $data[] = $tonggio  ?>
                                <?php  $excel[$stt]['tonggio'] = $tonggio ;  ?>
                            </td>
                            <td>
                            <?php echo number_format($value ->siso * 4000) ?> 
                            <?php 
                                $chamthi[] = $value ->siso * 4000 ;
                                $excel[$stt]['chamthi'] = $value ->siso * 4000 ;
                            ?> 
                            </td>
                            
                            
                        </tr>

                <?php 
                        $this->session->set_userdata('excel',$excel);
                        }
                    }
                ?>
               
            </tbody>
        </table>
        
        <h2>II. Giờ quy đổi hoạt động khác </h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Nội dung</th>

                    <th>Số lượng</th>
                    <th>Quy đổi</th>
                    <th>Số giờ chuẩn</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($list_hdk) && !empty($list_hdk)) {
                        $stt = 0;
                        $tonggio = 0;


                        # code...
                        //pre($list);
                        foreach ($list_hdk as  $value) {  ?>

                        <tr class="row_<?php echo $value->id ?>">
                            <td><?php echo $stt = $stt +1 ?></td>
                            <td><?php echo $value ->tenmonhoc ?></td>
                           
                            <td>
                            <?php 
                                $ssv =  $value ->soTCTH;
                                if($ssv > 0)
                                {
                                    echo $ssv =  $value ->soTCTH *2 ;
                                }else
                                {
                                    echo $ssv = 4;
                                }
                            
                            ?>
                                
                            </td>
                           
                            <td><?php echo $stt = "2"; ?></td>
                            <td><?php echo $sogio = $ssv * 2; ?></td> 
                           
                            
                            
                        </tr>

                <?php 
                        }
                    }
                ?>
               
            </tbody>
        </table>
    

       <h2>II. Thanh toán thừa giờ </h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Nội dung</th>
                    <th>Số lượng</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Tổng số giờ chuẩn thực hiện trong năm</td>
                    <td>
                        <?php 
                            if(isset($data) && !empty($data)){ 
                                echo  $tonggiothuhien = array_sum($data); 
                                
                            }else{
                             echo 0;
                            } 
                             
                        ?>
                        
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Tổng số giờ tiêu chuẩn</td>
                    <td>
                        <?php
                            $sum = 0;
                            if(isset($sogiochuan)&& !empty($sogiochuan))
                            {
                                foreach($sogiochuan as $val)
                                {
                                     $sum = $sum + $val->sogiochuan;
                                }

                            }
                            

                            echo $sum;
                           
                         ?>
                        
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Số giờ vượt tiêu chuẩn</td>
                    <td>
                        <?php 
                            if(isset($data) && !empty($data))
                            {
                               $tong =  array_sum($data) - $sum ;

                               if($tong >0)
                               {
                                echo $tong;
                               }
                               else{
                                echo $tong =0;
                               }
                               
                            }
                            else
                            {
                                echo $tong  = 0;
                            }

                             
                        ?>
                        
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mức thanh toán</td>
                    <td><?php echo isset($data)?number_format($mucthanhtoan = 30000).'đ' : '0' ?></td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>Thành tiền </td>
                    <td>
                        <?php 
                            if(isset($data) && !empty($data))
                            {
                                $tong =  array_sum($data) - $sum  ;
                                if($tong>0)
                                {
                                    $thanhtien = $tong * 30000;
                                }else{
                                    $thanhtien = 0;
                                }

                               
                                echo number_format($thanhtien).'đ';
                            }
                            else
                            {
                                echo $tong  = 0;
                            }
                         ?>
                    </td>
                </tr>

                <tr>
                    <td>7</td>
                    <td>Hỗ trợ giờ giảng tiêu chuẩn (5000đ/giờ) </td>
                    <td>
                        <?php 
                            if(isset($data) && !empty($data))
                            {
                                $hotro = array_sum($data)- $sum;
                                if($hotro > 0)
                                {
                                    $tienhotro = $hotro * 5000;
                                }
                                else{
                                    $tienhotro = 0;
                                }
                               
                               echo number_format($tienhotro);
                            }
                            else
                            {
                                echo $tong  = 0;
                            }
                         ?>
                    </td>
                </tr>

                <tr>
                    <td>8</td>
                    <td>Chấm bài ra đề : </td>
                    <td>
                        <?php 
                            if(isset($data) && !empty($data))
                            {
                               $tienhotrochamthi = array_sum($chamthi);
                               echo number_format($tienhotrochamthi).'đ';
                            }
                            else
                            {
                                echo $tong  = 0;
                            }
                         ?>
                    </td>
                </tr>
                <tr>
                     <td>9</td>
                     <td><b>Tổng cộng số tiền thanh toán thừa giờ </b></td>
                     <td>
                          <?php 
                            if(isset($data) && !empty($data))
                            {
                              
                                $tongtienthanhtoan = $thanhtien +  $tienhotro + $tienhotrochamthi;
                                echo number_format($tongtienthanhtoan).'đ';
                            }   
                            else
                            {
                                echo $tong  = 0;
                            }
                         ?>
                         
                     </td>
                </tr>
            </tbody>
        </table>
        <table>
            
            <thead>
                <tr>
                    <th><a href="<?php echo keKhai('kekhaigiogiang/xuatExcel') ?>"><button type="button" class="btn btn-primary">Xuất Excel</button></a></th>
                </tr>
            </thead>
           
        </table>
    </div>
    
    
    
</div>