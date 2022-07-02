<?php 
class AuditLogs extends Database {
    public $Id;
    public $userId;
    public $username;
    public $ip;
    public $type;
    public $info;
    public $date;

    public function __construct($auditLog){
        $this->Id = $auditLog['Id'];
        $this->userId = $auditLog['userId'];
        $this->username = $auditLog['username'];
        $this->ip = $auditLog['ip'];
        $this->type = $auditLog['type'];
        $this->info = $auditLog['info'];
        $this->date = $auditLog['date'];
    }

    public static function GetLocationFromUser(){
        $mbd = new Database();
		$ads=$mbd->prepare("SELECT * FROM libros");
		$ads->execute();
		$uInfo = $ads->fetchAll();
		return $uInfo;
    }

    public static function GetLogsFromUser($username){
		//$fecha = date("d-m-Y H:i", strtotime("-5 hours"));
		$mbd = new Database();
        $query=$mbd->prepare("SELECT * from users_logs WHERE username = :u");
        $query->bindParam(':u', $username, PDO::PARAM_STR);
		$query->execute();
		return true;
	}

    public static function GetBooks(){
        $mbd = new Database();
		$ads=$mbd->prepare("SELECT * FROM libros");
		$ads->execute();
		return $ads->rowCount();
    }
}
