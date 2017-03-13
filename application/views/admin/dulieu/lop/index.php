<div class="x_panel">
    <div class="x_title">
        <h2>Quản Lý Danh Sách Lớp </h2>
        <div>
            <form>
                <div class="col-lg-4 pull-right" style="padding-right: 0px;">
                    <div class="input-group">
                        <input type="text"  name="search" class="form-control" placeholder="Nhập từ khóa tìm kiếm ">
                        <span class="input-group-btn">
                          <input type="submit" name="submit" value="Tìm kiếm " class="btn btn-info">
                        </span>
                    </div>
                </div>
            </form>
            <a href=" <?php echo admin_url('lop/add') ?>" class="btn btn-info pull-right">Thêm mới</a>
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
                    <th>Mã Lớp</th>
                    <th>Mã hệ đào tạo</th>
                    <th>Tên lớp </th>
                    <th>Sĩ số </th>
                    <th>Mã chuyên ngành </th>
                    <th>Giáo viên chủ nhiệm </th>
                    <th>Người tạo</th>
                    <th>Ngày Tạo</th>
                    <th>Ngày Cập Nhật</th>
                    <th class="text-center">Active</th>
                    <th colspan="2" class="text-center">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($list)) {
                        //// lưu vào mảng data ;
                         //`machuyennganh`, `tenchuyennganh`, `mabomon`, `nguoithaotac`, `hienthi`, `created_at`, `updated_at`
                        # code...
                        foreach ($list as  $value) {  ?>

                         <tr>
                            <td><?php echo $value ->id ?></td>
                            <td><?php echo $value ->malop ?></td>
                            <td><?php echo $value ->mahedaotao ?></td>
                            <td><?php echo $value ->tenlop ?></td>
                            <td><?php echo $value ->siso ?></td>
                            <td><?php echo $value ->machuyennganh ?></td>
                            <td><?php echo $value ->gvcn ?></td>
                            <td><?php echo $value ->nguoithaotac ?></td>
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
                                <a class="btn btn-xs btn-default" href=" <?php echo admin_url('lop/edit/').$value ->id ?>"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-xs btn-danger btn-delete-action verify_action " href="<?php echo admin_url('lop/delete/').$value ->id ?>"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                <?php 
                        }
                    }
                 ?>
               
            </tbody>
        </table>
        <div>
            <nav aria-label="Page navigation" class="clearfix">
                <?php
                    echo $this->pagination->create_links();
                ?>
                <div class="pull-right" style="margin-top: 20px;">
                    <a href="" type="button" onclick="history.go(-1); return false;" class="btn btn-danger">Trở Về</a>
                </div>
            </nav>
        </div>
    </div>
</div>