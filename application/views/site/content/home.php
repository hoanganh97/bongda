<?php 
foreach ($list as $row):
	$input['order'] = array('id' , 'ASC');
$input['limit'] = array('1' , '0');
$input['where'] = array('idLeague' => $row->id);
$list_tinmoinhat1tin = $this->baiviet_model->get_list($input);

$input4['order'] = array('id' , 'ASC');
$input4['limit'] = array('5' , '1');
$input4['where'] = array('idLeague' => $row->id);
$list_tinmoinhat4tin = $this->baiviet_model->get_list($input4);	
?>
<div class="new">
	<span class="league text-uppercase"><?php echo $row->Ten; ?></span>
	<div class="row">
		<div class="col-12 col-md-7 text-justify">
			<?php
			foreach ($list_tinmoinhat1tin as $tin):
				$name = str_slug($tin->TieuDe);
				$name = strtolower($name);
		 		# code...
				?>
			<img src="<?php echo $tin->UrlHinh; ?>" class="img-fluid" alt="">
			<span class="title">
				<a href="<?php echo base_url($name.'-a').$tin->id.'.html'; ?>">
					<?php echo $tin->TieuDe; ?>
				</a>
			</span>
			<br>
			<span class="des text-muted">
				<?php echo $tin->TomTat; ?>
			</span>
			<?php 
			endforeach;
			?>
		</div>
		<div class="col-12 col-md-5 text-justify">
			<?php 
			foreach ($list_tinmoinhat4tin as $tin4):
				$name = str_slug($tin4->TieuDe);
				$name = strtolower($name);
			?>
			
				<i class="fa fa-chevron-right d-inline-block" aria-hidden="true">
					<a href="<?php echo base_url($name.'-a').$tin4->id.'.html'; ?>">
						<span class="bantin"><?php echo $tin4->TieuDe; ?></span>
					</a>
				</i>
			
			<?php 
			endforeach;
			?>
		</div>
	</div>
</div>
<?php
endforeach;
?>