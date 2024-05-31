<div class="container-fluid p-5">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">

			<!-- MANDAR A LLAMAR A LAS TARJETAS -->
			<div class="form-group">
				<label for="exampleInputEmail1">Seleccione una Tarjeta</label>
				<select class="form-control select2" name="department-category" style="width:100%" required>
					<option value="">Seleccione...</option>
					<option value="">prueba 1</option>
					<option value="">prueba 2</option>
					<option value="">prueba 3</option>
				</select>
			</div>

			<!-- MOSTRAR LOS SALDOS DE LA TARJETA -->
			<div class="card card-widget widget-user-2 shadow-sm">
				<div class="widget-user-header bg-warning">
					<div class="widget-user-image">
						<img class="img-circle elevation-2" src="views/assets/img/template/CREDISBANK-LOGO.png"
							alt="User Avatar">
					</div>
					<h3 class="widget-user-username">Victor Andres Vasquez Hernandez</h3>
					<h5 class="widget-user-desc">Numero de Tarjeta</h5>
				</div>
				<div class="card-footer">
					<ul class="nav flex-column">
						<li class="nav-item">
							<p class="nav-link">
								<i class="fas fa-coins mr-1"></i> Saldo Disponible <span
									class="float-right">12345</span>
							</p>
						</li>
						<li class="nav-item">
							<p class="nav-link">
								<i class="fas fa-coins mr-1"></i> Saldo en Reserva <span
									class="float-right">234</span>
							</p>
						</li>
						<li class="nav-item">
							<p class="nav-link">
								<i class="fas fa-coins mr-1"></i> Saldo Total <span id="saldoTotal"
									class="float-right"></span>
							</p>
						</li>
						<li class="nav-item">
							<p class="nav-link">
								<i class="fas fa-check-circle mr-1"></i> Estado <span class="float-right">Vigente</span>
							</p>
						</li>
					</ul>
				</div>




			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>


<!-- SCRIPT PARA REALIZAR LA ESTA DE SALDO DISPONIBLE - SALDO EN RESERVA -->
<script>
	document.addEventListener("DOMContentLoaded", function () {
		// Obtenemos los elementos de saldo disponible y saldo en reserva
		var saldoDisponible = 12345;
		var saldoEnReserva = 234;

		// Calculamos el saldo total restando saldo disponible - saldo en reserva
		var saldoTotal = saldoDisponible - saldoEnReserva;

		// Actualizamos el contenido del elemento con id 'saldoTotal' con el resultado
		document.getElementById('saldoTotal').textContent = saldoTotal;
	});
</script>