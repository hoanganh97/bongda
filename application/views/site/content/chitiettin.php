<?php
	foreach ($tin as $row):
?>
<div class="container">
	<h3 class="title">
		<strong>
			<?php echo $row->TieuDe; ?>
		</strong>
	</h3>
	<div>
		<span>
			<i class="fa fa-eye" aria-hidden="true">
				<?php echo $row->SoLanXem; ?>
			</i>
		</span>
		<span>
			<i class="fa fa-pencil-square-o" aria-hidden="true">
				<?php echo $row->Ngay; ?>
			</i>
		</span>
	</div>
	<div class="content text-justify">
		<?php echo $row->Content; ?>
	</div>
</div>

<?php
	endforeach;
?>