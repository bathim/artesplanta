<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body style="background:transparent">
	<!--<br><br>-->
	<form action="contact.php" method="post" role="form" class="table-bordered col-xs-12 well" style="background:transparent">
		<div class="form-group"><label for="name">Nombre: </label><input class="form-control" type="text" name="name" id="name" required placeholder="Tu nombre" /></div>
		<div class="form-group"><label for="email">Email: </label><input class="form-control" type="email" name="email" id="email" required placeholder="tucorreo@gmail.com" /></div>
		<div class="form-group"><label for="subject">Asunto:</label><input class="form-control" type="text" name="subject" id="subject" required placeholder="Asunto" /></div>
		<div class="form-group"><label for="message">Mensaje: </label><textarea class="form-control" required name="message" id="message" placeholder="Tu mensaje aqui" ></textarea></div>
		<div class="form-field"><label>Confirme que es un ser humano</label>
			<script type="text/javascript">
			var RecaptchaOptions = {"theme": "white"};</script>
		    <script type="text/javascript" src="//www.google.com/recaptcha/api/challenge?k=6Ld7ufwSAAAAAJQVEcBdwcP8dsWKd4zIUWjDaBJ5&amp;lang="></script>
		    <noscript>
		    	<iframe src="//www.google.com/recaptcha/api/noscript?k=6Ld7ufwSAAAAAJQVEcBdwcP8dsWKd4zIUWjDaBJ5" height="300" width="400" style="border:none;"></iframe><br/>
		    	<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
		    	<input type="hidden" name="recaptcha_response_field" value="manual_challenge"/></noscript>
		</div>
		<input type="submit" value="enviar" class="btn btn-success btn-lg col-md-offset-5"> 
	</form><!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
</body>
<script src='//www.google.com/recaptcha/api.js'></script>
</html>