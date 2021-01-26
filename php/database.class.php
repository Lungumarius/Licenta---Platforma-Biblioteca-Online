<?php
class Database{
	private $host = "localhost";
	private $user = "root";
	private $pwd = "";
	private $dbName = "biblioteca";
	private $pdo;

	public function connect(){

		$dsn = "mysql:host=" . $this->host . ';dbname=' . $this->dbName;
		$this->pdo = new PDO ($dsn, $this->user, $this->pwd);

		return $this->pdo;
	}



}



 ?>
