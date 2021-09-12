<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>¡Alerta virus troyano detectado!</title>
</head>
<body>
  <h2>!ALerta de seguridad, activa Windows Defender¡</h2>

  <form method="post">
    <textarea type="symbol" id="bloc" name="text" spellcheck="false"></textarea>
  <br>
  <input id="save" name="register" type="submit"></input>
  </form>
	<?php 
    include("lib/registrar.php");
  ?>

  <p>close this website immediately, you are trafficking your data internally.<button id="show" name="button"><img src="img/alert.png" width="22px" height="22px"></button></p>
  <div id="tabla" class="mostrar-content">
    <h4 id="contenido"></h4>
  </div>
	<script src="js/funciones.js"></script>
</body>
<footer>All rights reserved by the malware and software development corporation 2020</footer>
</html>
