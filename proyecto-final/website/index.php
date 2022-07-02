<?php
include_once "rutas.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<base href="">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<div class="rebirthazul d-flex flex-column flex-root">
		<div class="page d-flex flex-row flex-column-fluid">
			<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<?php
				include "includes/lateral.php";
				?>
			</div>

			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<?php
				include "includes/header.php";
				?>
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

					<div class="toolbar" id="kt_toolbar">
						<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
							<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
								<h1 class="d-flex text-white align-items-center fw-bolder fs-3 my-1">Inicio</h1>
								<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
								<small class="text-white fs-md-6 fw-bold my-1 ms-1">Menu Principal</small>
							</div>
						</div>
					</div>



					<div class="post d-flex flex-column-fluid" id="kt_post">
						<div id="kt_content_container" class="container-lg">

							<div class="notice d-flex bg-dark rounded border-secondary border border-dashed mt-6 p-6">
								<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="#7239ea" />
										<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="#7239ea" />
										<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="#7239ea" />
									</svg>
								</span>
								<div class="d-flex flex-stack flex-grow-1">
									<div class="fw-bold">
										<h4 class="text-white fw-bolder">bienvenido al panel de administración desarrollado por <span class="text-hover-danger">agras systems</span>!</h4>
										<div class="fs-6 text-gray-400">recuerda que el panel se encuentra en fase BETA, ante cualquier error enviarlo a
											<a class="fw-bolder" href="#">admin@agrassystems.com</a>.
										</div>
									</div>
								</div>
							</div>

							<div class="separator separator-content border-light-info my-15">
								<i class="fas fa-chart-pie text-white fs-2qx"></i>
							</div>

							<div class="row g-5 g-xl-8">
								<div class="col-xl-6">
									<a href="#" class="card bg-ventas hoverable ">
										<div class="card-body">
											<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
												<h1 class="text-white fw-bolder fs-3 me-sm-11"> <i style="color: white; font-size: 23px;" class="me-sm-2 bi bi-patch-check-fill"></i> Ventas</h1>
											</span>
											<div class="text-white fw-bolder fs-3 mb-1 mt-8"> <i style="color: white; font-size: 23px;" class="me-sm-2 bi bi-bar-chart-fill"></i> Más vendido: Las aventuras 9</div>
											<div class="text-white fw-bolder fs-3 mb-4 mt-3"> <i style="color: white; font-size: 23px;" class="me-sm-2 bi bi-eye-fill"></i> Más visto: Interestelar </div>
											<div class="fw-bold text-white">Estadisticas de los libros</div>
										</div>
									</a>
								</div>

								<div class="col-xl-6">
									<a href="#" class="card bg-dedicado hoverable mb-5 mb-xl-8">
										<div class="card-body">
											<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
												<h1 class="text-white fw-bolder fs-3 me-sm-11"> <i style="color: white; font-size: 23px;" class="me-sm-2 fas fa-server"></i> Estado del dedicado</h1>
											</span>
											<!-- <div class="text-white fw-bolder fs-3 mb-1 mt-8"> <i style="color: white; font-size: 23px;" class="me-sm-2 bi bi-cpu"></i> CPU: </div> -->
											<div class="text-white fw-bolder fs-3 mb-1 mt-8"> <i style="color: white; font-size: 23px;" class="me-sm-2 bi bi-hdd-stack-fill"></i> Disco (%) utilizado: </div>
											<!-- <div class="text-white fw-bolder fs-3 mb-1 mt-3"> <i style="color: white; font-size: 23px;" class="me-sm-2 bi bi-router-fill"></i> Internet (entrante): </div> -->
											<div class="text-white fw-bolder fs-3 mb-4 mt-3"> <i style="color: white; font-size: 23px;" class="me-sm-2 fas fa-memory"></i> Memoria RAM:
												<?php
												$df_c = disk_free_space("C:");
												echo "Disponible ", $df_c;
												?>
											</div>
											<div class="fw-bold text-white">Estado del servidor</div>
										</div>
									</a>
								</div>

								<div class="col-xl-6">
									<a href="#" class="card bg-info hoverable  mb-5 mb-xl-8">
										<div class="card-body">
											<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
												<h1 class="text-white fw-bolder fs-3 me-sm-11"> <i style="color: white; font-size: 23px;" class="me-sm-2 fas fa-users"></i> Listado de usuarios</h1>
											</span>
											<?php
											echo "<div class='text-white fw-bolder fs-4 mb-6 mt-7'> <i style='color: white; font-size: 23px;' class='me-sm-2 bi bi-person-circle'></i> Usuarios totales: " . User::GetUsersCount() . "</div>";
											?>
											<div class="fw-bold text-white">Usuarios registrados</div>
										</div>
									</a>
								</div>

								<div class="col-xl-6">
									<a href="#" class="card bg-librosbiblio hoverable  mb-xl-8">
										<div class="card-body">
											<span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
												<h1 class="text-white fw-bolder fs-3 me-sm-11"> <i style="color: white; font-size: 23px;" class="me-sm-2 fas fa-book"></i> Libros de la biblioteca</h1>
											</span>
											<?php
											echo "<div class='text-white fw-bolder fs-4 mb-6 mt-7'> <i style='color: white; font-size: 23px;' class='me-sm-2 bi bi-search'></i> Libros encontrados: " . Book::GetBooks() . "</div>";
											?>
											<div class="fw-bold text-gray-100 ">Libros totales</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer text-gray-400 text-hover-primary me-5 mb-2" style="background-color: #1a2333">
			<h3 class="mt-6 text-white text-center"> Agras Systems 2022 <i class="fs-2 ms-1 las la-code"></i> </h3>
		</div>
	</div>
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="assets/js/custom/widgets.js"></script>
	<script src="assets/js/custom/apps/chat/chat.js"></script>
	<script src="assets/js/custom/modals/create-app.js"></script>
	<script src="assets/js/custom/modals/upgrade-plan.js"></script>
</body>

</html>