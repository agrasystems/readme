<?php
function getHeader() {    
	$archivo = include('header.php');
	return $archivo;
}

function getLateral() {
	$archivo = include('lateral.php');
	return $archivo;
}

function informacionLibros() {
		$mbd = new Database();
		foreach ($mbd->query('SELECT * FROM libros') as $query) {
				$rating = ' ';
				if ($query['rating'] == 1) {
						$rating = '<div class="rating"> <div class="rating-label me-2 checked"> <i class="bi bi-star fs-2"></i> </div> <div class="rating-label me-2"> <i class="bi bi-star fs-2"></i> </div> <div class="rating-label me-2"> <i class="bi bi-star fs-2"></i> </div> <div class="rating-label me-2"> <i class="bi bi-star fs-2"></i> </div><div class="rating-label me-2"> <i class="bi bi-star fs-2"></i> </div> </div>';
				} else if ($query['rating'] == 2) {
						$rating = '<div class="rating"><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2"><i class="bi bi-star fs-2"></i></div></div>';
				} else if ($query['rating'] == 3) {
						$rating = '<div class="rating"><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2"><i class="bi bi-star fs-2"></i></div></div>';
				} else if ($query['rating'] == 4) {
						$rating = '<div class="rating"><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2"><i class="bi bi-star fs-2"></i></div></div>';
				} else if ($query['rating'] == 5) {
						$rating = '<div class="rating"> <div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div><div class="rating-label me-2 checked"><i class="bi bi-star fs-2"></i></div></div>';
				}

				echo "<tr>";
				echo "	<td>";
				echo "		<div class='badge badge-circle badge-danger fw-bolder'>" . $query['codigoLibro'] . "</div>";
				echo "	</td>";
				echo "	<td>";
				echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $query['nombre'] . "</div>";
				echo "	</td>";
				echo "	<td>";
				echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $query['descripcion'] . "</div>";
				echo "	</td>";
				echo "	<td>";
				echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'>" . $query['genero'] . "</div>";
				echo "	</td>";
				echo "	<td>";
				echo $rating ;
				echo "	</td>";
				echo "	<td>";
				echo "		<div class='fw-bolder badge badge-dark mb-1 fs-6'>" . $query['costo'] . "<i class='text-white fs-6 bi bi-currency-dollar'></i> </div>";
				echo "	</td>";
				echo "	<td>";
				echo "		<div class='text-gray-userTable fw-bolder text-hover-primary mb-1 fs-6'> <i class='me-sm-3 bi bi-calendar3'></i>" . $query['fecha'] . "</div>";
				echo "	</td>";
				echo "</tr>";
		}
}
?>

<script src="assets/js/custom/pages/ocultarCodigo.js"></script>