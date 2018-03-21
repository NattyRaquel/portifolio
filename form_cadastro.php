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
		?>
		<form enctype="multipart/form-data" method="post" action="cadastro.php">
			<fieldset>
				<label>Nome atividade: </label>
				<input type="text" name="nomeAct"/>
				<br/>
				<br/>
				<label>Link:</label>
				<input type="text" name="linkAct"/>
				<br/>
				<br/>
				<label>Data:</label>
				<input type="date" name="data" />
				<br/>
				<br/>
				<label>Arquivo:</label>
				<br/>
				<input type="file" name="arquivo" />
				<br/>
				<br/>
				<input type="submit" value="Enviar" class="botao"/>
				
			</fieldset>
		</form>
	</body>
</html>
