<section class="container genres">
	<h2 class="text-white my-3">Drama</h2>
	<article class="row">
			<?php foreach ($drama as $key): ?>
			<div class="col-sm-3 text-center">
				<div style="height: 330px;">
					<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id ?>"><img class="img-fluid img-genre rounded" style="width: 200px; height: 300px;" src="<?php echo $key->poster ?>"></a>
				</div>
			</div>
		<?php endforeach ?>
		</div>
	</article>
</section>	