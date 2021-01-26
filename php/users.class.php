<?php

include_once 'database.class.php';
include 'books.class.php';
class User extends Database {
	private $nume;
	private $mail;
	private $parola;
	private $telefon;


	public function __construct(){

	}
	public function setNume(string $nume){
		$this->nume = $nume;
	}
	public function setMail(string $mail){
		$this->mail = $mail;
	}
	public function setParola(string $parola){
		$this->parola = hash('ripemd160',$parola);
	}
	public function setTelefon(int $telefon){
		$this->telefon = $telefon;
	}

	public function register(){
		if(empty($this->nume) || empty($this->mail) || empty($this->parola) || empty($this->telefon))
			die('Toate campurile sunt obligatorii ! ');
		if (!filter_var($this->mail, FILTER_VALIDATE_EMAIL))
  			die("Email incorect");
		if (strlen($this->parola) <= '8')
            die("Parola dumneavoastra trebuie sa aiba minim 8 caractere");
		$sql2 = "SELECT * from users where mail = :mail";
		$stmt2 = $this->connect()->prepare($sql2);
		$stmt2->bindParam(':mail', $this->mail, PDO::PARAM_STR);
		$stmt2->execute(array(':mail' => $this->mail));
		$row2 = $stmt2 -> fetch(PDO::FETCH_ASSOC);
		if (!preg_match("/^[a-zA-Z-' ]*$/",$this->nume))
  			echo "Completati numele corect ";
		$sql = "INSERT INTO users (nume,mail,parola,telefon) values (:nume,:mail,:parola,:telefon)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->bindParam(':nume', $this->nume, PDO::PARAM_STR);
		$stmt->bindParam(':mail', $this->mail, PDO::PARAM_STR);
		$stmt->bindParam(':parola', $this->parola, PDO::PARAM_STR);
		$stmt->bindParam(':telefon',$this->telefon, PDO::PARAM_INT);

		if($stmt->execute()){
			echo 'Nice';
			header("Refresh:0; url=../index.php");
		}
		else
			echo 'Not k';


	}
	public function login(){
		session_start();
		$sql = "SELECT * from users where mail = :mail";
		$stmt = $this->connect()->prepare($sql);
		$stmt->bindParam(':mail', $this->mail, PDO::PARAM_STR);
		$stmt->execute(array(':mail' => $this->mail));
		$row = $stmt -> fetch(PDO::FETCH_ASSOC);
		if($this->parola==$row['parola']){
		$_SESSION['id'] = $row['id'];
		$_SESSION['nume'] = $row['nume'];
		$_SESSION['mail'] = $row['mail'];
		$_SESSION['tip_user'] = $row['tip_user'];
		if($row['tip_user']=='0')
			header("Location: ../html/main_page_user.php");
		else
			header("Location: ../html/main_page_manager.php");

		}
	else {
		echo 'Mail sau parola gresite ';
		}
	}
/*
	public function checkEligibil(){
		$sql = "SELECT eligibil, imprumuturi from users WHERE mail = :mail";
		$stmt = $this->connect()->prepare($sql);
		$stmt->bindParam(':mail', $this->mail, PDO::PARAM_STR);
		$stmt->execute(array(':mail' => $this->mail));
		$row = $stmt -> fetch(PDO::FETCH_ASSOC);
		if($row['imprumuturi']<=3){

		}
		if($row['eligibil']!=0)
	}
	public function imprumut(int $ISBN, string $mail, string $data){
		$sql = "SELECT books.ISBN, books.id, books.status, users.mail, users.id FROM users, books WHERE books.ISBN = ':ISBN' AND books.status = 'Disponibil' ";
		$stmt = $this->connect()->prepare($sql);
		$stmt->bindParam(':ISBN', $this->ISBN, PDO::PARAM_INT);
		$stmt->execute(array(":"))

	}
*/

}
 ?>
