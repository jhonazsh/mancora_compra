<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Máncora Compra | Ingresar</title>
	<link rel="stylesheet" type="text/css" href="estaticos/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estaticos/css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
</head>
<body>

	<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Máncora Compra</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Productos</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Remate</a></li>
        
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="ingresar.php">Ingresar</a></li>
        <li><a href="registrate.php">Registrarse</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container" style="margin-top:2em">	
	<div class="row">
		<div class="col-md-4 col-md-offset-4 box">
			<div class="text-center">
				<h3>Ingresar</h3>
			</div>

			<p> Ingresar con:</p>
			<div style="margin-bottom:1em">
				<a href="#" class="btn btn-primary btn-block">Facebook</a>
			</div>
			<div style="margin-bottom:1em">
				<a href="#" class="btn btn-info btn-block">Twitter</a>
			</div>
			<hr style="border-color:#ccc">
			<p>Ingresar con tu cuenta:</p>
			<form>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Correo</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Contraseña</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
			    <p style="margin-top:.5em">
			    	¿Olvidaste Tu Contraseña? <a href="#">Haz click Aquí!</a>
			    </p>
			  </div>
			  
			  <div class="form-group text-center">
			  	<button type="submit" class="btn btn-warning">Ingresar</button>
			  </div>
			</form>
			<div class="text-center">
				Si aún no estás Registrado, que esperas! <a href="registrate.php">Registrate</a>
			</div>
		</div>
	</div>
</div>




<footer class="container-fluid" style="margin-top:2em; background-color:#eee; border-top: 1px solid #ccc; padding:1em 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h4 class="text-center"><b>Acerca de Máncora Compra</b></h4>
				<p class="text-justify">
					Máncora Compra es una plataforma donde los usuarios ofrecen sus productos para vender, ya sean nuevos o usados pero en buenas condiciones.
				</p>
			</div>

			<div class="col-md-4">
				<h4 class="text-center"><b>Métodos de Pago</b></h4>
				<p class="text-justify">
					<ul>
						<li>
							Condiciones y Terminos de Pago.
						</li>
						<li>
							Medios Facilitadores de Pago.
						</li>
						<li>
							Facilidades de Pago.
						</li>
					</ul>
				</p>
			</div>

			<div class="col-md-4">
				<h4 class="text-center"><b>Contáctanos</b></h4>
				<p class="text-center">Para informarte más sobre nuestra plataforma...</p>
				<p class="text-justify">
					<span class="glyphicon glyphicon-earphone"></span> Llámanos al Celular: 985462536<br>
					<span class="glyphicon glyphicon-pushpin"></span> Ubícanos en: Av. Grau #545 - Máncora - Talara - Piura - Perú
				</p>
			</div>
		</div>
	</div>

	<div class="container" style="border-top: 1px solid #ccc; padding-top:1em; margin-top:1em">
		<div class="row">
			<div class="col-md-12">
				Desarrollador por ...
			</div>
		</div>
	</div>
	
</footer>

	
	


	<script type="text/javascript" src="estaticos/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="estaticos/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="estaticos/js/parallax.min.js"></script>
</body>
</html>