<div class="container">
	<div class="rank">
		<span class="text-uppercase">Bảng xếp hạng</span>
		<select id="number" onchange="load_ajax()">
			<option value="0">-- Chọn giải --</option>
			
			<?php 
				foreach ($league_list as $row):
			?>
				<option value="<?php echo $row->id; ?>">
					<?php echo $row->Ten; ?>
				</option>
			<?php 
				endforeach;
			?>
			
		</select>
		<div id="result_">
			<div class="row">
				<div class="col-12">
					<table class="table table-responsive">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên đội</th>
								<th>Số trận</th>
								<th>Số điểm</th>
							</tr>
						</thead>
						<tbody id="result">

						
						</tbody>
					</table>
				</div> 
			</div>
		</div>
	</div>
	<div class="maxview">
		<span class="text-uppercase">Tin xem nhiều</span>
<?php 
	foreach ($tinxemnhieu as $row):
		$name = str_slug($row->TieuDe);
		$name = strtolower($name);
?>
		<div class="row">
			<div class="col-3 my-auto">
				<img src="<?php echo $row->UrlHinh; ?>" alt="" class="img-fluid">
			</div>
			<div class="col-9">
				<span>
					<a href="<?php echo base_url($name.'-a').$row->id.'.html'; ?>"><?php echo $row->TieuDe; ?></a>
				</span>
			</div>
		</div>
<?php
	endforeach;
?>
	</div>
	
</div>