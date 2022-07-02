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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css" />
		<link href="../../assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="../../assets/css/carousel/carousel.css" rel="stylesheet" type="text/css" />
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
									<h1 class="d-flex text-white align-items-center fw-bolder fs-3 my-1">Inicio</h1>
									<span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
									<small class="text-white fs-md-6 fw-bold my-1 ms-1">Menu Principal</small>
								</div>
							</div>
						</div>
						<div>
							<h1 align="center" class="mt-lg-5 text-white">VISTA DEL USUARIO</h1>
						</div>
						<h1  class="mt-lg-5 text-white fs-2 text-center">Libros infantiles</h1>
						<div class="carousel mt-lg-5">
							<button aria-lable="Anterior" class=" ms-lg-6 carousel__anterior carousel__anterior__css">
										<i class="bi bi-arrow-left"></i>
							</button>
							<div class="carousel__contenedor carousel__contenedor__css me-lg-17 ms-lg-17">	
								<div class="carousel__lista carousel__lista__css">
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/1.png" alt="">
										<p>algo1</p>
									</div>
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/2.png" alt="">
										<p>algo2</p>
									</div>
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/3.png" alt="">
										<p>algo3</p>
									</div>
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/4.png" alt="">	
										<p>algo4</p>
									</div>
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/5.png" alt="">	
										<p>algo5</p>
									</div>
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/6.png" alt="">	
										<p>algo6</p>
									</div>
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/7.png" alt="">	
										<p>algo7</p>
									</div>
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/8.png" alt="">	
										<p>algo8</p>
									</div>
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/9.png" alt="">	
										<p>algo9</p>
									</div>
									<div class="carousel__elemento carousel__elemento__css">
										<img src="../../assets/media/books/10.png" alt="">	
										<p>algo10</p>
									</div>
								</div>
							</div>	
							<div role="tablist" class="carousel__indicadores carousel__indicadores__css"></div>
							<button aria-lable="Siguiente" class="ms-lg-6 carousel__siguiente carousel__siguiente__css">
								<i class="bi bi-arrow-right"></i>
							</button>
						</div>
						<div class="carousel mt-lg-5">
							<button aria-lable="Anterior" class=" ms-lg-6 carousel__anterior_2 carousel__anterior__css_2">
										<i class="bi bi-arrow-left"></i>
							</button>
							<div class="carousel__contenedor_2 carousel__contenedor__css me-lg-17 ms-lg-17">	
								<div class="carousel__lista_2 carousel__lista__css">
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/1.png" alt="">
										<p>algo1</p>
									</div>
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/2.png" alt="">
										<p>algo2</p>
									</div>
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/3.png" alt="">
										<p>algo3</p>
									</div>
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/4.png" alt="">	
										<p>algo4</p>
									</div>
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/5.png" alt="">	
										<p>algo5</p>
									</div>
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/6.png" alt="">	
										<p>algo6</p>
									</div>
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/7.png" alt="">	
										<p>algo7</p>
									</div>
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/8.png" alt="">	
										<p>algo8</p>
									</div>
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/9.png" alt="">	
										<p>algo9</p>
									</div>
									<div class="carousel__elemento_2 carousel__elemento__css">
										<img src="../../assets/media/books/10.png" alt="">	
										<p>algo10</p>
									</div>
								</div>
							</div>	
							<div role="tablist" class="carousel__indicadores_2 carousel__indicadores__css"></div>
							<button aria-lable="Siguiente" class="ms-lg-6 carousel__siguiente_2 carousel__siguiente__css_2">
								<i class="bi bi-arrow-right"></i>
							</button>
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
		<script src="../../assets/js/custom/utilities/carousel/carousel.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
		<script src="../../assets/js/custom/pages/ocultarCodigo.js"></script>
	</body>
</html>