<?php
//formBienvenida.php
class formBienvenida
{
	public function formBienvenidaShow($listaPrivilegios)
	{
	/*
		labelPriv
		pathPriv
		ImagePriv
	*/
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>bienvenida</title>
	</head>
	
	<body>
		<?php
			$numero = count($listaPrivilegios);
			for($i = 0; $i < $numero; $i++)
			{
				?>
				<form action="<?php echo $listaPrivilegios[$i]['link']?>" method="post">
					<p><?php echo $listaPrivilegios[$i]['nombre']; ?></p>
					<p><?php echo $listaPrivilegios[$i]['apellidos']; ?></p>
					<p><?php echo $listaPrivilegios[$i]['estado']; ?></p>
					<input type="text" name="dni" value="<?php echo $listaPrivilegios[$i]['DNI']; ?>" id="" hidden>
					<input type="text" name="apellido" value="<?php echo $listaPrivilegios[$i]['apellidos']; ?>" id="" hidden>
					<input name="<?php echo $listaPrivilegios[$i]['idprivilegio'] ?>" type="submit" value="<?php echo $listaPrivilegios[$i]['nombre']?>" />
				</form>
				<br />
				<?php
			}
		?>

	<form action="../gestionModulo/emitir Comanda/controlVerificarAcceso.php" method="post">
		<input  name="4" type="submit" value="enviar">
	</form>
	</body>
	</html>
	<?php	
	}
}
?>
