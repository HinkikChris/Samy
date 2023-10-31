<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Tarjeta de Crédito Dinámico</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Liu+Jian+Mao+Cao&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
<div class="contenedor">
    <section class="tarjeta" id="tarjeta">
    <div class="delantera">
            <div class="logo-marca" id="logo-marca">
                 <img src="{{ asset('images/img/logos/mastercard.png') }}" alt="Visa Logo">
                 <img src="{{ asset('images/img/logos/visa.png') }}" alt="Visa Logo">
            </div>
            <img src="{{ asset('images/img/chip-tarjeta.png') }}" class="chip" alt=""></a>
            <div class="datos">
                <div class="grupo" id="numero">
                    <p class="label">Número Tarjeta</p>
                    <p class="numero">#### #### #### ####</p>
                </div>
                <div class="flexbox">
                    <div class="grupo" id="nombre">
                        <p class="label">Nombre Tarjeta</p>
                        <p class="nombre">Jhon Doe</p>
                    </div>

                    <div class="grupo" id="expiracion">
                        <p class="label">Expiracion</p>
                        <p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="trasera">
            <div class="barra-magnetica"></div>
            <div class="datos">
                <div class="grupo" id="firma">
                    <p class="label">Firma</p>
                    <div class="firma"><p></p></div>
                </div>
                <div class="grupo" id="ccv">
                    <p class="label">CCV</p>
                    <p class="ccv"></p>
                </div>
            </div>
            <p class="leyenda">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus exercitationem, voluptates illo.</p>
            <a href="#" class="link-banco">www.tubanco.com</a>
        </div>
    </section>
    <div class="contenedor-btn">
        <a class="btn-abrir-formulario" id="btn-abrir-formulario">

        </a>
    </div>

    <!-- Formulario -->
    <form onsubmit="return confirmarEnvio()" action="" id="formulario-tarjeta" class="formulario-tarjeta">
        <div class="grupo">
            <label for="inputNumero">Número Tarjeta</label>
            <input type="text" id="inputNumero" maxlength="19" autocomplete="off" required>
        </div>
        <div class="grupo">
            <label for="inputNombre">Nombre</label>
            <input type="text" id="inputNombre" maxlength="19" autocomplete="off" required>
        </div>
        <div class="flexbox">
            <div class="grupo expira">
                <label for="selectMes">Expiracion</label>
                <div class="flexbox">
                    <div class="grupo-select">
                        <select name="mes" id="selectMes">
                            <option disabled selected>Mes</option>
                        </select>
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="grupo-select">
                        <select name="year" id="selectYear">
                            <option disabled selected>Año</option>
                        </select>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
            </div>

            <div class="grupo ccv">
                <label for="inputCCV">CCV</label>
                <input type="text" id="inputCCV" maxlength="3" required>
            </div>
        </div>
        <button type="button" class="btn-cancelar" onclick="confirmarCancelar()">Cancelar</button>
        <button type="button" class="btn-enviar" onclick="confirmarEnviar()">Enviar</button>
    </form>
</div>
<section class="seccion-precio">
        <div class="precio-detalle">
            <h2>Resumen</h2>
            <div class="detalle">
                <span class="label">Precio Original:</span>
                <span class="valor">500</span>
            </div>
            <div class="detalle">
                <span class="label">Descuento:</span>
                <span class="valor">-400</span>
            </div>
            <hr>
            <div class="detalle total">
                <span class="label">Total:</span>
                <span class="valor">100</span>
            </div>
            <p class="terminos">Al completar su compra, acepta estos Términos de servicio.</p>
        </div>
    </section>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function confirmarCancelar() {
        swal({
            title: "¿Estás seguro?",
            text: "No se realizara el pago.",
            icon: "warning",
            buttons: {
                cancel: "Cancelar",
                confirm: "Sí, estoy seguro",
            },
            dangerMode: true,
        }).then((confirmado) => {
            if (confirmado) {
                window.location.href = "{{ route('index') }}";
            }
        });
    }

    function confirmarEnviar() {
        swal({
            title: "¿Estás seguro?",
            text: "No se podrá cancelar el pago.",
            icon: "info",
            buttons: {
                cancel: "Cancelar",
                confirm: "Sí, estoy seguro",
            },
            dangerMode: true,
        }).then((confirmado) => {
            if (confirmado) {
                swal({
                    title: "¡Compra Exitosa!",
                    text: "Tu curso ha sido comprado exitosamente.",
                    icon: "success",
                }).then(() => {
                    window.location.href = "{{ route('index') }}";
                });
            }
        });
    }
</script>
</body>
</html>
