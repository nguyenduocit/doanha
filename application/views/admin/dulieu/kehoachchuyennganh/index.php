<div class="x_panel">
    <div class="x_title">
        <h2>Chi Tiết kế hoạch chung cho chuyên ngành  </h2>


        <div class="clearfix"></div>
    </div>
    
    <?php 
        $this->load->view('admin/partials/alert');
    ?> 

    
    <div class="x_content">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th colspan="5">Kế Hoạch Đào Tạo
                        <?php 
                        foreach ($list_hedaotao as $key => $value) {
                            echo $value->tenhedaotao;

                        } 
                    ?> 
                    </th>
                    <th colspan="3"> Tổng Số Tín Chỉ<?php //echo strtoupper(); ?> </th>
                    <th colspan="1"> 
                    <?php 
                        $TLT = 0;
                        $TTH = 0;
                        foreach ($list as  $value) {
                            $TLT = $TLT + $value ->soTCLT ;

                            $TTH = $TTH + $value ->soTCTH;

                        }  

                        echo $T = $TLT + $TTH;
                    ?> 
                    </th>
                    <th colspan="1"> Áp Dụng Cho <?php //echo strtoupper(); ?> </th>
                    <th colspan="4">TK10 Trở đi</th>
                </tr>
                <tr>
                    <th colspan="2">Chuyên Ngành  </th>
                    <th colspan="3">
                    <?php 
                        foreach ($list_chuyennganh as $key => $value) {
                            echo $value->tenchuyennganh;
                        } 
                    ?> 
                    </th>
                    <th colspan="3"> Tổng Số Học Phần<?php //echo strtoupper(); ?> </th>
                     <th colspan="1"> <?php echo count($list) ?> </th>
                     <th colspan="1"> Đào Tạo  <?php //echo strtoupper(); ?> </th>
                    <th colspan="5">4 năm (40 tháng)</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã Môn</th>
                    <th>Tên Môn</th>
                    <th>LT</th>
                    <th>TH</th>
                    <th>T</th>
                    <th>TCM</th>
                    <th>HK</th>
                    <th>GV Giảng dạy</th>
                    <th>Ngày Tạo</th>
                    <th>Ngày Cập Nhật</th>
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
                            <td><?php echo $value ->soTCLT ?></td>
                            <td><?php echo $value ->soTCTH ?></td>
                            <td><?php echo ($value ->soTCTH + $value ->soTCLT) ?></td>
                            <td><?php echo $value ->TCM ?></td>
                            <td><?php echo $value ->hocky ?></td>
                            <td>
                            <?php 
                                if(!$value->tengiaovien)
                                {
                                    echo "N.A";
                                }
                                else
                                {
                                    $tengiaovien  = $value->tengiaovien;
                                    echo $tengiaovien ->hoten;

                                }
                            
                            ?>
                                
                            </td>
                            <td><?php echo $value ->created_at ?></td>
                            
                            <td><?php echo $value ->updated_at ?></td>
                        </tr>
                <?php 
                        }
                    }
                 ?>
               
            </tbody>
        </table>
        
        
        <!-- <div class="x_content">
            <div class="">
                <i class="fa fa-print " style="font-size: 50px;"></i>
            </div>
        </div> -->
    </div>

</div>