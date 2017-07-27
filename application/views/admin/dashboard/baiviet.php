<div class="row">
    <div class="col-sm-6">Quản lý bài viết</div>
    <div class="col-sm-6"><i class="fa fa-plus" aria-hidden="true"></i>Thêm bài viết</div>
</div>

<div class="row">
    <div class="col-sm-6">Danh sách bài viết</div>
    <div class="col-sm-6">Số lượng: <b><?php echo $total; ?></b></div>
</div>

<div class="row">
    <form action="" method="post" accept-charset="utf-8">
        Mã số: <input type="number" name="" value="" placeholder="">
        Tên: <input type="text" name="" value="" placeholder="">
        Giải đấu: 
    <select name="">
        <option value="">Anh</option>
        <option value="">Pháp</option>
        <option value="">Nga</option>
    </select>
    <input type="submit" name="" value="Lọc">
</form>    
</div>

<div class="row table-responsive">
    <table class="table table-hover">
        <tr>
                        <th>#</th>
                        <th>Tiêu đề</th> 
                        <th>Tóm tắt</th>
                        <th>Url hình</th>
                        <th>Số lần xem</th>
                        <th>Ngày đăng</th>
                        <th>Hành động</th>
                    </tr>
<?php 
    foreach ($list as $row):
?>
                    <tr>
                        <td>1</td>
                        <td><?php echo $row->TieuDe; ?></td>
                        <td><?php echo $row->TomTat; ?></td> 
                        <td><?php echo $row->UrlHinh; ?></td> 
                        <td><?php echo $row->SoLanXem; ?></td> 
                        <td><?php echo $row->Ngay; ?></td> 

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
        