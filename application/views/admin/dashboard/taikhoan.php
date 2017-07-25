<div class="row">
    <div class="col-sm-6">Quản lý tài khoản</div>
    <div class="col-sm-6">
        <i class="fa fa-plus" aria-hidden="true">
            <a href="<?php echo admin_url('admin/add'); ?>">Thêm tài khoản</a>
        </i>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">Danh sách tài khoản</div>
    <div class="col-sm-6">Số lượng: <?php echo $total; ?></div>
</div>

<div class="row table-responsive">
    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Username</th> 
            <th>Password</th>
            <th>Tên người dùng</th>
            <th>Hành động</th>
        </tr>
        <?php foreach ($list as $row): 
                    # code...
        ?>
        <tr>
            <td><?php echo $row->id ?></td>
            <td><?php echo $row->username ?></td>
            <td><?php echo $row->pass ?></td>
            <td><?php echo $row->ten ?></td> 
            <td>
                <a href="<?php echo admin_url('admin/'); ?>update/<?php echo $row->id; ?>">
                    <i class="fa fa-wrench" aria-hidden="true"></i>
                </a>
                <a href="<?php echo admin_url('admin/'); ?>delete/<?php echo $row->id; ?>" onclick="return confirm('Bạn có muốn xóa?');">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</div>  
