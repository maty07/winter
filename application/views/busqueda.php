<section class="container-fluid" id="search">
	<div class="row my-5">
		<div class="col-sm-12">
			<?php if ($search): ?>
				<?php foreach ($search as $key): ?>
					<a href="<?php echo base_url(); ?>/home/trailer/<?php echo $key->id ?>">
						<img src="<?php echo $key->poster ?>"></a>
				<?php endforeach ?>

			<?php else: ?>
					<h3 class="msj-coincidencias">Ups! La búsqueda <?php echo $bus ?> no tiene coincidencias</h3>
			<?php endif ?>

		</div>
	</div>
</section>
