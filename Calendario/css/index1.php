<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aerolines Presidente</title>
    <link href="css/metro.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/metro.js"></script>

</head>
	<h1>Aerolinea Presidente</h1>
	<div>
		<form  role ="form"  method="post" action="buscarVuelo.php" method="post">
			<label class="input-control radio small-check" name="idaYvuelta">
				<input type="radio">
				<span class="check"></span>
				<span class="caption">Ida y Vuelta</span>
			</label>
			<label class="input-control radio small-check"  name="ida">
				<input type="radio">
				<span class="check"></span>
				<span class="caption">Sólo ida</span>
			</label>
			<br>
			<label>Origen:</label>
			<div class="input-control select">
				<select name="origen">
					<option>Bogota</option>
					<option>Cali</option>
					<option>Medellin</option>
				</select>
			</div>
			<label>Destino:</label>
			<div class="input-control select">
				<select name="destino">
					<option>Bogota</option>
					<option>Cali</option>
					<option>Medellin</option>
				</select>
			</div>
			<br>
			<div class="input-control text" id="datepicker">
				<input type="text">
				<button class="button"><span class="mif-calendar"></span></button>
			</div>
			<br>
			<input class="button rounded" type="submit" value="Buscar">
		</form>
	</div>
	<script>
		$(function(){
			$("#datepicker").datepicker();
		});
	</script>

<body>
</body>
</html>