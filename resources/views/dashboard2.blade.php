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
			<section class="service-section">
				<h2>Cursos</h2>
				<div class="service-section-header">
					<div class="search-field">
						<i class="ph-magnifying-glass"></i>
						<input type="text" placeholder="Buscar Cursos">
					</div>
					<div class="dropdown-field">
						<select>
							<option></option>
							<option>Programacion</option>
							<option>Ingles</option>
							<option>Matematicas</option>
							<option>Robotica</option>
						</select>
						<i class="ph-caret-down"></i>
					</div>
					<button class="flat-button">
						Buscar
					</button>
				</div>
				<div class="mobile-only">
					<button class="flat-button">
						Toggle search
					</button>
				</div>
				<div class="tiles">
					<article class="tile">
						<div class="tile-header">
							<i class="ph-lightning-light"></i>
							<h3>
								<span>Robotica</span>
								<span>David Portilla.</span>
							</h3>
						</div>
						<a href="{{ route('robot') }}">
							<span>Ir al Curso</span>
							<span class="icon-button">
								<i class="ph-caret-right-bold"></i>
							</span>
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<i class="ph-file-light"></i>
							<h3>
								<span>Ingles</span>
								<span>Elisa Valkyeria</span>
							</h3>
						</div>
						<a href="{{ route('cursohtml') }}">
							<span>Ir al Curso</span>
							<span class="icon-button">
								<i class="ph-caret-right-bold"></i>
							</span>
						</a>
					</article>
					<article class="tile">
						<div class="tile-header">
							<i class="ph-fire-simple-light"></i>
							<h3>
								<span>Programacion</span>
								<span>Miguel Angel Duran</span>
							</h3>
						</div>
						<a href="#">
							<span>Ir al Curso</span>
							<span class="icon-button">
								<i class="ph-caret-right-bold"></i>
							</span>
						</a>
					</article>
				</div>
				<div class="service-section-footer">
					<p>Los cursos se pagan según el estado actual de la moneda y la tarifa.</p>
				</div>
			</section>
			<section class="transfer-section">
				<div class="transfer-section-header">
					<h2>Cursos Mas Vendidos</h2>
					<div class="filter-options">
						<p>Filtro seleccionado: Semanalmente</p>
						<button class="icon-button">
							<i class="ph-funnel"></i>
						</button>
						<button class="icon-button">
							<i class="ph-plus"></i>
						</button>
					</div>
				</div>
				<div class="transfers">
					<div class="transfer">
						<div class="transfer-logo">
							<dt>1</dt>
						</div>
						<dl class="transfer-details">
							<div>
								<dt>Robotica.</dt>
								<dd>David Portilla</dd>
							</div>
							<div>
								<dt>120</dt>
								<dd>Ventas</dd>
							</div>
							<div>
								<dt>22 Oct. 23 - 28 Oct. 23</dt>
								<dd>Fecha</dd>
							</div>
						</dl>
						<div class="transfer-number">
							+ $ 6850
						</div>
					</div>
					<div class="transfer">
						<div class="transfer-logo">
							<dt>2</dt>
						</div>
						<dl class="transfer-details">
							<div>
								<dt>Ingles.</dt>
								<dd>Elisa Valkyeria</dd>
							</div>
							<div>
								<dt>100</dt>
								<dd>Ventas</dd>
							</div>
							<div>
								<dt>22 Oct. 23 - 28 Oct. 23</dt>
								<dd>Fecha</dd>
							</div>
						</dl>
						<div class="transfer-number">
							+ $ 4900
						</div>
					</div>
					<div class="transfer">
						<div class="transfer-logo">
							<dt>3</dt>
						</div>
						<dl class="transfer-details">
							<div>
								<dt>Programacion.</dt>
								<dd>Miguel Angel Duran</dd>
							</div>
							<div>
								<dt>90</dt>
								<dd>Ventas</dd>
							</div>
							<div>
								<dt>22 Oct. 23 - 28 Oct. 23</dt>
								<dd>Fecha</dd>
							</div>
						</dl>
						<div class="transfer-number">
							+ $ 2850
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="app-body-sidebar">
		</div>
	</div>
</div>
<!-- partial -->
  <script src='https://unpkg.com/phosphor-icons'></script><script  src="{{ asset('js/scriptDash.js') }}"></script>

</body>
</html>
