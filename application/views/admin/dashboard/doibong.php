<div class="row">
    <div class="col-sm-6">Quản lý đội</div>
    <div class="col-sm-6">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <a href="<?php echo admin_url('team/add'); ?>">Thêm đội</a>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">Danh sách đội</div>
    <div class="col-sm-6">Số lượng: <b><?php echo $total; ?></b></div>
</div>

<div class="row">
<form action="<?php echo admin_url('team'); ?>" method="get" accept-charset="utf-8">
        Mã số: <input type="number" name="id" value="<?php echo $this->input->get('id'); ?>" placeholder="">
        Tên: <input type="text" name="name" value="<?php echo $this->input->get('name'); ?>" placeholder="">
        Giải đấu: 
        <select name="league">
        <option value=0></option>
            <?php 
            foreach ($select as $row):
             ?>
         <option value="<?php echo $row->id; ?>" <?php if($row->id==$this->input->get('league')){echo "selected";}?>>
            <?php echo $row->Ten; ?>   
         </option>
         <?php 
         endforeach;
         ?>
     </select>
     <input class="btn btn-info" type="submit" name="" value="Lọc">
     <input class="btn btn-default" type="reset" name="" value="Xóa">
 </form>    
</div>

<div class="row table-responsive">
    <table class="table table-hover">
        <tr>
            <th>#</th>
            <th>Tên đội</th> 
            
            <th>Số trận</th>
            <th>Số điểm</th>
            <th>Hành động</th>
        </tr>
        <?php 
        foreach ($list as $row):
            ?>
        <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->Ten; ?></td>
            
            <td><?php echo $row->sotran; ?></td>
            <td><?php echo $row->diem; ?></td> 
            <td>

                <i class="fa fa-wrench" aria-hidden="true"></i>
                <i class="fa fa-trash-o" aria-hidden="true"></i>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </table>
</div>  

<div class="pagination">
    <?php echo $this->pagination->create_links(); ?>
</div>



