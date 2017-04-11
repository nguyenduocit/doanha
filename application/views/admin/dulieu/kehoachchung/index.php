<div class="x_panel">
    <div class="x_title">
        <h2>Quản Lý Danh Sách Kế Hoạch Chung </h2>
        <div>
            <form method="get" action="<?php echo kehoach_url('kehoachchung/search') ?> ">
                <div class="col-lg-4 pull-right" style="padding-right: 0px;">
                    <div class="input-group">
                        <input type="text"  name="key-search" id="text-search"  class="form-control" placeholder="Nhập vào tên bộ môn ">
                        <span class="input-group-btn">
                          <a href="/"><input type="submit" value="Tìm kiếm " class="btn btn-info"></a>
                        </span>
                    </div>
                </div>
            </form>
            <a href=" <?php echo kehoach_url('kehoachchung/add') ?>" class="btn btn-info pull-right">Thêm mới</a>
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
                    <th>STT</th>
                    <th>Mã kế hoạch</th>
                    <th>Chuyên Ngành</th>
                    <th>Hệ đào tạo</th>
                    <th>Năm học</th>
                    <th>Người Tạo</th>
                    <th>Ngày Tạo</th>
                    <th class="text-center">Active</th>
                    <th  class="text-center">Thao tác</th>
                    <th>Lập kế hoạch</th>
                    <th >Chi Tiết</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($list)) {
                        $stt = 0;

                        # code...
                        foreach ($list as  $value) {  ?>

                         <tr>
                            <td><?php echo $stt = $stt +1 ?></td>
                            <td><?php echo $value ->makehoachchung ?></td>
                            <td><?php echo $value ->tenchuyennganh ?></td>
                            <td><?php echo $value ->tenhedaotao ?></td>
                            <td><?php echo $value ->namhoc ?></td>
                            <td><?php echo $value ->hoten ?></td>
                            <td><?php echo $value ->created_at ?></td>
                                
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
                                <a class="btn btn-xs btn-default" href=" <?php echo kehoach_url('kehoachchung/edit/').$value ->id ?>"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-xs btn-danger btn-delete-action verify_action " href="<?php echo kehoach_url('kehoachchung/delete/').$value ->id ?>"><i class="fa fa-trash-o"></i></a>
                            </td>


                            <td><a href="<?php echo kehoach_url('kehoachchuyennganh/add/').$value->makehoachchung ?>"><button type="button" class="btn btn-primary">Lập Kế Hoạch</button></a></td>

                            <td><a href="<?php echo kehoach_url('Kehoachchuyennganh/view/').$value->makehoachchung ?>"><button type="button" class="btn btn-primary">CT Kế Hoạch</button></a></td>
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