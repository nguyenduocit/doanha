<div class="x_panel">
    <div class="x_title">
        <h2>Quản Lý Danh Sách Giáo Viên</h2>
        <div>
           <form method="get" action="<?php echo admin_url('admin/search') ?> ">
                <div class="col-lg-4 pull-right" style="padding-right: 0px;">
                    <div class="input-group">
                        <input type="text"  name="key-search" id="text-search"  class="form-control" placeholder="Nhập vào tên môn học ">
                        <span class="input-group-btn">
                          <a href="/"><input type="submit" value="Tìm kiếm " class="btn btn-info"></a>
                        </span>
                    </div>
                </div>
            </form>
            <a href=" <?php echo admin_url('admin/add') ?>" class="btn btn-info pull-right">Thêm mới</a>
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
                    <th>Ảnh đại diện</th>
                    <th>Mã GV</th>
                    <th>Họ tên </th>
                    <th>Điện thoại </th>
                    <th>Khoa </th>
                    <th>Bộ môn </th>
                    <th>Chuyên ngành</th>
                    <th>Chức vụ</th>
                    <th>Người tạo</th>
                    <th>Ngày Cập Nhật</th>
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

                            <td><img src="<?php echo base_url('public/upload/').$value ->hinhanh ?>" class="img-thumbnail" alt="Cinque Terre" width="150" height="150"></td>
                            <td><?php echo $value ->maGV ?></td>
                            <td><?php echo $value ->hoten ?></td>
                            <td><?php echo $value ->dienthoai ?></td>
                            <td><?php echo $value ->makhoa ?></td>
                            <td><?php echo $value ->mabomon ?></td>
                            <td><?php echo $value ->manganh ?></td>
                            <td><?php echo $value ->chucvu ?></td>
                            <td><?php echo $value ->nguoithaotac ?></td>
                            <td><?php echo $value ->updated_at ?></td>
                            <td class="text-center">
                                <a class="btn btn-xs btn-default" href=" <?php echo admin_url('admin/edit/').$value ->id ?>"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-xs btn-danger btn-delete-action verify_action " href="<?php echo admin_url('admin/delete/').$value ->id ?>"><i class="fa fa-trash-o"></i></a>
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
                    <a href="" type="button" onclick="history.go(-1); return false;" class="btn btn-danger">Trở Về</a>
                </div>
            </nav>
        </div>
    </div>
</div>