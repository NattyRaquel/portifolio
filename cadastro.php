<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" >
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<body>
		<?php
			include "cab.inc";
			
			$nomeAct = $_POST["nomeAct"];
			$linkAct = $_POST["linkAct"];
			$data = $_POST["data"]; 
			
			if(!file_exists("portifolio.xml")){
				
				$fp = fopen("portifolio.xml","w");
				
				$conteudo_inicial = '<?xml version="1.0" encoding="ISO-8859-1"?><portifolios></portifolios>';
				
				fwrite($fp,$conteudo_inicial);
				
				fclose($fp);
				
			
			}
			
			if(isset($_FILES['arquivo'])){
				  date_default_timezone_set("Brazil/East");

				  $ext = strtolower(substr($_FILES['arquivo']['name'],-4)); 
				  $new_name = date("Y.m.d-H.i.s") . $ext; 
				  $dir = 'uploads/'; 

				  move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$new_name); 
			   }
			$arquivo = 'portifolio.xml';
			$xml = simplexml_load_file($arquivo);

			$nova_posicao = sizeof($xml->portifolio);
			
			$xml->portifolio[$nova_posicao]->nomeAct = $_POST["nomeAct"];
			$xml->portifolio[$nova_posicao]->linkAct = $_POST["linkAct"];
			$xml->portifolio[$nova_posicao]->data = $_POST["data"];
			$xml->portifolio[$nova_posicao]->arquivo = $new_name;
			
			$xml->asXML($arquivo);
			
			echo "<p>Cadastrado com sucesso!</p>";
		?>
	</body>
</html>
