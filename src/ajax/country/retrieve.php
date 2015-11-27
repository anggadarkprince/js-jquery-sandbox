<?php

	// koneksi database pake PDO (PHP Data Object)
	$pdo = new PDO("mysql:host=localhost;dbname=sandbox", "root", "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	try{
		// query dapatkan state berdasarkan id country
		$query="SELECT * FROM state WHERE country_id=:country_id";
		$statement = $pdo->prepare($query);
		// $_POST["id"] ambil data dari POST yang dilakukan javascript, ID ini kirimkan ke model untuk query
		$statement->bindParam(':country_id', $_POST["id"], PDO::PARAM_INT);
		$statement->execute();
		// fetch data hasil query menghasilkan array associative + array indexed
		$result = $statement->fetchAll();
		
		// INI YANG PENTING $result pokoknya data array list state, pokoknya dapatkan itu dari model usahakan dalam bentuk array, jangan object atau kelas
		echo json_encode($result); // <---- ini yang dibaca javascript
	}
	catch(PDOException $e){
		echo 'ERROR: ' . $e->getMessage(). '<br>';
	}
	
	
	// 	contoh di CI Controller
	// 	function get_state(){
	//		$id = this->input->post("id");
	//		$result = $this->model->state_country($id);
	//		echo json_encode($result);
	// }
?>