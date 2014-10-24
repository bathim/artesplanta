<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="bootstrap.css">
</head>
<body>
	<br><br>
	<form action="verify.php" method="post" class="table-bordered col-xs-3 well">
		<div class="form-group"><label for="nombre">Nombre: </label><input class="form-control" type="text" name="nombre" id="nombre" required placeholder="Tu nombre" /></div>
		<div class="form-group"><label for="email">Email: </label><input class="form-control" type="email" name="email" id="email" required placeholder="tucorreo@gmail.com" /></div>
		<div class="form-group"><label for="telefono">Telefono:</label><input class="form-control" type="text" name="telefono" id="telefono" required placeholder="telefono: 7777777" /></div>
		<div class="form-group"><label for="mensaje">Mensaje: </label><textarea class="form-control" required name="mensaje" id="mensaje" placeholder="Tu mensaje aqui" ></textarea></div>
		<div class="form-field"><label>Confirme que es un ser humano</label>
<script type="text/javascript">
  var RecaptchaOptions = {"theme": "clean"};
</script>
<script type="text/javascript" src="//www.google.com/recaptcha/api/challenge?k=6LdmnPwSAAAAAJc2yH5mW0_9bGrSnRJJSGTddxoT&amp;lang="></script>
<noscript>
  <iframe src="//www.google.com/recaptcha/api/noscript?k=6LdmnPwSAAAAAJc2yH5mW0_9bGrSnRJJSGTddxoT" height="300" width="500" style="border:none;"></iframe><br/>
  <textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
  <input type="hidden" name="recaptcha_response_field" value="manual_challenge"/></noscript>
</div>
		<input type="submit" value="enviar" class="btn btn-danger btn-lg col-md-offset-5"> 
	</form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<script src='//www.google.com/recaptcha/api.js'></script>
</html>