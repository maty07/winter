<section class="container-fluid">
	<div class="row my-5">
			<?php if ($search): ?>
				<?php foreach ($search as $key): ?>
					<div class="col-sm-4">
						<a href="<?php echo base_url(); ?>/home/trailer/<?php echo $key->id ?>"><img class="img-fluid" src="<?php echo $key->poster ?>"></a>
					</div>

				<?php endforeach ?>
			<?php else: ?>
				<div class="col-md-12">
					<h3 class="msj-coincidencias">Ups! La búsqueda <?php echo $bus ?> no tiene coincidencias</h3>
				</div>
			<?php endif ?>

		</div>
	</div>
</section>
