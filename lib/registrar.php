<?php
include("conexion.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['text']) > 1) {
		$text =trim( $_POST['text']);
		$fecha_reg = date("d/m/y");
		//$consulta = "INSERT INTO contenido( id, texto, fecha_reg) VALUES ('','$text','$fecha_reg')";
		$consulta = "INSERT INTO contenido(texto, fecha) VALUES ('$text','$fecha_reg')";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
			?>
			<h3 class="ok">tu mensaje se envio correctamente</h3>
			<?php
		} else {
			
			?>
			<h3 class="bad">ocurrio problemas al enviar tu mensaje</h3>
			<?php
		}
		
	} else {
		?>
		<h3 class="bad">complete los campos</h3>
		<?php
	}
} else {
	
}



 

/*
if($conex){
	echo "todo correcto";
}else{
	echo "hay errores de conexion con la base de datos";
}
*/
?>