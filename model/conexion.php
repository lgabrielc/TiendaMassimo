<?php
class conexion
{
	protected function conectar()
	{
		$a =mysqli_connect('localhost','root','12345678','restaurante');
		// mysqli_select_db('sistema');
		return $a;
	}
	protected function desConectar()
	{
		mysqli_close($this->conectar());
	}
}
?>
