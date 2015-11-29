<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Aerolines Presidente</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<script src="js/jquery.js"></script>
	<link href="css/carrousell.css" rel="stylesheet" type="text/css">

	<script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">

	<title>AeroExpress</title>





</head>
<body>

	<nav  class = "navbar navbar-default navbar-static-top" role="navigation" >
		<div  class= "container-fluid">
			<div  class= "navbar-header page-scroll">
				<a  class= "navbar-brand" >
					<img style="max-width:400px; margin-top: -35px;"
					src="imagenes/logotipo.png" width="1050px"/>
				</a>
			</div>
		</div>
	</nav>

	<div class="col-md-1-1-1-1">
		<ul class="nav nav-tabs nav-justified" >
			<li role="presentation" class="active"><a href="#">Inicio</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					Servicios <b class="caret"></b>
				</a>
				<ul class="dropdown-menu">
					<li><a href="Itinerario.php">Consulta itinerarios</a></li>
					<li><a href="EstadodeVuelos.php">Consulta vuelos</a></li>
					<li><a href="#">Promociones</a></li>
				</ul>
			</li>

			<li role="presentation"><a href="perfil.php">Información Corporativa</a></li>
		</ul>
	</div>


	


	<br>
	<div class="col-md-6">
		<br>

			<form  role ="form"  method="post" action="buscarVuelo.php" method="post" enctype="application/x-www-form-urlencoded">
				<div class="container" style="background-color: rgba(245, 245, 245, 0.4);">
				<br>

				<div class="col-sm-6">

					<div class="radio" name="Opciones" id="Ida y Vuelta">
						<label><input type="radio" name="optradio" checked> Ida y Vuelta </label>

					</div>
				</div>

				<div class="col-sm-6">
					<div class="radio" name="Opciones1" id="Solo Ida">
						<label><input type="radio" name="optradio">Solo ida</label>

						<br>
					</div>
				</div>

				<div class="col-md-6">
					<label>Origen</label>
					<br>
					<select name="Origen">
						<option>Bogota</option>
						<option>Cali</option>
						<option>Medellin</option>
					</select>
				</div>

				<div class="col-md-6">

					<label>Destino</label>
					<br>
					<select name="Destino">
						<option>Bogota</option>
						<option>Cali</option>
						<option>Medellin</option>
					</select>
				</div>

				<br>
				<br>
				<br>

				<div class='col-sm-6'>
					<br>
					<label>Fecha Ida</label>
					<br>
					<input name='ida' type='date' />
				</div>



				<div class='col-sm-6'>
					<br>
					<label>Fecha Regreso</label>
					<input type='date'/>
				</div>

				<br>
				<div>
					<div class="col-md-6">
						<br>
						<label>Personas que viajan </label>
						<br>

						<select name="Adultos que Viajan">
							<option> 1 adulto</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
						</select>
					</div>

					<div class="col-md-6">
						<br>
						<br>
						<select name="clase">
							<option>Clase Economica</option>
						</select>
						<br>
					</div>

					<div  class="col-xs-5 .col-md-4">
					</div>

					<div class="col-xs-6 col-xs-offset-3 col-md-6 col-md-offset-3">
						<br>
						<button type="submit" name="Buscar" class="btn btn-default btn-lg active" value="envia-POST">Buscar Vuelos</button>
					</div>
				</div>

			</form>

	</div>
	
		<div=class="col-xs-6"
			<header>
				<div class="row">
					<div class="carrousell">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<div class="container">
								<div id="myCarousel" class="carousel slide" data-ride="carousel"></div>
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									<li data-target="#myCarousel" data-slide-to="1"></li>
									<li data-target="#myCarousel" data-slide-to="2"></li>
									<li data-target="#myCarousel" data-slide-to="3"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="imagenes/197.jpg" alt="Chania">
									</div>
									<div class="item">
										<img src="imagenes/204.jpg" alt="Chania">
									</div>
									<div class="item">
										<img src="imagenes/bogota.jpg" alt="Flower">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>


</body>
<br>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-6 col-md-6 col-md-offset-6"> <h5>Direccion: Calle 10 # 5-40</h5></div>
			<div class="col-xs-6 col-xs-offset-6 col-md-6 col-md-offset-6"> <h5>Telefono: 2230456</h5></div>
		</div>
	</div>
</footer>
</html>

