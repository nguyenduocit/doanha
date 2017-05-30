<div class="x_panel">
    <div class="x_title">
        <h2>Quản Lý Danh Sách Kế Hoạch Theo Lớp </h2>
        <div>
            <form method="get" action="<?php echo kehoach_url('kehoachtheolop/search') ?> ">
                <div class="col-lg-4 pull-right" style="padding-right: 0px;">
                    <div class="input-group">
                        <input type="text"  name="key-search" id="text-search"  class="form-control" placeholder="Nhập vào mã lớp ">
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
                    <th>Hệ đào tạo </th>
                    <th>Năm học</th>
                    <th>Người Tạo</th>
                    <th>Ngày Tạo</th>
                    <th>Lập kế hoạch</th>
                    <th>Chi tiết </th>
                    <th class="text-center">Thao tác</th>

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
                            <td><?php echo $value ->tenchuyennganh ?></td>
                            <td><?php echo $value ->tenlop ?></td>
                            <td><?php echo $value ->tenhedaotao ?></td>
                            <td><?php echo $value ->namhoc ?></td>
                            <td><?php echo $value ->hoten ?></td>
                            <td><?php echo $value ->created_at ?></td>

                            <td>
                                <a href="<?php echo kehoach_url('kehoachtheolop/addKeHoachLop/').$value->id ?>"><button type="button" class="btn btn-primary">Lập Kế Hoạch</button></a>
                            </td>

                            <td>
                                <a href="<?php echo kehoach_url('Kehoachtheolop/viewKeHoachLop/').$value->id ?>"><button type="button" class="btn btn-primary">CT Kế Hoạch</button></a>
                            </td>

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