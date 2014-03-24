<?php

if (isset($_POST['envio']) and $_POST['envio']==1) {
	$adicional1 = array('{','}','…');
	$adicional2 = array('&#123;','&#125;','&hellip;');
	
	$texto = utf8_decode($_POST['c_texto']);
	$texto = stripslashes($texto);
	$texto = preg_replace ("/\\\\([^'])/e", '"&#" . ord("$1") . ";"', $texto);
	$texto = html_entity_decode($texto);
	$texto1 = htmlentities($texto, ENT_QUOTES);
	$texto1 = str_replace($adicional1,$adicional2,$texto1);
	$texto2 = htmlentities($texto1, ENT_QUOTES);
	
	
	
}
else {$texto2 = '';}


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Publicódigo</title>
<link href="ficheros/CODE_CSS_principal_v1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="ficheros/CODE_JS_comportamiento.js"></script>
</head>

<body>

<div id="contenedor">
	<div id="cabecera">
		<h1>Publicódigo</h1>
		<p>Pegar, convertir, cortar y publicar.</p>
	</div>
	<div id="cuerpo">
		<form action="index.php" method="post">
			<div class="interior-formulario">
			<p><label for="c_texto">
				<span class="indentado">Fragmento de código:</span>
				<textarea id="c_texto" name="c_texto" cols="100" rows="20"><?php echo preg_replace("/(&#)+/","&amp;#",$texto2); ?></textarea>
			</label><input type="submit" value="Convertir" /></p>
			</div>
			<input type="hidden" name="envio" value="1" />
		</form>
		<p id="referencia">Un servicio ofrecido por <a href="http://digitalpapyrus.eu">DigitalPapyrus.eu</a>. <a href="https://github.com/jervert/publicodigo">Fork me on Github</a><span class="indentado">.</span></p>
	</div>
	
	<div id="pie" class="indentado"><p>&copy; <?php echo date('Y'); ?> <a href="http://digitalpapyrus.eu">DigitalPapyrus.eu</a></p></div>
</div>

</body>
</html>