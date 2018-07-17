<section class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success mt-3">
					<?php echo $this->session->flashdata('success') ?>
				</div>
			<?php endif ?>
			<div class="card text-dark">
				<div class="card-header text-center">
					<h3>Lista de Peliculas y Series</h3>
					<div class="text-right">
						<a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>movieserie/create">Nuevo Trailer</a>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped table-hover table-responsive">
						<thead>
							<tr>
								<th width="10">#</th>
								<th>Titulo</th>
								<th>Autor</th>
								<th>Categoria</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($movieseries as $key): ?>
								<tr>
									<td width="10"><?php echo $key->id ?></td>
									<td><?php echo $key->title ?></td>
									<td><?php echo $key->author ?></td>
									<td><?php echo $key->category ?></td>
									<td>
										<a class="btn btn-info btn-sm"  href="<?php echo base_url(); ?>home/trailer/<?php echo $key->id ?>">Ver</a>
									</td>
									<td>
										<a class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>movieserie/edit/<?php echo $key->id; ?>">Editar</a>
									</td>
									<td>
										<a class="btn btn-danger btn-sm" href="<?php base_url(); ?>delete/<?php echo $key->id; ?>">Eliminar</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>