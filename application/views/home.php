<section id="home" class="container-fluid">

	<h5 class="mt-4 mb-2">Últimas añadidas</h5>
	<article class="row">
		<div class="col-md-12">
			<?php foreach ($last_add as $key): ?>
					<div class="d-inline">
						<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id; ?>"><img class="rounded" src="<?php echo $key->poster; ?>"></a>
					</div>
			<?php endforeach ?>
		</div>
	</article>

	<h5 class="mt-4 mb-2"><a href="<?php echo base_url(); ?>genero/accion">Acción</a></h5>
	<article class="row">
		<div class="col-md-12">
			<?php foreach ($ms_accion as $key): ?>
					<div class="d-inline">
						<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id; ?>"><img class="rounded" src="<?php echo $key->poster; ?>"></a>
					</div>
			<?php endforeach ?>
		</div>
	</article>

	<h5 class="mt-4 mb-2"><a href="<?php echo base_url(); ?>genero/animacion">Animación</a></h5>
	<article class="row">
		<div class="col-md-12">
			<?php foreach ($ms_animacion as $key): ?>
					<div class="d-inline">
						<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id; ?>"><img class="rounded" src="<?php echo $key->poster; ?>"></a>
					</div>
			<?php endforeach ?>
		</div>
	</article>

	<h5 class="mt-4 mb-2"><a href="<?php echo base_url(); ?>genero/ciencia_ficcion">Ciencia Ficción</a></h5>
	<article class="row">
		<div class="col-md-12">
			<?php foreach ($ms_cienciaFiccion as $key): ?>
					<div class="d-inline">
						<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id; ?>"><img class="rounded" src="<?php echo $key->poster; ?>"></a>
					</div>
			<?php endforeach ?>
		</div>
	</article>

	<h5 class="mt-4 mb-2"><a href="<?php echo base_url(); ?>genero/comedia">Comedia</a></h5>
	<article class="row">
		<div class="col-md-12">
			<?php foreach ($ms_comedia as $key): ?>
					<div class="d-inline">
						<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id; ?>"><img class="rounded" src="<?php echo $key->poster; ?>"></a>
					</div>
			<?php endforeach ?>
		</div>
	</article>

	<h5 class="mt-4 mb-2"><a href="<?php echo base_url(); ?>genero/drama">Drama</a></h5>
	<article class="row">
		<div class="col-md-12">
			<?php foreach ($ms_drama as $key): ?>
					<div class="d-inline">
						<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id; ?>"><img class="rounded" src="<?php echo $key->poster; ?>"></a>
					</div>
			<?php endforeach ?>
		</div>
	</article>

	<h5 class="mt-4 mb-2"><a href="<?php echo base_url(); ?>genero/romance">Romance</a></h5>
	<article class="row">
		<div class="col-md-12">
			<?php foreach ($ms_romance as $key): ?>
					<div class="d-inline">
						<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id; ?>"><img class="rounded" src="<?php echo $key->poster; ?>"></a>
					</div>
			<?php endforeach ?>
		</div>
	</article>


	<h5 class="mt-4 mb-2"><a href="<?php echo base_url(); ?>genero/terror">Terror</a></h5>
	<article class="row">
		<div class="col-md-12">
			<?php foreach ($ms_terror as $key): ?>
					<div class="d-inline">
						<a href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id; ?>"><img class="rounded" src="<?php echo $key->poster; ?>"></a>
					</div>
			<?php endforeach ?>
		</div>
	</article>

</section>

