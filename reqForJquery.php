<?php
Include_once('class_cep.php');


if(!empty($_GET['cep'])){
	
	$cep = $_GET['cep'];

	//$cep = 31872060;	
	$contador = strlen($cep);
	if($contador != 8 ){
		echo "erro";
		
	}else{
		$address = Address::get_address($cep);

	if(isset($address->erro)){
		echo "Cep provavelmente inexistente";
	}else{
		
				header('Content-Type: application/json');
				$resultArray = array( 
					'cep' => "$address->cep",
					'bairro' => "$address->bairro",
					'logradouro' => "$address->logradouro",
					'estado' => "$address->uf"

				);
				echo json_encode($resultArray);
		}
	}
}

?>