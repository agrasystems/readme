<?php
class User extends Database
{
	public $id;
	public $acc_status;
	public $username;
	public $password;
	public $nombre;
	public $apellido;
	public $email;
	public $celular;
	public $creditos;
	public $created_at;
	public $last_login_date;
	public $last_login_ip;
	public $libros_totales;
	public $grade;
	public $profilePic;
	public $origen;

	public function __construct($id)
	{
		$data = User::GetUserById($id);
		foreach ($data as $user) {
			$this->id = $id;
			$this->acc_status = $user['acc_status'];
			$this->username = $user['username'];
			$this->password = $user['password'];
			$this->nombre = $user['nombre'];
			$this->apellido = $user['apellido'];
			$this->email = $user['email'];
			$this->celular = $user['celular'];
			$this->creditos = $user['creditos'];
			$this->created_at = $user['created_at'];
			$this->last_login_date = $user['last_login_date'];
			$this->last_login_ip = $user['last_login_ip'];
			$this->libros_totales = $user['libros_totales'];
			$this->grade = $user['grade'];
			$this->profilePic = $user['profilePic'];
			$this->origen = $user['origen'];
		}
	}

	public static function GetUserById($id)
	{
		$mbd = new Database();
		$ads = $mbd->prepare("SELECT * FROM users_accounts WHERE id = :id");
		$ads->bindParam(':id', $id, PDO::PARAM_STR);
		$ads->execute();
		$uInfo = $ads->fetchAll();
		return $uInfo;
	}

	public static function GetUserByUsernameAndPassword($username, $password)
	{
		$mbd = new Database();
		$ads = $mbd->prepare("SELECT * from users_accounts WHERE username = :u AND password = :p");
		$ads->bindParam(':u', $username, PDO::PARAM_STR);
		$ads->bindParam(':p', $password, PDO::PARAM_STR);
		$ads->execute();
		$uInfo = $ads->fetchAll();
		return $uInfo;
	}

	public static function GetUsersCount()
	{
		$mbd = new Database();
		$ads = $mbd->prepare("SELECT * FROM users_accounts");
		$ads->execute();
		return $ads->rowCount();
	}

	public static function UpdateInfoUser()
	{
		$mbd = new Database();
		$last_login = date("H:i d-m-y", time() - (5 * 60 * 60));
		$queryLastLogin = $mbd->prepare("UPDATE users_accounts SET last_login_date = :ll, last_login_ip = :ra WHERE username = :u");
		$queryLastLogin->bindParam(":ll", $last_login);
		$queryLastLogin->bindParam(":ra", $_SERVER['REMOTE_ADDR']);
		$queryLastLogin->bindParam(":u", $_SESSION["username"]);
		$queryLastLogin->execute();
		return true;
	}

	public static function UpdateIdk($nombre, $apellido, $idUsuario)
	{
		$mbd = new Database();
		$query = $mbd->prepare("UPDATE users_biblioteca SET id=:di, nombre=:n, apellido=:a WHERE id = $idUsuario");
		$query->bindParam(":di", $idUsuario);
		$query->bindParam(":n", $nombre);
		$query->bindParam(":a", $apellido);
		return true;
	}

	public static function Test1($idUsuario)
	{
		$mbd = new Database();
		$query = $mbd->query("SELECT * FROM users_logs WHERE userId = $idUsuario");
		$query->execute();
		$logsData = $query->fetchAll();
		return true;
	}

	public static function Test2($idUsuario)
	{
		$mbd = new Database();
		$query = $mbd->query("SELECT * FROM users_logs WHERE userId = $idUsuario");
		$query->execute();
		$logsData = $query->fetchAll();
		return true;
	}

	public static function InsertNewLog($log, $typeLog)
	{
		$fecha = date("d-m-Y H:i", strtotime("-5 hours"));
		$mbd = new Database();
		$query = $mbd->prepare("INSERT INTO users_logs (userId, username, ip, type, info, date) VALUES (:user_id, :user_name, :ip, :type, :info, :date)");
		$query->bindParam(':user_id', $_SESSION['id']);
		$query->bindParam(':user_name', $_SESSION['username']);
		$query->bindParam(':type', $typeLog);
		$query->bindParam(':info', $log);
		$query->bindParam(':ip', $_SERVER['REMOTE_ADDR']);
		$query->bindParam(':date', $fecha);
		$query->execute();
		return true;
	}
}
