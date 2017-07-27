<div class="row">
    <div class="col-sm-6">Quản lý giải đấu</div>
    <div class="col-sm-6">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <a href="<?php echo admin_url('league/add'); ?>">Thêm giải</a>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">Danh sách giải</div>
    <div class="col-sm-6">Số lượng: <?php echo $total; ?></div>
</div>

<div class="row table-responsive">
    <table class="table table-hover">
        <tr>
                        <th>#</th>
                        <th>Tên giải</th> 
                        <th>Hành động</th>
                    </tr>
                    <?php foreach ($list as $row): {
                        # code...
                    } ?>
                    <tr>
                        <td><?php echo $row->id; ?></td>
                        <td><?php echo $row->Ten; ?></td>
                        <td>
                            <i class="fa fa-sticky-note" aria-hidden="true"></i>
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                        </td>
                    </tr>
                    <?php 
                        endforeach;
                     ?>
                </table>
            </div>  
