<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Cursos Barstow</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="{{ asset('css/styleDash.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="app">
	<header class="app-header">
		<div class="app-header-logo">
			<div class="logo">
				<span class="logo-icon">
					<img src="{{ asset('images/logo1.png') }}" />
				</span>
				<h1 class="logo-title">
					<span>Universidad</span>
					<span>Barstow</span>
				</h1>
			</div>
		</div>
		<div class="app-header-navigation">
			<div class="tabs">
				<a href="#" class="active">
					Estadisticas cursos
				</a>
			</div>
		</div>
		<div class="app-header-actions">
			<button class="user-profile">
				<span>Mario</span>
				<span>
					<img src="https://assets.codepen.io/285131/almeria-avatar.jpeg" />
				</span>
			</button>
			<div class="app-header-actions-buttons">
				<button class="icon-button large">
					<i class="ph-magnifying-glass"></i>
				</button>
				<button class="icon-button large">
					<i class="ph-bell"></i>
				</button>
			</div>
		</div>
		<div class="app-header-mobile">
			<button class="icon-button large">
				<i class="ph-list"></i>
			</button>
		</div>

	</header>
	<div class="app-body">
		<div class="app-body-navigation">
			<nav class="navigation">
				<a href="{{ route('dash') }}">
					<i class="ph-browsers"></i>
					<span>Dashboard</span>
				</a>
				<a href="{{ route('Tabla') }}">
                    <i class="ph-check-square"></i>
                    <span>Tablas</span>
                </a>
				<a href="{{ route('Form') }}">
					<i class="ph-file-text"></i>
					<span>Nuevo Curso</span>
				</a>
			</nav>
			<footer class="footer">
				<h1>Barstow<small>©</small></h1>
				<div>
					Barstow ©<br />
					2023
				</div>
			</footer>
		</div>
		<div class="app-body-main-content">
        <div class="formbold-main-wrapper">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
        <form action="" method="GET">
            <div class="formbold-steps">
                <ul>
                    <li class="formbold-step-menu1 active">
                        <span>1</span>
                        Datos Generales
                    </li>
                    <li class="formbold-step-menu2">
                        <span>2</span>
                        Descripcion
                    </li>
                    <li class="formbold-step-menu3">
                        <span>3</span>
                        Confirmacion
                    </li>
                </ul>
            </div>

            <div class="formbold-form-step-1 active">
                <div class="formbold-input-flex">
                    <div>
                        <label for="nombreCurso" class="formbold-form-label"> Nombre del curso </label>
                        <input type="text" name="nombreCurso" placeholder="" id="nombreCurso"
                            class="formbold-form-input" />
                    </div>
                    <div class="form-group">
                        <label for="img" class="form-label">Imagen del curso</label>
                        <input type="file" name="img" id="img" class="form-input">
                        <small class="form-text text-muted">Selecciona una imagen para el curso.</small>
                    </div>
                    <div>
                        <label for="duracion" class="formbold-form-label"> Duracion (Horas totales)</label>
                        <input type="number" name="duracion" id="duracion" class="formbold-form-input" />
                    </div>
                </div>

                <div class="formbold-input-flex">

                    <div>
                        <label for="numModulos" class="formbold-form-label"> Numero de Modulos </label>
                        <input type="number" name="numModulos" placeholder="" id="numModulos"
                            class="formbold-form-input" min="0" max="50"/>
                        <div id="contenedor"></div>
                    </div>
                    <div>
                        <label for="precio" class="formbold-form-label"> Precio (MXN)</label>
                        <input type="number" name="precio" id="precio" class="formbold-form-input" min="0" />
                    </div>

                </div>
            </div>

            <div class="formbold-form-step-2">
                <div>
                    <label for="sobreCurso" class="formbold-form-label"> Algo Sobre el Curso </label>
                    <textarea rows="6" name="sobreCurso" id="sobreCurso" placeholder="EJEMPLO: En este fascinante curso desde cero, exploraremos juntos el emocionante mundo de la..."
                        class="formbold-form-input"></textarea>
                </div>
                <div>
                    <label for="requerimientos" class="formbold-form-label"> Requerimientos </label>
                    <textarea rows="6" name="requerimientos" id="requerimientos" placeholder="EJEMPLO: ProtoBoard, Arduino UNO, etc..."
                        class="formbold-form-input"></textarea>
                </div>
                <div>
                    <label for="requerimientos" class="formbold-form-label"> Conocimientos que se adqueriran </label>
                    <textarea rows="6" name="requerimientos" id="requerimientos" placeholder="EJEMPLO: ProtoBoard, Arduino UNO, etc..."
                        class="formbold-form-input"></textarea>
                </div>
            </div>

            <div class="formbold-form-step-3">
                <div class="formbold-form-confirm">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
                    </p>

                    <div>
                        <button class="formbold-confirm-btn active">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="10.5" fill="white" stroke="#DDE3EC" />
                                <g clip-path="url(#clip0_1667_1314)">
                                    <path
                                        d="M9.83343 12.8509L15.1954 7.48828L16.0208 8.31311L9.83343 14.5005L6.12109 10.7882L6.94593 9.96336L9.83343 12.8509Z"
                                        fill="#536387" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1667_1314">
                                        <rect width="14" height="14" fill="white" transform="translate(4 4)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            Yes! I want it.
                        </button>

                        <button class="formbold-confirm-btn">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11" cy="11" r="10.5" fill="white" stroke="#DDE3EC" />
                                <g clip-path="url(#clip0_1667_1314)">
                                    <path
                                        d="M9.83343 12.8509L15.1954 7.48828L16.0208 8.31311L9.83343 14.5005L6.12109 10.7882L6.94593 9.96336L9.83343 12.8509Z"
                                        fill="#536387" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1667_1314">
                                        <rect width="14" height="14" fill="white" transform="translate(4 4)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            No! I don’t want it.
                        </button>
                    </div>
                </div>
            </div>

            <div class="formbold-form-btn-wrapper">
                <button class="formbold-back-btn">
                    Regresar
                </button>

                <button class="formbold-btn">
                    Siguiente Paso
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1675_1807)">
                            <path
                                d="M10.7814 7.33312L7.20541 3.75712L8.14808 2.81445L13.3334 7.99979L8.14808 13.1851L7.20541 12.2425L10.7814 8.66645H2.66675V7.33312H10.7814Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1675_1807">
                                <rect width="16" height="16" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</div>
		</div>
		<div class="app-body-sidebar">
		</div>
	</div>
