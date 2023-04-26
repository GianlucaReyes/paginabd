<!doctype html>
<html lang="pt-BR">

<head>
	<meta charset="utf-8" />
	<title>Proyecto Integrador 1A</title>
	<link rel="stylesheet" href="css/dropzone.min.css">
</head>

<body>
	<center>
	<h1>Pagina Web BD</h1>
	</center>
	<form id="myDrop" class="dropzone" action="upload.php">
		<input type="file" name="file">
	</form>
	<br>
	<i><b>Nota: </b>Debes de seleccionar tu archivo excel obligatoriamente.</i>
	<?php
        include_once('conexion.php');
    ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/dropzone.min.js"></script>
	<script src="js/dropzone.options.js"></script>
</body>

</html>