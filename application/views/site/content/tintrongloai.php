<div class="container">
<?php
	$input['where'] = array('id' => $this->uri->rsegment(3) );
	$league = $this->league_model->get_list($input);
	foreach ($league as $row):
?>
	<nav class="breadcrumb">
	  <a class="breadcrumb-item" href="<?php echo base_url(); ?>">Trang chủ</a>
	  <span class="breadcrumb-item active"><?php echo $row->Ten; ?></span>
	</nav>
<?php
	endforeach;
?>
<?php
	foreach ($baiviet as $row):
		$name = str_slug($row->TieuDe);
		$name = strtolower($name);
?>

	<div class="row tintrongloai">
		<div class="col-4 my-auto">
			<img src="<?php echo $row->UrlHinh; ?>" class="img-fluid" alt="">
		</div>
		<div class="col-8 text-justify">
			<a href="<?php echo base_url($name.'-a').$row->id.'.html'; ?>">
				<?php echo $row->TieuDe; ?>
			</a>
			<p class="text-muted"><?php echo $row->TomTat; ?></p>
		</div>
	</div>
<?php 
	endforeach;
?>
</div>