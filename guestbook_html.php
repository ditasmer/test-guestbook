<?php
	
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
		<form method="post" action="#">
			<input type="text" name="nombre" placeholder="nombre" required /><br><br>
			<textarea name="comentarios"></textarea><br><br>
			
			<input type="submit" name="enviar" value="Enviar" />
		</form>
		<h3>Comentarios: </h3>
	</div>	
</body>
</html>