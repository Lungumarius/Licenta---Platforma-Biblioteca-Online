<?php

class Books {
	private $table = "books";
	private $conn;
	public $id;
	public $titlu;
	public $descriere;
	public $status;
	public $autor;
	public $an;
	public $editura;
	public $categorie;
	public $ISBN;
	public $coperta;

	public function __construct($db){
        $this->conn = $db;
    }

	public function set_categorie($cat){
		$this->categorie = $cat;
	}
	public function get_categorie(){
		return $this->categorie;
	}
	public function read(){

    $query = "SELECT * FROM books ";

    $stmt = $this->conn->prepare($query);

    $stmt->execute();

    return $stmt;
}




}



 ?>
