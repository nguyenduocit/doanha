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
                                <a class="btn btn-xs btn-danger btn-delete-action verify_action delete_kl " id ="<?php echo $value->id ?>"><i class="fa fa-trash-o"></i></a>
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