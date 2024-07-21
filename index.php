<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<b> </br>
<b> </br>
<h3>Componente front-end del Proyecto formativo y proyectos de clase (listas de chequeo GA7-220501096-AA4-EV03)</h3>
<h3>Ficha: 2675810 </h3>
<body>
    <form method="post">
    	<h1>Presentado por: Juan David Gutierrez Herrea </h1>
		<input type="number" name="cedula" placeholder="ingresar numero cedula">
    	<input type="text" name="primer_nombre" placeholder="ingresar primer nombre">
		<input type="text" name="segundo_nombre" placeholder="ingresar segundo nombre">
		<input type="text" name="apellido" placeholder="ingresar apellidos">
    	<input type="text" name="direccion" placeholder="ingresar direccion">
		<input type="number" name="tel" placeholder="ingresar telefono">
		<input type="text" name="ciudad" placeholder="ingresar ciudad">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registro.php");
		include ("mostrar.php");
        ?>
</body>
</html>