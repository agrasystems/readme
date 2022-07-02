<?php
require_once("../../includes/clases.php");
include "../../rutas.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<base href="">
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href="../../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>


<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
	<div class="d-flex flex-column flex-root">
		<div class="page d-flex flex-row flex-column-fluid">
			<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
				<?php getLateral(); ?>
			</div>
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<?php getHeader(); ?>
				<div class="content d-flex rebirthazul flex-column flex-column-fluid" id="kt_content">
					<div class="rebirthazul toolbar" id="kt_toolbar">
						<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
							<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
							<h1 class="d-flex text-white fw-bolder align-items-center fw-bolder fs-3 my-1">Listado de Libros</h1>
									<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
									<small class="text-white fw-bolder fs-md-6 fw-bold my-1 ms-1">Principal</small>
							</div>
						</div>
					</div>
					<div class="rebirthazul post d-flex flex-column-fluid" id="kt_post">
						<div id="kt_content_container" class="container-xxl">
							<div class="rebirthazul2 card card-flush">
								<div class="card-header mt-6">
									<div class="card-title">
										<div class="d-flex align-items-center position-relative my-1 me-5">
											<span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
												</svg>
											</span>
											<input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Buscar" />

										</div>
									</div>
									<div class="card-toolbar">
										<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered mw-650px">
												<div class="modal-content">
													<div class="modal-header" id="kt_modal_add_user_header">
														<h2 class="fw-bolder text-white">Creacion de Cuenta</h2>
														<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														    </svg>
														</span>
												    </div>
												</div>
										    </div>
										</div>
								    </div>
								</div>
								<div class="card-body pt-0">
									<table class="table align-middle table-row-dashed fs-7 gy-5 mb-0" id="kt_permissions_table">
										<thead>
											<tr class="text-start text-white fs-7 text-uppercase gs-0">
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Codigo libro</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Nombre</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Descripcion</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Genero</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Rating</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Costo</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Fecha publicado</th> </div>
											</tr>
										</thead>
									
										<tbody class="fw-bold text-white fw-bolder">
											<?php informacionLibros(); ?>
										</tbody>
									</table>

									<div class="d-flex flex-wrap align-items-center my-1">
										<span class="text-gray-400 fs-6">
											<?php echo "Se encontraron " . Book::GetBooks() .  " libros"		  ?>
											</span>
										</h3>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

		<script>var hostUrl = "../../assets/";</script>
		<script src="../../assets/plugins/global/plugins.bundle.js"></script>
		<script src="../../assets/js/scripts.bundle.js"></script>
		<script src="../../assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="../../assets/js/custom/apps/user-management/permissions/list.js"></script>
		<script src="../../assets/js/custom/apps/user-management/permissions/add-permission.js"></script>
		<script src="../../assets/js/custom/apps/user-management/permissions/update-permission.js"></script>
		<script src="../../assets/js/custom/widgets.js"></script>
		<script src="../../assets/js/custom/apps/chat/chat.js"></script>
		<script src="../../assets/js/custom/modals/create-app.js"></script>
		<script src="../../assets/js/custom/modals/upgrade-plan.js"></script>
</body>

</html>