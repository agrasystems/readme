<?php 
	include "../../rutas.php"
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
				<?php include "../../includes/lateralUser.php"; ?>
			</div>
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<?php include "../../includes/header.php"; ?>
				<div class="rebirthazul content d-flex flex-column flex-column-fluid" id="kt_content">
					<div class="rebirthazul toolbar" id="kt_toolbar">
						<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
							<!--begin::Page title-->
							<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
								<h1 class="d-flex align-items-center text-white fw-bolder fs-3 my-1">Clubes de lectura</h1>
								<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
								<small class="text-white fs-7 fw-bold my-1 ms-1">Configuracion</small>
							</div>
						</div>
					</div>
					<div class="post d-flex flex-column-fluid" id="kt_post">
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
										<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user"> Añadir Club <i style="font-size: 18px;" class="bi bi-plus-circle"></i> </button>
										</div>
										<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered mw-650px">
												<div class="modal-content">
													<div class="modal-header" id="kt_modal_add_user_header">
														<h2 class="fw-bolder text-white">Creacion de Club</h2>
														<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
															<span class="svg-icon svg-icon-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																	<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
																</svg>
															</span>
														</div>
													</div>

													<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

														<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="kt_sign_in_form" method="post">
															<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-person-lines-fill"></i>Nombre</label>
																	<input type="text" name="nombrePersona" id="nombrePersona" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Ej: Los caballeros del zodiaco" required>
																</div>
																<div class="fv-row mb-7">
																		<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-phone"></i>Genero</label>
																	<input type="tel" name="celPersona" id="celPersona" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Ej: Fantasia" required>
																</div>
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-list-task"></i>Descripcion</label>
																	<input type="username" name="username" id="username" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" required>
																</div>
															</div>
															<div class="text-center pt-15">
																<input type="submit" class="btn btn-primary" value="Agregar">
															</div>
														</form>
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
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Codigo del Club</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Nombre</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Descripcion</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Genero</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Rating</th> </div>
												<th class="min-w-125px"> <div class='badge badge-lg badge-dark'>  Fecha de Inicio</th> </div>
											</tr>
										</thead>
										<tbody class="fw-bold text-white fw-bolder">
											<?php
											foreach($mbd->query("SELECT * FROM users_accounts") as $Listado) {
												echo "<tr>";
												echo "	<td>";
												echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['nombre'] . "</div>";
												echo "	</td>";
												echo "	<td>";
												echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['apellido'] . "</div>";
												echo "	</td>";
												echo "	<td>";
												echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['celular'] . "</div>";
												echo "	</td>";
												echo "	<td>";
												echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['email'] . "</div>";
												echo "	</td>";
												echo "	<td>";
												echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['creditos'] . "</div>";
												echo "	</td>";
												echo "	<td>";
												echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['created_at'] . "</div>";
												echo "</tr>";
											}
											?>
											</tbody>
										</table>
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
		<script src="../../assets/js/custom/pages/ocultarCodigo.js"></script>
</body>

</html>