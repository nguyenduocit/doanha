<div class="x_panel">
    <div class="x_title">
        <h2>Chi Tiết kế Hoạch Cho Lớp <?php foreach ($lop as $key => $value) { echo $value->tenlop;} ?>   - năm học <?php echo $namhoc ?></h2>

      
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
                        foreach ($hedaotao as $key => $value) {
                            echo $value->tenhedaotao;

                        } 
                    ?> 
                    </th>
                    <th colspan="3"> Tổng Số Tín Chỉ </th>
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
                    <th colspan="1"> Áp Dụng Cho </th>
                    <th colspan="4">TK10 Trở đi</th>
                </tr>
                <tr>
                    <th colspan="2">Lớp </th>
                    <th colspan="3">
                    <?php 
                        foreach ($lop as $key => $value) {
                            echo $value->tenlop;
                        } 
                    ?> 
                    </th>
                    <th colspan="3"> Tổng Số Học Phần </th>
                     <th colspan="1"> <?php echo count($list) ?> </th>
                     <th colspan="1"> Đào Tạo  </th>
                    <th colspan="5">4 năm (40 tháng)</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã KH Lớp</th>
                    <th>Mã Môn</th>
                    <th>Tên Môn</th>
                    <th>LT</th>
                    <th>TH</th>
                    <th>T</th>
                    <th>TCM</th>
                    <th>HK</th>
                    <th>GV Giảng dạy</th>
                    <th>Ngày Tạo</th>
                    
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
                            <td><?php echo $value ->makehoachtheolop ?></td>
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
                            
                           
                            
                        </tr>
                <?php 
                        }
                    }
                 ?>
               
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