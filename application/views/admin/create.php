<section class="container text-dark my-4">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success">
					<?php echo $this->session->flashdata('success') ?>
				</div>
			<?php endif ?>
			<?php if ($this->session->flashdata('error')): ?>
				<div class="alert alert-danger">
					<?php echo $this->session->flashdata('error') ?>
				</div>
			<?php endif ?>
			<div class="card">
				<div class="card-header text-center">
					<h4>Nuevo Trailer</h4>
				</div>
				<div class="card-body">
					<form method="POST" action="<?php echo base_url(); ?>MovieSerie/store">
						<div class="form-row">
						    <div class="form-group col-md-7">
								<label>Titulo</label>
								<input type="text" name="title" class="form-control">
							</div>
							<div class="form-group col-md-5">
								<label>Autor</label>
								<input type="text" name="author" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label>Reparto</label>
								<input type="text" name="actors" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label>Descripción</label>
								<textarea class="form-control" name="description"></textarea>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>País</label>
								<input type="text" name="country" class="form-control">
							</div>
							<div class="form-group col-md-6">
								<label>Año lanzamiento</label>
								<input type="text" name="premiere" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-8">
								<label>Poster</label>
								<input type="text" name="poster" class="form-control">
							</div>
							<div class="form-group col-md-4">
								<label>Calificación</label>
								<input type="text" name="rating" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label>Url Video</label>
								<input type="text" name="trailer" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Géneros</label>
								<select class="form-control" name="genres[]" multiple="" required>
									<option>Seleccione hasta 4 géneros</option>
									<?php foreach ($genres as $key): ?>
										<option value="<?php echo $key->id; ?>">
											<?php echo $key->name; ?>
										</option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label>Categoria</label>
								<select class="form-control" name="category">
									<option>Seleccione</option>
									<option value="Movie">Pelicula</option>
									<option value="Serie">Serie</option>
								</select>
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn btn-primary">Agregar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>