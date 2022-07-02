<?php

require("../../classes/Database.php");

if ($_POST) {
	$nomPersona = $_POST['nombrePersona'];
	$apePersona = $_POST['apellidoPersona'];
	$celPersona = $_POST['celPersona'];
	$mailPersona = $_POST['mailPersona'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$profilePicPersona = $_POST['profielPicPersona'];
	$creditos = $_POST['creditos'];
	$createdAcc = $_POST['fechaCreacion'];
	$rangoPersona = $_POST['rango'];

	$mbd = new Database();
	$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = $mbd->prepare("INSERT INTO users_accounts (nombre, apellido, celular, created_at, username, password, creditos, email, profilePic, grade) VALUES (:nP,:aP,:cP,:caP,:u,:p,:coinsP,:mailP,:profileP,:rP)");

	$query->bindParam(":nP", $nomPersona);
	$query->bindParam(":aP", $apePersona);
	$query->bindParam(":cP", $celPersona);
	$query->bindParam(":caP", $createdAcc);
	$query->bindParam(":u", $username);
	$query->bindParam(":p", $password);
	$query->bindParam(":coinsP", $creditos);
	$query->bindParam(":mailP", $mailPersona);
	$query->bindParam(":rP", $rangoPersona);
	$query->bindParam(":profileP", $profilePicPersona);

	if ($query->execute()) {
		header("location: manage-accounts.php");
		exit;
	}
}



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
				<?php include "../../includes/lateral.php"; ?>
			</div>
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<?php include "../../includes/header.php"; ?>
				<div class="rebirthazul content d-flex flex-column flex-column-fluid" id="kt_content">
					<div class="rebirthazul toolbar" id="kt_toolbar">
						<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
							<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
								<h1 class="d-flex align-items-center text-white fw-bolder fs-3 my-1">Administrar Cuentas</h1>
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
											<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor" />
														<path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor" />
														<path d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="#C4C4C4" />
													</svg>
												</span>
												Exportar lista
											</button>
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user"> Añadir Cuenta <i style="font-size: 18px;" class="bi bi-plus-circle"></i> </button>
										</div>


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

													<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

														<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="kt_sign_in_form" method="post">
															<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-person-lines-fill"></i> Nombre</label>
																	<input type="text" name="nombrePersona" id="nombrePersona" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Agustin" required>
																</div>
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-person-lines-fill"></i> Apellido</label>
																	<input type="text" name="apellidoPersona" id="apellidoPersona" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Fagundez" required>
																</div>
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-phone"></i> Celular</label>
																	<input type="tel" name="celPersona" id="celPersona" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="093593066" required>
																</div>
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-envelope"></i> Correo electronico</label>
																	<input type="email" name="mailPersona" id="mailPersona" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="agus@agusuruguayo.tech" required>
																</div>
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-person-video"></i> Usuario</label>
																	<input type="username" name="username" id="username" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="afagundez" required>
																</div>
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-key"></i> Contraseña</label>
																	<input type="password" name="password" id="password" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="xxxxxxx" required>
																</div>
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-image"></i> Foto de perfil</label>
																	<input type="url" name="profielPicPersona" id="profielPicPersona" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="https://url.png" required>
																</div>
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-coin"></i> Creditos</label>
																	<input type="number" name="creditos" id="creditos" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Cantidad (si es necesario)" required>
																</div>
																<div class="fv-row mb-7">
																	<label class="text-white required fw-bold fs-6 mb-2"> <i style="font-size: 18px;" class="bi bi-calendar3"></i> Fecha de creacion</label>
																	<input type="date" name="fechaCreacion" id="fechaCreacion" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="XXXX-XX-XX" value="<?php echo date("Y-m-d"); ?>" required>
																</div>

																<div class="mb-7">
																	<label class="text-white required fw-bold fs-6 mb-5"> <i style="font-size: 18px;" class="bi bi-list-task"></i> Rango</label>
																	<div class="form-group">
																		<select class="custom-select form-control form-control-solid mb-3 mb-lg-0" id="rango" name="rango" required>
																			<option value="Administrador">Administrador</option>
																			<option value="Usuario">Usuario</option>
																			<option value="Invitado">Visitante</option>
																		</select>
																	</div>
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
											<tr class="text-start text-white fs-7 text-uppercase gs-0">.
												<th class="min-w-125px">
													<div class='badge badge-lg badge-dark'> ID Cuenta
												</th>
												<th class="min-w-125px">
													<div class='badge badge-lg badge-dark'> Nombre
												</th>
												<th class="min-w-125px">
													<div class='badge badge-lg badge-dark'> Apellido
												</th>
												<th class="min-w-125px">
													<div class='badge badge-lg badge-dark'> Celular
												</th>
												<th class="min-w-125px">
													<div class='badge badge-lg badge-dark'> Email
												</th>
												<th class="min-w-125px">
													<div class='badge badge-lg badge-dark'> Creditos
												</th>
												<th class="min-w-125px">
													<div class='badge badge-lg badge-dark'> Fecha de creacion
												</th>
												<th class="min-w-125px">
													<div class='badge badge-lg badge-dark'> Estado cuenta
												</th>
												<th class="min-w-125px">
													<div class='badge badge-lg badge-dark'> Accion
												</th>
											</tr>
										</thead>
										<tbody class="fw-bold text-white fw-bolder">
											<?php
											foreach ($mbd->query("SELECT * FROM users_accounts") as $Listado) {

												echo "<tr>";
												echo "	<td>
												<div class='text-gray-userTable badge badge-circle badge-danger fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['id'] . "</div>";
												echo "	</td>";
												echo "	<td>
												<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['nombre'] . "</div>";
												echo "	</td>";

												echo "	<td>
												<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['apellido'] . "</div>";
												echo "	</td>";

												echo "	<td>
												<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['celular'] . "</div>";
												echo "	</td>";

												echo "	<td>
												<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['email'] . "</div>";
												echo "	</td>";

												echo "	<td>
												<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['creditos'] . "</div>";
												echo "	</td>";

												echo "	<td>
												<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $Listado['created_at'] . "</div>";
												echo "	</td>";

												if ($Listado['acc_status'] === '1') {
													echo "	<td>";
													echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'><span class='badge badge-light-success'>Activa</span></div>";
													echo "	</td>";
												} else {
													echo "	<td>";
													echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'><span class='badge badge badge-danger'>Deshabilitada</span></div>";
													echo "	</td>";
												}

												echo "
												<td> 
												<a class='btn btn-danger me-3 btn-sm' href='./deletes.php?id=" . $Listado['id'] . "'> <i class='bi bi-trash'></i>
												<a class='btn btn-success btn-sm' href='./index.php?id=" . $Listado['id'] . "'> <i class='bi bi-pencil'></i> 
												</td>
												";
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

	<script>
		var hostUrl = "../../assets/";
	</script>
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