<div class="x_panel">
    <div class="x_title">
        <h2>Quản Lý Danh Sách Khoa </h2>
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
            <a href=" <?php echo admin_url('khoa/add') ?>" class="btn btn-info pull-right">Thêm mới</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
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
                if (isset($list_khoa)) {
                    # code...
                    foreach ($list_khoa as $key => $value) {

                        # code...
                        echo '
                             <tr>
                                <td>1</td>
                                <td>Công Nghệ Thông Tin</td>
                                <td>001</td>
                                <td>06-10-2017</td>
                                <td>06-10-2017</td>
                                <td>Phan Trung Phú</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-xs btn-default">Ẩn</a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-xs btn-default" href=""><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-xs btn-danger btn-delete-action" href=""><i class="fa fa-trash-o"></i></a>
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
                <ul class="pagination" >
                    <li>
                        <a href=""  aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <li><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li>
                        <a href="" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
                <div class="pull-right" style="margin-top: 20px;">
                    <a href="" type="button" class="btn btn-danger">Trở Về</a>
                </div>
            </nav>
        </div>
    </div>
</div>