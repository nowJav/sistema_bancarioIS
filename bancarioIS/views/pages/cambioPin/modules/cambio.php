<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar PIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .is-invalid .form-control {
            border-color: #dc3545; /* Red color */
        }
        .is-invalid .input-group-append button {
            border-color: #dc3545; /* Red color */
        }
        .is-invalid .invalid-feedback {
            display: block;
        }
    </style>
</head>
<body>

<div class="row p-5">
    <div class="col-2"></div>
    <div class="col-8">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">CAMBIAR PIN</h3>
            </div>
            <form id="pinForm" novalidate>
                <div class="card-body">

                    <!-- ---------- SELECT PARA TARJETA ---------- -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Seleccione una Tarjeta</label>
                        <select
                            class="form-control select2"
                            name="department-category"
                            style="width:100%"
                            required>
                            <option value="">Seleccione...</option>
                            <option value="">prueba 1</option>
                            <option value="">prueba 2</option>
                            <option value="">prueba 3</option>
                        </select>
                    </div>

                    <!-- ---------- INPUTS PARA DIGITALIZAR LOS PIN ---------- -->
                    <div class="form-group">
                        <label for="pin">Ingrese Pin</label>
                        <div class="input-group">
                            <input 
                                type="password" 
                                class="form-control" 
                                id="pin" 
                                placeholder="pin"
                                pattern="\d{4}"
                                maxlength="4"
                                required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="togglePinVisibility">Mostrar</button>
                            </div>
                            <div class="invalid-feedback">Please enter a 4-digit PIN.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="confirmPin">Confirme Pin</label>
                        <div class="input-group">
                            <input 
                                type="password" 
                                class="form-control" 
                                id="confirmPin" 
                                placeholder="confirme pin"
                                pattern="\d{4}"
                                maxlength="4"
                                required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="togglePinVisibility">Mostrar</button>
                            </div>
                            <div class="invalid-feedback">Pins do not match or are not a 4-digit number.</div>
                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cambiar Pin</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-2"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const pinInput = document.getElementById('pin');
    const confirmPinInput = document.getElementById('confirmPin');
    const togglePinVisibilityBtn = document.querySelectorAll('#togglePinVisibility');
    const pinForm = document.getElementById('pinForm');

    togglePinVisibilityBtn.forEach(btn => {
        btn.addEventListener('click', function () {
            if (pinInput.type === 'password' && confirmPinInput.type === 'password') {
                pinInput.type = 'text';
                confirmPinInput.type = 'text';
                btn.textContent = 'Ocultar';
            } else {
                pinInput.type = 'password';
                confirmPinInput.type = 'password';
                btn.textContent = 'Mostrar';
            }
        });
    });

    pinForm.addEventListener('submit', function (event) {
        event.preventDefault();
        event.stopPropagation();

        if (pinInput.value === confirmPinInput.value && pinInput.value.length === 4 && confirmPinInput.value.length === 4) {
            pinInput.classList.add('is-valid');
            confirmPinInput.classList.add('is-valid');
            pinInput.classList.remove('is-invalid');
            confirmPinInput.classList.remove('is-invalid');
        } else {
            pinInput.classList.add('is-invalid');
            confirmPinInput.classList.add('is-invalid');
            pinInput.classList.remove('is-valid');
            confirmPinInput.classList.remove('is-valid');
        }

        pinForm.classList.add('was-validated');
    }, false);
});
</script>

</body>
</html>