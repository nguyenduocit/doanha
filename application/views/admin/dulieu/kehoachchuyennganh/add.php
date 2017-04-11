<div class="x_panel">
    <div class="x_title">
        <h2>Lập kế hoạch chung cho chuyên ngành  </h2>


        <div class="clearfix"></div>
    </div>
    
    <?php 
              $this->load->view('admin/partials/alert'); //pre($list_bomon);
        ?> 

    <div class="x_content">
          <form action="" class="form-horizontal" id="block-validate" novalidate="novalidate" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <div class="col-lg-1"></div>
                <label class="control-label col-lg-2"> Chuyên Ngành :</label>
                <div class="col-lg-7">
                   <select class="form-control" name="machuyennganh" >
                   <?php foreach ($list_chuyennganh as $key => $value) {
                        # code...
                        echo'<option value = "'.$value->machuyennganh.'">'.$value->tenchuyennganh.'</option>' ;
                    } ?>
                       
                       
                   </select>
                </div>
            </div>

            
            <div class="form-group <?php echo !empty(form_error('hocky')) ? 'has-error' : '' ?>">
                <label class="control-label col-lg-3">Học kỳ : </label>
                <div class="col-lg-7">
                    <select class="form-control" name="hocky">

                    <?php for($i = 1; $i<=10;$i++){ ?>
                        <option class="hoclky" value="<?php echo $i ?>"> <?php echo  $i ?> </option>
                    <?php } ?>
                    </select>
                    <?php if (!empty(form_error('hocky'))) : ?>
                        <span class="text-danger"><?php echo form_error('hocky'); ?> </p></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-3">Chọn Môn Học</label>
                <div class="col-lg-7">
                    <select class="form-control" name="mamonhoc" id="mamonhoc">

                    <?php  foreach ($list_monhoc as $value) { ?>
                        <option value="<?php echo $value ->mamonhoc ?>"> <?php echo $value ->tenmonhoc ?> </option>
                    <?php } ?>
                    </select>
                   
                </div>
            </div>

            <div class="form-actions no-margin-bottom" style="text-align:center;">
                <a href="#" class="btn btn-danger  " onclick="history.go(-1); return false;" >Trở về</a>
                <input type="submit" value=" Add New" class="btn btn-info">
            </div>

        </form>
    </div>



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
                            <td class="text-center">
                                <a class="btn btn-xs btn-danger btn-delete-action verify_action delete_kh " id ="<?php echo $value->id ?>"><i class="fa fa-trash-o"></i></a>
                            </td>
                            
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

    <!-- Hiện thông báo -->
        
    
    
</div>