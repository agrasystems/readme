<?php
$error = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<base href="">
	<title>Agras Systems - Register</title>
	<meta charset="utf-8" />
	<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="https://www.theninjacto.xyz/img/icons/server-512.png" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href=" assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href=" assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="bg-body bg-login">
	<div class="d-flex flex-column flex-root">
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #1b2434">
				<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
					<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
						<a href="#" class="py-9 mb-5">
							<img alt="Logo" src=" assets/media/logos/ReadMe-B.png" class="h-100px" />
						</a>
						<h1 class="fw-bolder text-white text-hover-success fs-2qx pb-5 pb-md-10">Sistema de Biblioteca Digital</h1>
						<p class="fw-bold text-white fs-2">Desarrollado por <span class="text-hover-danger">Agras Systems</span>
							<br />creando cosas únicas <i style="font-size: 28px; margin-right: 17px; margin-left: 4px" class="bi bi-code-slash"></i>
						</p>
					</div>
					<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-450px" style="background-image: url( assets/media/logos/agras.png"></div>
				</div>
			</div>

			<div class="d-flex flex-column flex-lg-row-fluid py-10">
				<div class="d-flex flex-center flex-column flex-column-fluid">
					<form action="../data-forms/post-register.php" id="kt_sign_up_form" method="post">
						<div class="w-lg-600px p-10 p-lg-15 mx-auto">
							<div class="mb-10 text-center">
								<h1 class="text-white mb-3"> <i class="fs-1 me-2 bi bi-person-plus-fill"></i> CREAR CUENTA</h1>
								<div class="text-gray-400 fw-bold fs-4">Ya tienes una cuenta?
									<a href="../website/sign-in.php" class="link-primary fw-bolder">Inicia sesion!</a>
								</div>
							</div>
							<div class="d-flex align-items-center mb-10">
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
								<div class="border-bottom border-gray-300 mw-50 w-100"></div>
							</div>
							<div class="fv-row col-xl-15 mb-7">
								<label class="form-label fw-bolder text-white fs-6">Nombre de Usuario</label>
								<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="nomusuario" name="nomusuario" autocomplete="off" />
							</div>
							<div class="row fv-row mb-7">
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-white fs-6">Nombre</label>
									<input class="form-control form-control-lg form-control-solid" onkeyup="chequear(this.value)" type="text" placeholder="" id="nombre" name="nombre" autocomplete="off" />
									<div class="col-2">
										<img src="" id="respuesta" width="20px">
									</div>
								</div>
								<div class="col-xl-6">
									<label class="form-label fw-bolder text-white fs-6">Apellido</label>
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="apellido" name="apellido" autocomplete="off" />
								</div>
								<div class="fv-row col-xl-6 mb-7">
									<label class="form-label fw-bolder text-white fs-6">Email</label>
									<input class="form-control form-control-lg form-control-solid" type="email" placeholder="" id="email" name="email" autocomplete="off" />
								</div>
								<div class="fv-row col-xl-6 mb-7">
									<label class="form-label fw-bolder text-white fs-6">Cedula</label>
									<input class="form-control form-control-lg form-control-solid" type="text" placeholder="" id="cedula" name="cedula" autocomplete="off" />
								</div>
								<div class="fv-row col-xl-6 mb-7">
									<label class="form-label fw-bolder text-white fs-6">Fecha de Nacimiento</label>
									<input class="form-control form-control-lg form-control-solid" type="date" placeholder="" id="nacimiento" name="nacimiento" autocomplete="off" />
								</div>
								<div class="fv-row col-xl-6 mb-7">
									<label class="form-label fw-bolder text-white fs-6">Telefono</label>
									<input class="form-control form-control-lg form-control-solid" type="tel" placeholder="" id="telefono" name="telefono" autocomplete="off" />
								</div>
								<div class="mb-10 fv-row" data-kt-password-meter="true">
									<div class="mb-1">
										<label class="form-label fw-bolder text-white fs-6">Contraseña</label>
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" id="password" name="password" autocomplete="off" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
									</div>
									<div class="text-muted">Recuerda usar 8 caracteres minimos, incluyendo letras &amp; simbolos.</div>
								</div>
								<div class="fv-row mb-10">
									<label class="form-check form-check-custom form-check-solid form-check-inline">
										<input class="form-check-input" type="checkbox" name="toc" value="1" />
										<span class="form-check-label fw-bold text-white fs-6">He leido y acepto
											<a href="#" class="ms-1 link-primary">los terminos y condiciones</a>.</span>
									</label>
								</div>
								<div class="text-center">
									<button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
										<span class="indicator-label">Registrarse</span>
										<span class="indicator-progress">Espere...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<br>
									<input class="mt-20 btn btn-sm btn-info" type="submit" value="Ver datos">
								</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src=" assets/plugins/global/plugins.bundle.js"></script>
	<script src=" assets/js/scripts.bundle.js"></script>
	<script src=" assets/js/custom/authentication/sign-up/general.js"></script>
	<script type="text/javascript">
		function chequear(usuario) {

			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("nombre").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET", "check.php?usuario=" + usuario, true);
			xmlhttp.send();
		}
	</script>
</body>

</html>