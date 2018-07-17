<div class="container">
	<div class="col-md-6 offset-md-3">
		<div class="card" style="margin: 70px 0; color: black;">
			<?php if ($this->session->flashdata('error')): ?>
			<div class="alert alert-danger">
				<?php echo $this->session->flashdata('error') ?>
			</div>
		<?php endif ?>
			<div class="card-header">
				Iniciar Sesión
			</div>
			<div class="card-body">
				<form action="<?php echo base_url(); ?>Home/validateUser" method="POST">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" required placeholder="example@gmail.com">
					</div>
					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" name="pass" class="form-control" required placeholder="**********">
					</div>
					<div class="text-center">
						<input type="submit" value="Ingresar" class="btn btn-outline-primary">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

