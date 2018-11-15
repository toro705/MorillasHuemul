<div class="reservas-fixed active anim-suave">
		<div class="container-fluid">
			<a  href="javascript:;" class="Opener"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			<div class="row">	
					<h3 class="h3 text-center">RESERVA<br>TU CABAÑA</h2>
			</div>
			<div class="calendar form-group text-left">
			 	<input type="text" class="form-control datepicker" id="llegada" placeholder="LLEGADA" data-date-format="dd/mm/yyyy">
			</div>
			<div class="calendar form-group text-left">
			 	<input type="text" class="form-control datepicker" id="salida" placeholder="SALIDA" data-date-format="dd/mm/yyyy">
			</div>
			<div class="select form-group text-left">
				<select name="adultos" id="adultos" placeholder="ADULTOS" class="form-control">
					<option value="">ADULTOS</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="select form-group text-left">
				<select name="niños" id="niños" placeholder="NIÑOS" class="form-control">
					<option value="">NIÑOS</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div class="form-group text-center">
				<button type="sumit" class="btn btn-sm btn-celeste"><b>RESERVAS</b></button>
			</div>
		</div>
</div>
<script src="js/datepicker/bootstrap-datepicker.min.js"></script>
<script src="js/datepicker/bootstrap-datepicker.es.min.js"></script>
<script>	
	$('.reservas-fixed .datepicker').datepicker({
	    format: "dd/mm/yyyy",
	    language: "es",
	    orientation: "bottom"
	});
	$('.reservas-fixed .Opener').click(function(){
		$('.reservas-fixed').toggleClass("active");
		if($('.reservas-fixed').hasClass('active')) {
			$('.Opener i').removeClass('fa-chevron-left').addClass('fa-chevron-right');

		} else {
			$('.Opener i').removeClass('fa-chevron-right').addClass('fa-chevron-left');

		}
	});

</script>