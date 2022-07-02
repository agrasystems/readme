<?php
include "../../rutas.php";
require_once "../../classes/Database.php";

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
	header("location: sign-in");
	exit;
}


if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$mbd = new Database();
	$mbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = $mbd->prepare("DELETE FROM users_accounts WHERE id = :id");
	$query->bindParam(':id', $id);
	$query->execute();
}
header("location: manage-accounts.php");
exit;
?>
<script src="../../assets/js/custom/pages/ocultarCodigo.js"></script>