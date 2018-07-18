<section class="container text-dark my-4">
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<?php if ($this->session->flashdata('error')): ?>
				<div class="alert alert-danger">
					<?php echo $this->session->flashdata('error') ?>
				</div>
			<?php endif ?>
			<div class="card">
				<div class="card-header text-center">
					<h4>Editar Trailer</h4>
				</div>
				<div class="card-body">
					<form method="POST" action="<?php echo base_url(); ?>MovieSerie/update/<?php echo $ms->id ?>">
						<div class="form-row">
						    <div class="form-group col-md-7">
								<label>Titulo</label>
								<input type="text" name="edit_title" value="<?php echo $ms->title ?>" class="form-control">
							</div>
							<div class="form-group col-md-5">
								<label>Autor</label>
								<input type="text" name="edit_author" value="<?php echo $ms->author ?>" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label>Reparto</label>
								<input type="text" name="edit_actors" value="<?php echo $ms->actors ?>" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label>Descripción</label>
								<textarea class="form-control" name="edit_description"><?php echo $ms->description; ?></textarea>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label>País</label>
								<input type="text" name="edit_country" value="<?php echo $ms->country ?>" class="form-control">
							</div>
							<div class="form-group col-md-6">
								<label>Año lanzamiento</label>
								<input type="text" name="edit_premiere" value="<?php echo $ms->premiere ?>" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label>Poster</label>
								<input type="text" name="edit_poster" value="<?php echo $ms->poster ?>" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-12">
								<label>Url Video</label>
								<input type="text" name="edit_trailer" value="<?php echo $ms->trailer ?>" class="form-control">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label>Categoria</label>
								<select class="form-control" name="edit_category" required>
									<option>Seleccione</option>
									<option value="Movie">Movie</option>
									<option value="Serie">Serie</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label>Calificación</label>
								<input type="text" name="edit_rating" value="<?php echo $ms->rating ?>" class="form-control">
							</div>
						</div>
						<div class="text-center">
							<a class="btn btn-danger" href="<?php echo base_url(); ?>movieserie">Cancelar</a>
							<button type="submit" class="btn btn-primary">Editar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>