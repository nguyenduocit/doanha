<div class="x_panel">
    <div class="x_title">
        <h2>Quản Lý Danh Sách Khoa </h2>
        <div>
            <form method="get" action="<?php echo admin_url('khoa/search') ?> ">
                <div class="col-lg-4 pull-right" style="padding-right: 0px;">
                    <div class="input-group">
                        <input type="text"  name="key-search" id="text-search"  class="form-control" placeholder="Nhập vào tên khoa ">
                        <span class="input-group-btn">
                          <a href="/"><input type="submit" value="Tìm kiếm " class="btn btn-info"></a>
                        </span>
                    </div>
                </div>
            </form>
            <a href=" <?php echo admin_url('khoa/add') ?>" class="btn btn-info pull-right">Thêm mới</a>
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
                    <th>Tên Khoa</th>
                    <th>Mã Khoa</th>
                    <th>Ngày Tạo</th>
                    <th>Ngày Cập Nhật</th>
                    <th>Người Tạo</th>
                    <th class="text-center">Active</th>
                    <th colspan="2" class="text-center">Thao tác</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if (isset($list)) {
                    # code...
                    foreach ($list as $key => $value) {

                        echo '
                             <tr>
                                <td>'.$value ->id.'</td>
                                <td>'.$value ->tenkhoa.'</td>
                                <td>'.$value ->makhoa.'</td>
                                <td>'.$value ->created_at.'</td>
                                <td>'.$value ->updated_at.'</td>
                                <td>'.$value ->nguoithaotac.'</td>
                                
                                ';
                                if($value ->hienthi == 0)
                                    {
                                        echo '
                                        <td class="text-center">
                                            <a href="" class="btn btn-xs btn-default">Ẩn</a>
                                        </td>';
                                    }
                                    else{
                                        echo '
                                        <td class="text-center">
                                            <a href="" class="btn btn-xs btn-default">Hiện</a>
                                        </td>';
                                    }
                                    
                                

                                echo '
                                <td class="text-center">
                                    <a class="btn btn-xs btn-default" href="'.admin_url('khoa/edit/').$value ->id.'"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-xs btn-danger btn-delete-action verify_action " href="'.admin_url('khoa/delete/').$value ->id.'"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        ';
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