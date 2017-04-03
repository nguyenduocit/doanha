<div class="x_panel">
    <div class="x_title">
        <h2>Quản Lý Danh Sách Kế Hoạch Theo Lớp </h2>
        <div>
            <form method="get" action="<?php echo kehoach_url('kehoachtheolop/search') ?> ">
                <div class="col-lg-4 pull-right" style="padding-right: 0px;">
                    <div class="input-group">
                        <input type="text"  name="key-search" id="text-search"  class="form-control" placeholder="Nhập vào tên bộ môn ">
                        <span class="input-group-btn">
                          <a href="/"><input type="submit" value="Tìm kiếm " class="btn btn-info"></a>
                        </span>
                    </div>
                </div>
            </form>
            <a href=" <?php echo kehoach_url('kehoachtheolop/add') ?>" class="btn btn-info pull-right">Thêm mới</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
        <?php 
              $this->load->view('admin/partials/alert');
              //pre($list_bomon);
        ?> 
    <!-- Hiện thông báo -->
    <div class="x_content">

        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Mã kế hoạch</th>
                    <th>Chuyên ngành</th>
                    <th>Lớp </th>
                    <th>Môn học </th>
                    <th>Học kỳ</th>
                    <th>Năm học</th>
                    <th>Người Tạo</th>
                    <th>Ngày Tạo</th>
                    <th>Ngày Cập Nhật</th>
                    <th class="text-center">Active</th>
                    <th colspan="2" class="text-center">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    if (isset($list)) {
                        # code...
                        foreach ($list as  $value) {  ?>

                         <tr>
                            <td><?php echo $value ->id ?></td>
                            <td><?php echo $value ->makehoachtheolop?></td>
                            <td><?php echo $value ->machuyennganh ?></td>
                            <td><?php echo $value ->malop ?></td>
                            <td>
                                <?php 
                                
                                     $monhoc = json_decode($value->monhoc);
                                     $count = count($monhoc);

                                     for($i=0 ; $i<$count ; $i++)
                                     {
                                        echo $monhoc[$i]."<br/>";
                                     }
                                     
                                ?>
                            </td>
                            <td><?php echo $value ->hocky ?></td>
                            <td><?php echo $value ->namhoc ?></td>
                            <td><?php echo $value ->nguoithaothac ?></td>
                            <td><?php echo $value ->created_at ?></td>
                            <td><?php echo $value ->updated_at ?></td>
                                
                            <?php   if($value ->hienthi == 0): ?>
                                <td class="text-center">
                                    <a href="" class="btn btn-xs btn-default">Ẩn</a>
                                </td>
                            <?php else :?>
                                <td class="text-center">
                                    <a href="" class="btn btn-xs btn-default">Hiện</a>
                                </td>
                             <?php endif; ?>
               
                            <td class="text-center">
                                <a class="btn btn-xs btn-default" href=" <?php echo kehoach_url('kehoachtheolop/edit/').$value ->id ?>"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-xs btn-danger btn-delete-action verify_action " href="<?php echo kehoach_url('kehoachtheolop/delete/').$value ->id ?>"><i class="fa fa-trash-o"></i></a>
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