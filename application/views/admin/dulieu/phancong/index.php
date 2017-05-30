<div class="x_panel">
    <div class="x_title">
        <h2>Danh Sách Giáo Viên Được Phân Công </h2>
         <div>
            <form method="get" action="<?php echo kehoachgiangday_url('phancong/search') ?> ">
                <div class="col-lg-4 pull-right" style="padding-right: 0px;">
                    <div class="input-group">
                        <input type="text"  name="key-search" id="text-search"  class="form-control" placeholder="Nhập tên giáo viên được phân công ">
                        <span class="input-group-btn">
                          <a href="/"><input type="submit" value="Tìm kiếm " class="btn btn-info"></a>
                        </span>
                    </div>

                    <a href=" <?php echo kehoachgiangday_url('phancong/add') ?>" class="btn btn-info pull-right">Phân Công</a>
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
                    <th>Mã Giáo Viên</th>
                    <th>Tên Giáo viên  </th>
                    <th>Năm học</th>
                    <th>Học Kỳ</th>
                    <th>Người Tạo</th>
                    <th>Ngày Tạo</th>
                    <th>Phân Công</th>
                    <th>Chi tiết </th>
                    <th>Hành Động</th>

                </tr>
            </thead>
            <tbody>
                <?php

                    if (isset($list)) {
                        # code...
                        foreach ($list as  $value) {  ?>

                         <tr>
                            <td><?php echo $value ->id ?></td>
                            <td><?php echo $value ->maGV ?></td>
                            <td><?php echo $value ->hoten ?></td>
                            <td><?php echo $value ->namhoc ?></td>
                            <td><?php echo $value ->hocky ?></td>
                            <td><?php 
                                $tennguoithaotac = $value ->tengiaovien ;
                               
                                //echo $tennguoithaotac ->hoten;
                            ?></td>
                            <td><?php echo $value ->created_at ?></td>

                            <td>
                                <a href="<?php echo kehoachgiangday_url('Chitietphancong/add/').$value->id ?>"><button type="button" class="btn btn-primary">Phân công</button></a>
                            </td>

                            <td>
                                <a href="<?php echo kehoachgiangday_url('Chitietphancong/showList/').$value->id ?>"><button type="button" class="btn btn-primary">CT Kế Hoạch</button></a>
                            </td>

                            <td class="text-center">
                                <a class="btn btn-xs btn-danger btn-delete-action verify_action " href="<?php echo kehoachgiangday_url('phancong/delete/').$value ->id ?>"><i class="fa fa-trash-o"></i></a>
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