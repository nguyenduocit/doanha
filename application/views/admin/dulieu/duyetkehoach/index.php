<div class="x_panel">
    <div class="x_title">
        <h2>Duyệt Kế Hoạch Đào Tạo </h2>
         <div>
            <form method="get" action="<?php echo kehoachgiangday_url('duyetkehoachdt/search') ?> ">
                <div class="col-lg-4 pull-right" style="padding-right: 0px;">
                    <div class="input-group">
                        <input type="text"  name="key-search" id="text-search"  class="form-control" placeholder="Nhập vào năm học cần duyệt ">
                        <span class="input-group-btn">
                          <a href="/"><input type="submit" value="Tìm kiếm " class="btn btn-info"></a>
                        </span>
                    </div>
                </div>
            </form>
        </div>
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
                    <th>Id</th>
                    <th>Mã kế hoạch</th>
                    <th>Lớp </th>
                    <th>Chuyên ngành</th>
                    <th>Hệ đào tạo </th>
                    <th>Năm học</th>
                    <th>Người Tạo</th>
                    <th>Ngày Tạo</th>
                    <th>Dyệt kế hoạch</th>
                    <th>Chi tiết </th>

                </tr>
            </thead>
            <tbody>
                <?php

                    if (isset($list)) {
                        # code...
                        foreach ($list as  $value) {  ?>

                         <tr>
                            <td><?php echo $value ->id ?></td>
                            <td><?php echo $value ->makehoachtheolop ?></td>
                            <td><?php echo $value ->tenlop ?></td>
                            <td><?php echo $value ->tenchuyennganh ?></td>
                            <td><?php echo $value ->tenhedaotao ?></td>
                            <td><?php echo $value ->namhoc ?></td>
                            <td><?php echo $value ->hoten ?></td>
                            <td><?php echo $value ->created_at ?></td>

                            <td>
                               <input type="radio" name="<?php echo 'duyet'.$value ->id ?>" id ='1' makehoach="<?php echo $value ->id ?>" class="duyet" <?php echo ($value->duyet == 1) ? 'checked':'' ?>> Duyệt </br>
                               <input type="radio" name="<?php echo 'duyet'.$value ->id ?>" id ='0' makehoach="<?php echo $value ->id ?>" class="duyet" <?php echo ($value->duyet == 0) ? 'checked':'' ?> > Chưa duyệt 
                            </td>

                            <td>
                                <a href="<?php echo kehoach_url('Kehoachtheolop/viewKeHoachLop/').$value->id ?>"><button type="button" class="btn btn-primary">CT Kế Hoạch</button></a>
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
                <?php
                    echo $this->pagination->create_links();
                ?>
                <div class="pull-right" style="margin-top: 20px;">
                    <a href="" type="button" class="btn btn-danger" onclick="history.go(-1); return false;" >Trở Về</a>
                </div>
            </nav>
        </div>
    </div>
</div>