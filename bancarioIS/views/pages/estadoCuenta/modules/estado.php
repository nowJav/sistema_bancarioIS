<div class="invoice p-3 mb-3">
  <!-- title row -->
  <div class="row">
    <div class="col-12">
      <h4>
        <i class="fas fa-university"></i> CredisBank
        <small class="float-right" id="date">Date: </small>
      </h4>
    </div>
    <!-- /.col -->
  </div>
  <!-- info row -->
  <div class="row invoice-info">
    <div class="col-sm-4 invoice-col">
      Desde
      <address>
        <strong>CredisBank</strong><br>
        Avenida Reforma 123, Zona 10<br>
        Ciudad de Guatemala, Guatemala 01010<br>
        Teléfono: (502) 5555-5555<br>
        Correo electrónico: info@credisbank.com
      </address>
    </div>

    <!-- AQUI COLOCAREMOS LA INFORMACION DEL USUARIO -->
    <div class="col-sm-4 invoice-col">
      Para
      <address>
        <strong>Nombre</strong><br>
        Direccion<br>
        numero de cuenta<br>
        Telefono<br>
        Correo
      </address>
    </div>
    <!-- /.col -->
    <div class="col-sm-4 invoice-col">
      <b id="solicitud">Solicitud #</b>
      <br>
      <b>Estado de Cuenta</b><br>
      <b>Cuenta:</b> 968-34567
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

  <!-- Table row -->
  <div class="row">
    <div class="col-12 table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Qty</th>
            <th>Product</th>
            <th>Serial #</th>
            <th>Description</th>
            <th>Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <!-- LISTAR AQUI TODOS LOS MOVIMIENTOS -->
        </tbody>
      </table>
    </div>
  </div>
</div>



<!-- ---------- ESCRIPT PARA EXTRAER LA FECHA ACTUAL ---------- -->
<script>
  // Obtener la fecha actual
  const today = new Date();
  const day = String(today.getDate()).padStart(2, '0');
  const month = String(today.getMonth() + 1).padStart(2, '0'); // Los meses van de 0 a 11
  const year = today.getFullYear();

  // Formatear la fecha como 'd/m/yyyy'
  const formattedDate = `${day}/${month}/${year}`;

  // Insertar la fecha en el elemento con id 'date'
  document.getElementById('date').textContent += formattedDate;
</script>



<!-- ---------- ESCRIPT PARA GENERAR UN # DE SOLICITUD ---------- -->
<script>
  // Generar un número aleatorio entre 100000 y 999999
  const solicitudNumber = Math.floor(Math.random() * 900000) + 100000;

  // Insertar el número de solicitud en el elemento con id 'solicitud'
  document.getElementById('solicitud').textContent += solicitudNumber;
</script>


