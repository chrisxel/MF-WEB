<?php

session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<h1>Bienvenido: $usuarioingresado </h1>";
}
else
{
	header('location: index.php');
}

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: index.php');
}
if(isset($_POST['btnregresar']))
{
	header('location: index1.html');
}
?>

<link rel="stylesheet" href="login.css">
<body>
<form method="POST">
<input type="submit" value="Cerrar sesión" name="btncerrar" />
</form>
<form method="POST">
<input type="submitt" value="pagina inicio" name="btnregresar" />
</form>
</body>

