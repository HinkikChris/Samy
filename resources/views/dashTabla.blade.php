<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Cursos Barstow</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
            <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">1</td>
                    <td>Aldo</td>
                    <td>Peraz</td>
                </tr>
                <tr class="">
                    <td scope="row">2</td>
                    <td>Mario</td>
                    <td>Muñoz</td>
                </tr>
                <tr class="">
                    <td scope="row">3</td>
                    <td>Christian Garcia</td>
                    <td>Peraz</td>
                </tr>
                <tr class="">
                    <td scope="row">4</td>
                    <td>Fabrice</td>
                    <td>Gonzalez</td>
                </tr>
            </tbody>
        </table>
    </div>
		<div class="app-body-sidebar">
		</div>
	</div>
</div>
<!-- partial -->
  <script src='https://unpkg.com/phosphor-icons'></script><script  src="{{ asset('js/scriptDash.js') }}"></script>

</body>
</html>
