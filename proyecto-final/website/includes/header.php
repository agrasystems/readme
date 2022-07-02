<?php
$username = $_SESSION["username"];
$mbd = new Database();
foreach ($mbd->query("SELECT * from users_accounts WHERE username = '$username'") as $usuario) {
}
?>
<div id="kt_header" class="header align-items-stretch">
	<div class="container-fluid d-flex align-items-stretch justify-content-between">
		<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
			<div class="btn btn-icon btn-active-color-white" id="kt_aside_mobile_toggle">
				<i class="bi bi-list fs-1"></i>
			</div>
		</div>
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
			<div class="d-flex align-items-stretch" id="kt_header_nav">
				<div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
					<div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-white menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
						<div class="menu-item me-lg-1">
						</div>
					</div>
				</div>
			</div>
			<div class="d-flex align-items-stretch flex-shrink-0">
				<div class="topbar d-flex align-items-stretch flex-shrink-0">
					<div class="d-flex align-items-stretch" id="kt_header_user_menu_toggle">
						<div class=" cursor-pointer symbol-circle symbol ms-sm-9 mt-sm-2" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
							<?php
							echo "<img src='" . $usuario["profilePic"] . "' class='h-80 align-self-center' />";
							?>
						</div>
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
							<div class="menu-item px-3">
								<div class="menu-content d-flex align-items-center px-3">
									<div class="symbol symbol-50px me-5">
										<?php echo "<img src='" . $usuario["profilePic"] . "' class='h-50 align-self-center' />"; ?>
									</div>
									<div class="d-flex flex-column">
										<?php
										foreach ($mbd->query("SELECT * FROM users_accounts WHERE username = '$username'") as $Cuenta) {
											$idCuenta = $Cuenta['id'];
											$nombre = $mbd->query("SELECT nombre FROM users_accounts WHERE id = $idCuenta")->fetchColumn();
											$apellido = $mbd->query("SELECT apellido FROM users_accounts WHERE id = $idCuenta")->fetchColumn();
											echo "<a class='fw-bold text-gray-userTable text-hover-primary fs-6'> <i style='font-size: 15px; margin-right: 5px;' class='bi bi-person-circle'></i>" . $nombre . "  " . $apellido . "</a>";

											echo "<div class='fw-bolder text-gray-userTable text-hover-primary d-flex align-items-center fs-6'> <i style='font-size: 15px; margin-right: 5px;' class='bi bi-briefcase'></i> Rol";
											echo "<span class='badge badge-dark fw-bolder fs-8 px-2 py-1 ms-2'>" . $Cuenta['grade'] . "</span></div>";

											echo "<div class='fw-bolder text-hover-primary text-gray-userTable d-flex align-items-center fs-6'> <i style='font-size: 15px; margin-right: 5px;' class='bi bi-coin'></i> Creditos";
											echo "<span class='badge badge-dark fw-bolder fs-8 px-2 py-1 ms-2'>" . $Cuenta['creditos'] . "</span></div>";
										}
										?>
									</div>
								</div>
							</div>

							<div class="separatorProfile my-2"></div>

							<div class="menu-item px-5">
								<?php
								foreach ($mbd->query("SELECT * FROM users_accounts WHERE username = '$username'") as $Cuenta) {
									$idCuenta = $Cuenta['id'];
									echo "<a href=" . PAGES_ADMIN_USER_PERFIL . $idCuenta . " ' class='text-white fw-bold menu-link px-5' > <i style='font-size: 15px; margin-right: 7px' class='bi bi-info-circle'> </i> Mi perfil</a>";
								}
								?>
							</div>
							<div class="separator mx-4 my-4"></div>

							<div class="menu-item px-5">
								<?php
								echo "<a href=" . PAGES_ADMIN_LOGOUT . " ' class='text-white fw-bold menu-link px-5' > <i style='font-size: 15px; margin-right: 7px' class='bi bi-box-arrow-right'> </i> Cerrar sesion</a>";
								?>
							</div>
							<div class="separatorProfile my-2"></div>

						</div>
					</div>
					<div class="d-flex align-items-stretch d-lg-none px-3 me-n3" title="Show header menu">
						<div class="topbar-item" id="kt_header_menu_mobile_toggle">
							<i class="bi bi-text-left fs-1"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>