<?php

error_reporting(E_ALL & ~E_NOTICE); ini_set('display_errors', '1');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once '../database.class.php';
include_once '../books.class.php';
$database = new Database();
$db = $database->connect();
$books = new Books($db);
$stmt = $books->read();
$num = $stmt->rowCount();
if($num>0){

	$books_arr=array();
	$books_arr["books"]=array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $book_item=array(
            "id" => $id,
            "titlu" => $titlu,
            "descriere" => html_entity_decode($descriere),
            "autor" => $autor,
            "status" => $status,
            "an" => $an,
			"editura" => $editura,
			"categorie" => $categorie,
			"ISBN" => $ISBN,
			"coperta" => base64_encode($coperta)
        );

        array_push($books_arr["books"], $book_item);

    }


    http_response_code(200);

    echo json_encode($books_arr);
	echo json_last_error();
}
	else{


	    http_response_code(404);


	    echo json_encode(
	        array("message" => "No products found.")
	    );
	}

 ?>
