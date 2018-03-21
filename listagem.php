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
			
			$arquivo = 'portifolio.xml';
			$xml = simplexml_load_file($arquivo);
			echo "<table border=\"1\">";
				echo "<tr>";
					echo "<th>Atividade</th>";
					echo "<th>Data</th>";
					echo "<th>Download</th>";
				echo "</tr>";
				
				foreach($xml->portifolio as $portifolio){
					echo "<tr>";
						echo "<td><a href=\"$portifolio->linkAct\">$portifolio->nomeAct</a></td>";
						echo "<td>$portifolio->data</td>";
						echo "<td><a href='uploads/$portifolio->arquivo'>$portifolio->arquivo</a></td>";
					echo "</tr>";
				}
			echo "</table>";
		?>
	</body>
</html>
