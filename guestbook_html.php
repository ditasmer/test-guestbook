<?php

//ini vars
$comentario = '';
$nombre = '';
$fecha = '';
$registro = '';
$mensaje = '';
	//comprobamos que exise Enviar cuando cargamos la página por primera vez mediante POST
if(isset($_POST['enviar'])){

	//si existe, leemos y evaluamos nombre
	$nombre = trim($_POST['nombre']);
	//si existe, leemos y evaluamos comentario
	$comentario = trim($_POST['comentario']);
	$fecha = date("j-n-y");
	//validar try catch datos
	try{
		if($nombre == ''){
			throw new Exception("Nombre obligatorio", 1);
		}
		if($comentario == ''){
			throw new Exception("Comentario obligatorio", 1);
		}
		$mensaje = '';
		$registro = "$nombre escribió el $fecha:<br>$comentario<br><br>";

		//abrir fichero
		$fichero = fopen('files/guestbook.txt', 'a+');
		//escribir en fichero
		fwrite($fichero, $registro);
	
	} catch(Exception $e){
		//tratamiento de errores
		$mensaje = $e->getMessage();

	}
	

}

?>
<html>
<head>
	<title>libro visitas</title>
	<meta charset='UTF-8'>
	<style type="text/css">
		div {
			width:700px; background: white; margin:auto; border:1px solid black; padding:20px; border-radius:10px;
		}
		textarea {
			width:300px; height:100px
		}
	</style>
</head>
<body>
	<center><h3>Escritura en ficheros</h3></center>
	<div>
		<!--zona de mensajes-->
		<span><?=$mensaje?></span>
		<form method="post" action="#">
			<input type="text" name="nombre" placeholder="nombre" required /><br><br>
			<textarea name="comentario"></textarea><br><br>
			
			<input type="submit" name="enviar" value="Enviar" />
		</form>
		<h3>Comentarios: </h3>
		<?=$registro;?>
	</div>	
</body>
</html>