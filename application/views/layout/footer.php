<footer>
	<span class="title-footer">Winter </span>
  <p>Trailer Movie and Series</p>
	<p>Matias Bravo - Todos los derechos Reservados</p>
</footer>	


	<script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
	<script src="<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
  <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>

<?php if ($this->session->userdata('sess_user')): ?>
  <script>
    $(document).ready(function(){
      $('.logueado').hide();
      $('.oculto').show();
    });
  </script>
<?php endif ?>