</div>
<!-- partial -->
  <script src='https://unpkg.com/phosphor-icons'></script><script  src="{{ asset('js/scriptDash.js') }}"></script>
  <script>
    const stepMenuOne = document.querySelector('.formbold-step-menu1')
    const stepMenuTwo = document.querySelector('.formbold-step-menu2')
    const stepMenuThree = document.querySelector('.formbold-step-menu3')

    const stepOne = document.querySelector('.formbold-form-step-1')
    const stepTwo = document.querySelector('.formbold-form-step-2')
    const stepThree = document.querySelector('.formbold-form-step-3')

    const formSubmitBtn = document.querySelector('.formbold-btn')
    const formBackBtn = document.querySelector('.formbold-back-btn')

    formSubmitBtn.addEventListener("click", function (event) {
        event.preventDefault()
        if (stepMenuOne.className == 'formbold-step-menu1 active') {
            event.preventDefault()

            stepMenuOne.classList.remove('active')
            stepMenuTwo.classList.add('active')

            stepOne.classList.remove('active')
            stepTwo.classList.add('active')

            formBackBtn.classList.add('active')
            formBackBtn.addEventListener("click", function (event) {
                event.preventDefault()

                stepMenuOne.classList.add('active')
                stepMenuTwo.classList.remove('active')

                stepOne.classList.add('active')
                stepTwo.classList.remove('active')

                formBackBtn.classList.remove('active')

            })

        } else if (stepMenuTwo.className == 'formbold-step-menu2 active') {
            event.preventDefault()

            stepMenuTwo.classList.remove('active')
            stepMenuThree.classList.add('active')

            stepTwo.classList.remove('active')
            stepThree.classList.add('active')

            formBackBtn.classList.remove('active')
            formSubmitBtn.textContent = 'Submit'
        } else if (stepMenuThree.className == 'formbold-step-menu3 active') {
            window.location.href = "{{ route('index') }}";
        }
    })

    document.getElementById('numModulos').addEventListener('change', function () {
        // Obten el valor actual del input
        var valor = this.value;

        // Obtén el contenedor donde agregarás los inputs
        var contenedor = document.getElementById('contenedor');

        // Elimina los inputs existentes en el contenedor
        contenedor.innerHTML = '';

        // Crea y agrega los nuevos inputs
        for (var i = 1; i <= valor; i++) {
            var nuevoFile=document.createElement('input');
            nuevoFile.type="file"
            nuevoFile.name = 'video' + i;
            nuevoFile.className = 'formbold-form-input';

            var nuevoInput = document.createElement('input');
            nuevoInput.type = 'number';
            nuevoInput.name = 'modulo' + i;
            nuevoInput.placeholder = 'Nombre del modulo '+ i;
            nuevoInput.className = 'formbold-form-input';

            contenedor.appendChild(nuevoInput);
            contenedor.appendChild(nuevoFile);
        }
    });


</script>
</body>
</html>
