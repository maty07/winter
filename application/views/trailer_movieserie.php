<section class="trailer container-fluid">
	<div class="row">
		<div class="text-center col-md-2 offset-md-1 my-3">
			<img style="width: 200px; height: 300px;" class="img-fluid" src="<?php echo $ms_id->poster ?>">
			<h5 class="mt-3"><?php echo $ms_id->title; ?></h5>
			<hr>
			<h6>Calificación: <span style="font-size: 25px;"><?php echo $ms_id->rating; ?></span>/ 10</h6>
			<h5>Categoria: <?php echo $ms_id->category; ?></h5>
		</div>

		<div class="col-md-8 my-3">
			<div class="info">
				<h1 class="mb-4"><?php echo $ms_id->title; ?></h1>
				<hr>
				<h6>Generos:
					<?php if ($genres): ?>
						<?php foreach ($genres as $key): ?>
							<?php echo $key->name; ?>,
						<?php endforeach ?>
					<?php endif ?>
				</h6>
				<h6>País: <?php echo $ms_id->country; ?></h6>
				<h6>Autor: <?php echo $ms_id->author; ?></h6>
				<h6>Reparto: <?php echo $ms_id->actors; ?></h6>
				<hr>
				<h5>Sinopsis</h5>
				<p><?php echo $ms_id->description; ?></p>
			</div>
				<div class="embed-responsive embed-responsive-16by9 my-3">
					<iframe class="embed-responsive-item" src="<?php echo $ms_id->trailer; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>

		</div>
	</div>
</section>
