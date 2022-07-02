<?php
include_once "rutas.php";

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
	header("location: index");
}

$error = "";

if ($_POST) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$usuario = User::GetUserByUsernameAndPassword($user, $pass)[0];

	if ($usuario) {
		$_SESSION["loggedin"] = true;
		$_SESSION["username"] = $usuario['username'];
		$_SESSION["grade"] = $usuario['grade'];
		$_SESSION["id"] = $usuario['id'];

		User::UpdateInfoUser();

		header("location: index");
	} else {
		$error = "Usuario o contraseña invalidos";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<base href="">
	<title>Agras Systems - Login</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Sistema de Libreria" />
	<meta property=" og:site_name content=" Agras Systems" />
	<link rel="shortcut icon" href="https://www.theninjacto.xyz/img/icons/server-512.png" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
</head>

<body id="kt_body" class="bg-login bg-body">
	<div class="d-flex flex-column flex-root">
		<div class="d-flex flex-column flex-lg-row flex-column-fluid">
			<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative" style="background-color: #1b2434;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="kt_sign_in_form" method="post">
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
						<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
							<a href="#" class="py-9 mb-5">
								<img alt="Logo" src="assets/media/logos/ReadMe-B.png" class="h-100px" />
							</a>
							<h1 class="fw-bolder text-white text-hover-success fs-2qx pb-5 pb-md-10">Sistema de Biblioteca Digital</h1>
							<p class="fw-bold text-white fs-2">Desarrollado por <span class="text-hover-danger">Agras Systems</span>
								<br />creando cosas únicas <i style="font-size: 28px; margin-right: 17px; margin-left: 4px" class="bi bi-code-slash"></i>
							</p>

						</div>
						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-450px" style="background-image: url(assets/media/logos/agras.png"></div>
					</div>
			</div>
			<div class="d-flex flex-column flex-lg-row-fluid py-10">
				<div class="d-flex flex-center flex-column flex-column-fluid">
					<div class="w-lg-600px rainbow-border">
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" data-kt-redirect-url="demo1/dist/index.html" action="#">
								<div class="text-center mb-10">
									<h1 class="text-white mb-3"> <i class="fs-1 me-2 fas fa-sign-in-alt"></i> INICIAR SESIÓN</h1>
									<div class="text-gray-400 fw-bold fs-4">No tienes cuenta?
										<a href="../website/sign-up.php" class="link-primary fw-bolder">¡Create una!</a>
									</div>
								</div>
								<div class="fv-row mb-10">
									<label class="form-label fs-6 fw-bolder text-white"></label>
									<input placeholder="usuario" id="username" class="form-control form-control-lg form-control-solid" type="username" name="user" autocomplete="off" />
								</div>
								<div class="mb-10 fv-row" data-kt-password-meter="true">
									<div class="mb-1">
										<div class="position-relative mb-3">
											<input class="form-control form-control-lg form-control-solid" type="password" placeholder="contraseña" id="pass" name="pass" autocomplete="off" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>
										<a href="#" class="link-primary fs-6 fw-bolder">Contraseña olvidada?</a>
									</div>
								</div>
								<div class="text-center">
									<input type="submit" class="btn btn-lg btn-primary w-100 mb-5" value="Ingresar">
									</button>
								</div>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function mostrarPassword() {
			var inputPwd = document.getElementById("contrasenia");
			var ojo = document.getElementById("togglePassword");

			if (inputPwd.type === "password") {
				inputPwd.type = "text";
				ojo.className = "bi bi-eye-slash-fill";
			} else {
				inputPwd.type = "password";
				ojo.className = "far fa-eye";
			}
		}
	</script>

	<script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>
	<script src="assets/js/custom/pages/ocultarCodigo.js"></script>
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<script src="assets/js/custom/authentication/sign-in/general.js"></script>
</body>

</html>