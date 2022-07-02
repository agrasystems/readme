<?php
class Database extends PDO {
	private $servername = "159.223.146.185";
	private $user = "agus";
	private $password = "Agustin123_";
	private $dbname = "biblioteca";

	public function __construct() {
		try {
			parent::__construct("mysql:dbname={$this->dbname};host={$this->servername};charset=utf8", $this->user, $this->password);
		} catch(PDOException $e) {
			echo '[Database] Ha surgido un error y no se puede conectar a la base de datos. (' . $e->getMessage() . ')';
			exit;
		}
	}
}
?>