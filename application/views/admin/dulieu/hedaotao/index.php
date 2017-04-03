<div class="x_panel">
    <div class="x_title">
        <h2>Quản Lý Hệ Đào Tạo </h2>
        <div>
            <form method="get" action="<?php echo admin_url('hedaotao/search') ?> ">
                <div class="col-lg-4 pull-right" style="padding-right: 0px;">
                    <div class="input-group">
                        <input type="text"  name="key-search" id="text-search"  class="form-control" placeholder="Nhập vào tên hệ đào tạo ">
                        <span class="input-group-btn">
                          <a href="/"><input type="submit" value="Tìm kiếm " class="btn btn-info"></a>
                        </span>
                    </div>
                </div>
            </form>
            <a href="<?php echo admin_url('hedaotao/add')  ?>" class="btn btn-info pull-right">Thêm mới</a>
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
                    <th>Mã Hệ đào tạo</th>
                    <th>Tên hệ đào tạo</th>
                    <th>Số kỳ</th>
                    <th>Hệ số</th>
                    <th>Ngày Thêm</th>
                    <th>Ngày Cập Nhật</th>
                    <th>Người Tạo</th>
                    <th class="text-center">Active</th>
                    <th colspan="2" class="text-center">Thao tác</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($list as $item) :?>
                    <tr>
                        <td><?php echo $item->id ?></td>
                        <td><?php echo $item->mahedaotao ?></td>
                        <td><?php echo $item->tenhedaotao ?></td>
                        <td><?php echo $item->soky ?></td>
                        <td><?php echo $item->hs2 ?></td>
                        <td><?php echo $item->created_at ?></td>
                        <td><?php echo $item->updated_at ?></td>
                        <td><?php echo $item->nguoithaotac ?></td>
                        <td class="text-center">
                           <?php   if( $item ->hienthi == 0): ?>
                               
                                    <a href="" class="btn btn-xs btn-default">Ẩn</a>
                                
                            <?php else :?>
                                
                                    <a href="" class="btn btn-xs btn-default">Hiện</a>
                                
                             <?php endif; ?>
                        </td>
                        <td class="text-center">
                            <a class="btn btn-xs btn-default" href="<?php echo admin_url('hedaotao/edit/').$item ->id ?>"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-xs btn-danger btn-delete-action" href="<?php echo admin_url('hedaotao/delete/').$item->id ?>"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                <?php endforeach ; ?>
            </tbody>
        </table>
        <div>
            <nav aria-label="Page navigation" class="clearfix" id="custom-nav">
                <ul class="pagination" ">
                    <?php echo $this->pagination->create_links(); ?>
                </ul>
                <div class="pull-right" style="margin-top: 20px;">
                    <a href="" type="button" class="btn btn-danger">Trở Về</a>
                </div>
            </nav>
        </div>
    </div>
</div>