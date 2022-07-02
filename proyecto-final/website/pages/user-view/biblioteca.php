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
                            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                <h1 class="d-flex text-white fw-bolder align-items-center fw-bolder fs-3 my-1">Mis libros</h1>
                                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                <small class="text-white fw-bolder fs-md-6 fw-bold my-1 ms-1">Estudiantes</small>
                            </div>
                        </div>
                    </div>

                    <div id="kt_content_container" class="container-lg">

                        <div class="card mb-5 mb-lg-10">
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 class="text-white"> <i class="fs-2 me-sm-3 las la-list-alt"></i>Tus libros</h3>
                                </div>
                            </div>

                            <div class="modal bg-white fade" tabindex="-1" id="kt_modal_2">
                                <div class="modal-dialog modal-fullscreen">
                                    <div class="modal-content shadow-none">
                                        <div class="modal-header ">
                                            <h5 class="text-white fw-bolder modal-title">Información del libro #1</h5>
                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                                <span class="svg-icon svg-icon-2x"></span>
                                            </div>
                                        </div>

                                        <div class="modal-body">
                                            <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                                <thead class="border-gray-200 fs-5 fw-bold bg-dark">
                                                    <tr>
                                                        <th class="text-white  min-w-60px"> Tapa del Libro </th>
                                                        <th class="text-white  min-w-60px">  Codigo libro </th>
                                                        <th class="text-white  min-w-100px"> Nombre </th>
                                                        <th class="text-white  min-w-100px"> Costo </th>
                                                        <th class="text-white  min-w-100px"> Fecha de compra </th>
                                                        <th class="text-white  min-w-100px"> Fecha de expiracion </th>

                                                    </tr>
                                                </thead>

                                                <tbody class="fw-6 fw-bold text-gray-600">
                                                    <?php
                                                    foreach ($books as $book => $value) {
                                                        if ($user->id == $value->owned_by) {
                                                            echo "<tr>";
                                                            echo "	<td>";
                                                            echo "		<a href='#' class='symbol symbol-50px bg-secondary bg-opacity-25 rounded'> <img src='https://edit.org/images/cat/portadas-libros-big-2019101610.jpg' alt=' data-kt-docs-datatable-subtable='template_image' /> </a>";
                                                            echo "	</td>";
                                                            echo "	<td>";
                                                            echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->codigoLibro . "</div>";
                                                            echo "	</td>";
                                                            echo "	<td>";
                                                            echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->nombre . "</div>";
                                                            echo "	</td>";
                                                            echo "	<td>";
                                                            echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->costo . " <i style='font-size: 15px; margin-left: 5px' class='bi bi-coin'></i> </div>";
                                                            echo "	</td>";
                                                            echo "	<td>";
                                                            echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->fecha . " <i style='font-size: 15px; margin-left: 5px' class='bi bi-calendar'></i> </div>";
                                                            echo "	</td>";
                                                            echo "	<td>";
                                                            echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->expiration_date . " <i style='font-size: 15px; margin-left: 5px' class='bi bi-calendar'></i> </div>";
                                                            echo "	</td>";
                                                            echo "</tr>";
                                                        } elseif (!$value->owned_by) {
                                                            echo "	<td>";
                                                            echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                            echo "	</td>";
                                                            echo "	<td>";
                                                            echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                            echo "	</td>";
                                                            echo "	<td>";
                                                            echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                            echo "	</td>";
                                                            echo "	<td>";
                                                            echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                            echo "	</td>";
                                                            echo "	<td>";
                                                            echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                            echo "	</td>";
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <!-- <p class="text-danger fw-bold fs-5"> <i class="fs-4 me-sm-3  bi bi-file-earmark-image"></i> Tapa del libro:</p>
                                            <img src="https://edit.org/images/cat/portadas-libros-big-2019101610.jpg" width="400px" height="600px">

                                            <p class="text-danger fw-bold fs-5"> <i class="fs-4 me-sm-3 bi bi-book"></i> Titulo del Libro:</p>
                                            <p class="text-dark-50 fw-bold fs-6">Las aventuras 3.
                                            </p>

                                            <p class="text-danger fw-bold fs-5"> <i class="fs-4 me-sm-3 bi bi-calendar2-date"></i> Fecha de compra:</p>
                                            <p class="text-dark-50 fw-bold fs-6">2022-07-12 01:01.
                                            </p>

                                            <p class="text-danger fw-bold fs-5"> <i class="fs-4 me-sm-3 bi bi-coin"></i> Costo:</p>
                                            <p class="text-dark-50 fw-bold fs-6">30$
                                            </p>

                                            <p class="text-danger fw-bold fs-5"> <i class="fs-4 me-sm-3 bi bi-info-circle-fill"></i> Descripción del libro:</p>
                                            <p class="text-dark-50 fw-bold fs-6">Las estrategias en este libro se dividen en tres bloques: cómo estructurar una historia, cómo generar recursos poéticos o humorísticos y cómo captar la atención del público. Aunque se centra en la narración oral, sus consejos también se aplican a la escritura. Su autor, Héctor Urién, me habló sobre ello en esta entrevista. Debido a la brevedad de las explicaciones, no te lo recomiendo este libro si eres principiante. Es más adecuado si quieres reflexionar sobre lo que sabes o sobre lo que aún no dominas.
                                            </p>
                                        -->

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body card-background-profile p-0">
                                <div class="table-responsive">
                                    <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9">
                                        <thead class="border-gray-200 fs-5 fw-bold bg-dark">
                                            <tr>
                                                <th class="text-white  min-w-60px"> Codigo libro </th>
                                                <th class="text-white  min-w-100px"> Nombre </th>
                                                <th class="text-white  min-w-100px"> Costo </th>
                                                <th class="text-white  min-w-100px"> Fecha de compra </th>
                                                <th class="text-white  min-w-100px"> Fecha de expiracion </th>
                                                <th class="text-white  min-w-100px"> Ver </th>

                                            </tr>
                                        </thead>

                                        <tbody class="fw-6 fw-bold text-gray-600">
                                            <?php
                                            foreach ($books as $book => $value) {
                                                if ($user->id == $value->owned_by) {
                                                    echo "<tr>";
                                                    echo "	<td>";
                                                    echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->codigoLibro . "</div>";
                                                    echo "	</td>";
                                                    echo "	<td>";
                                                    echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->nombre . "</div>";
                                                    echo "	</td>";
                                                    echo "	<td>";
                                                    echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->costo . " <i style='font-size: 15px; margin-left: 5px' class='bi bi-coin'></i> </div>";
                                                    echo "	</td>";
                                                    echo "	<td>";
                                                    echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->fecha . " <i style='font-size: 15px; margin-left: 5px' class='bi bi-calendar'></i> </div>";
                                                    echo "	</td>";
                                                    echo "	<td>";
                                                    echo "		<a class='text-gray-userTable fw-bolder text-hover-primary d-block mb-1 fs-6'>" . $value->expiration_date . " <i style='font-size: 15px; margin-left: 5px' class='bi bi-calendar'></i> </div>";
                                                    echo "	</td>";
                                                    echo " <td>";
                                                    echo " <button type='button' class='btn btn-link btn-color-gray btn-active-color-success me-5 mb-2' data-bs-toggle='modal' data-bs-target='#kt_modal_2'> <i class='fs-4 bi bi-eye'></i> </button> ";
                                                    echo "	</td>";
                                                    echo "</tr>";
                                                } elseif (!$value->owned_by) {
                                                    echo "	<td>";
                                                    echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                    echo "	</td>";
                                                    echo "	<td>";
                                                    echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                    echo "	</td>";
                                                    echo "	<td>";
                                                    echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                    echo "	</td>";
                                                    echo "	<td>";
                                                    echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                    echo "	</td>";
                                                    echo "	<td>";
                                                    echo "		<div class='btn btn-sm btn-danger fw-bolder ms-2 fs-8 py-1 px-3'> -/- </div>";
                                                    echo "	</td>";
                                                }
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

    <script src="../../assets/plugins/global/plugins.bundle.js"></script>
    <script src="../../assets/js/scripts.bundle.js"></script>
    <script src="../../assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="../../assets/js/custom/widgets.js"></script>
    <script src="../../assets/js/custom/apps/chat/chat.js"></script>
    <script src="../../assets/js/custom/modals/create-app.js"></script>
    <script src="../../assets/js/custom/modals/upgrade-plan.js"></script>
</body>

</html>