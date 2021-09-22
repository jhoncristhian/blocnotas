<?php 
if (isset($_POST['register'])) {
	if (strlen($_POST['comentario']) > 1) {
		$fi = fopen("archivo.txt","a")
		or die("problemas al crear archivo");
		$date = new DateTime();
		$mostrar = $date->format('d-m-Y H:i:s');
		fwrite($fi, $mostrar);
		fwrite($fi, "\n");
		fwrite($fi, $_POST['comentario']);
		fwrite($fi, "\n");
		fwrite($fi, "-------------------\n");
		fclose($fi);
		echo "data sent";
		//echo "datos guardados";
		?> <a href="./">return</a> <?php
	} else {
		//echo "ingrese los campos :(";
		echo "in progress... :)";
		?> <a href="./">return</a> <?php
	}
}

?>
