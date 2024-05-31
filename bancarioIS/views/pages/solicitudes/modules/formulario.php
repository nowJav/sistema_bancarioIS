<div class="container-fluid">
	<div class="row p-5">
		<div class="col-2"></div>
		<!-- left column -->
		<div class="col-8">
			<!-- general form elements -->
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Llenar los Campos</h3>
				</div>
				<!-- /.card-header -->
				<!-- form start -->
				<form>
					<div class="card-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Tipo de Solicitud</label>
							<select class="form-control select2" name="department-category" style="width:100%" required>
								<option value="">Seleccione...</option>
								<option value="">prueba 1</option>
								<option value="">prueba 2</option>
								<option value="">prueba 3</option>
							</select>
						</div>
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" id="nombre" placeholder="Nombre">
						</div>

						<div class="form-group">
							<label for="correoElectronico">Correo Electronico</label>
							<input type="email" class="form-control" id="correoElectronico" placeholder="email">
						</div>

						<div class="form-group">
							<label for="telefono">Telefono</label>
							<input type="text" class="form-control" id="telefono" placeholder="Telefono">
						</div>

						<div class="form-group">
							<label>Descripcion</label>
							<textarea class="form-control" rows="3" placeholder="Descripcion"></textarea>
						</div>
					</div>
					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" class="btn btn-primary">Enviar Solicitud</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-2"></div>
	</div>
</div>