<form id="fRegister" class="form" name="form" action="registro_empleado.php" method="POST">

	<p>
		<label for="rut">Código</label>
		<input id="rut" class="form-control" name="rut" type="text"  />
		<span id="resultado"> </span>
	</p>
	<p>
		<!--<input id="generar" class="btn btn-info" type="button" href="javascript:;" onclick="realizaProceso($('#rut').val());return false;" value="Generar"/>-->
	</p>
	<p>
		<input type="reset" class="btn btn-danger" value="Limpiar" />
		<button id="doRegister" type="submit" class="btn" onclick = "this.form.action = 'procesar_entrada.php'" value="accion 1">Entrada</button>
	</p>
	<div class="alert alert-success" role="alert"></div>
</form>
