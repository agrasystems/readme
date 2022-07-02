<?php 
	include "../../rutas.php"
?>
<!DOCTYPE html>
<html lang="en">
	<head><base href="">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="../../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<div class="rebirthazul d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<?php include "../../includes/lateralUser.php"; ?>
				</div> 	
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<?php include "../../includes/header.php"; ?>
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="rebirthazul toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex text-white align-items-center fw-bolder fs-3 my-1">Reseñas</h1>
									<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
									<small class="text-white fs-md-6 fw-bold my-1 ms-1">Mis Reseñas</small>
								</div>
							</div>
						</div>
						<div>
                        	<h1 align="center" class="text-white">Reseñas del usuario</h1>
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="230" height="230" viewBox="0 0 230 230">
								<rect x="10" y="10" width="100" height="100" fill="Gold" stroke-width="10" stroke="black"/>
								<rect x="10" y="120" width="100" height="100" fill="Gold" />
								<rect x="120" y="10" width="100" height="100" fill="Gold" />
								<rect x="120" y="120" width="100" height="100" fill="Gold" />
							</svg>
							<div class="row position-relative justify-content-center align-items-center">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="230" height="230" viewBox="0 0 230 230">
								<rect x="10" y="120" width="100" height="100" fill="Gold" />
								</svg>
								<div class="position-absolute">
									<button type="button position-absolute" class="btn btn-dark btn-circle btn-xl">Black</button>
									<button type="button position-absolute" class="btn btn-dark btn-circle btn-xl">Black</button>
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
		<script src="../../assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="../../assets/js/custom/widgets.js"></script>
		<script src="../../assets/js/custom/apps/chat/chat.js"></script>
		<script src="../../assets/js/custom/modals/create-app.js"></script>
		<script src="../../assets/js/custom/modals/upgrade-plan.js"></script>
		<script src="../../assets/js/custom/pages/ocultarCodigo.js"></script>
	</body>
</html>