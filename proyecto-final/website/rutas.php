<?php

const PRINCIPAL_INDEX = "http://localhost/proyecto-final/website/index";
const PAGES_USER_BIBLIOTECA = "http://localhost/proyecto-final/website/pages/user-view/biblioteca";
const PAGES_ADMIN_CUENTAS = "http://localhost/proyecto-final/website/pages/admin-view/manage-accounts";
const PAGES_ADMIN_LIBROS = "http://localhost/proyecto-final/website/pages/admin-view/libros";
const PAGES_ADMIN_LOGIN = "http://localhost/proyecto-final/website/pages/admin-view/sign-in";
const PAGES_ADMIN_LOGOUT = "http://localhost/proyecto-final/website/logout";
const PAGES_ADMIN_USER = "http://localhost/proyecto-final/website/user";
const PAGES_ADMIN_USER_PERFIL = "http://localhost/proyecto-final/website/user?id=";
const PAGES_ADMIN_USERS = "http://localhost/proyecto-final/website/pages/admin-view/users-list";
const PAGES_CONFIG = "http://localhost/proyecto-final/website/config/config";
const PAGES_GESTION_LIBROS = "http://localhost/proyecto-final/website/pages/admin-view/manage-books";
const PAGES_REGISTER_USER = "http://localhost/proyecto-final/website/sign-up";

session_start();

include_once 'classes/Database.php';
include_once 'classes/User.php';
include_once 'classes/Book.php';

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //header("location: sign-in");
} else {
    $user = new User($_SESSION['id']);
    User::InsertNewLog("[OK] Inicio de sesion correcto", "1");

    foreach (Book::GetAllBooks() as $libro) {
        $books[$libro['codigoLibro']] = new Book($libro);
    }
}

?>
<script src="assets/js/custom/pages/ocultarCodigo.js"></script>