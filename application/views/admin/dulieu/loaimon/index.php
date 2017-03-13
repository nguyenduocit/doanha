<div class="x_panel">
    <div class="x_title">
        <h2>Quản Lý Loại Môn </h2>
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
            <a href="<?php echo admin_url('loaimon/add')  ?>" class="btn btn-info pull-right">Thêm mới</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- Hiện thông báo -->
    <?php  $this->load->view('admin/partials/alert') ?>
    <!-- Hiện thông báo -->
    <div class="x_content">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Mã loại môn</th>
                    <th>Tên loại môn</th>
                    <th>Quy đổi</th>
                    <th>Người Tạo</th>
                    <th>Ngày Thêm</th>
                    <th>Ngày Cập Nhật</th>
                  
                    <th colspan="2" class="text-center">Thao tác</th>
                </tr>
            </thead>
                
            <tbody>
                <?php foreach($list as $item) :?>
                    <tr>
                        <td><?php echo $item->id ?></td>
                        <td><?php echo $item->maloaimon  ?></td>
                        <td><?php echo $item->tenloaimon ?></td>
                        <td><?php echo $item->quydoi ?></td>
                        <td><?php echo $item->nguoithaotac?></td>
                        <td><?php echo $item->created_at ?></td>
                        <td><?php echo $item->updated_at ?></td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-default" href="<?php echo admin_url('loaimon/edit/').$item ->id ?>"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-xs btn-danger btn-delete-action" href="<?php echo admin_url('loaimon/delete/').$item->id ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                <?php endforeach ;?>
            </tbody>
        </table>
        <div>
            <nav aria-label="Page navigation" class="clearfix" id="custom-nav">
                <ul class="pagination" ">
                    <?php echo $this->pagination->create_links(); ?>
                </ul>
                <div class="pull-right" style="margin-top: 20px;">
                    <a href="" type="button" class="btn btn-danger" onclick="history.go(-1); return false;" >Trở Về</a>
                </div>
            </nav>
        </div>
    </div>
</div>