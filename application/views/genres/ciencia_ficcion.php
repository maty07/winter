<section class="container genres">
	<h2 class="text-white my-3">Ciencia Ficción</h2>
	<article class="row">
			<?php foreach ($ciencia_ficcion as $key): ?>
			<div class="col-sm-3 text-center">
				<div style="height: 330px;">
					<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id ?>"><img class="img-fluid img-genre rounded" style="width: 200px; height: 300px;" src="<?php echo $key->poster ?>"></a>
				</div>
			</div>
		<?php endforeach ?>
		</div>
	</article>
</section>	