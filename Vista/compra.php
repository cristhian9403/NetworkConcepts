<!DOCTYPE html>
<html id="cuerpo">
<head>
	<title>Compra de tiquetes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script src="js/jquery.js"></script>
	<script src="../js/letra.js"></script>
	<script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="../css/estilo.css" rel="stylesheet">
</head>

<BODY background="imagenes/cielo10.jpg">

	<nav  class = "navbar navbar-default navbar-static-top" role="navigation" >
		<div  class= "container.fixed">

			<a>
				<img style="max-width:400px; margin-top: -35px;background-color:#F0FFFF;"
				src="imagenes/logotipo.png" width="1050px"/>
				

			</a>
			
		<p align=right> Estas en: Comprar tiquete</p>



		</div>
	</nav>
	<br>
						<div class="col-xs-6 col-xs-offset-3 col-md-9 col-md-offset-1">
							<a  onClick="accesibiliza()" class="btn">Contraste</a>
							<a href="javascript:decreaseFontSize();" class="btn">Disminuir el Tamano A-</a> 
							<a href="javascript:increaseFontSize();" class="btn">Aumentar el Tamano A+</a>
							
						</div>
						<br><br>

	<div class="col-xs-12 .col-sm-6 .col-md-8">
		<br>
		
		<h1><p align=center><font color="#000080"><b>PROCESO DE COMPRA</b></font> </h1>
		<br>
	</div>
	

	<?php
	include_once "../Modelo/ConsultaM.php";
	if(isset($_POST["ComprarVuelo"])){
		$oVuelos = new ConsultaM();
		$resultadoRegreso = null;

		if(isset($_POST["compraRegreso"])){
			$resultadoRegreso = $oVuelos->CompraVuelos($_POST["compraRegreso"]);
		}

		$resultadoIda = $oVuelos->CompraVuelos($_POST["compraIda"]);

		$datos = array();
		$datosRegreso = array();
		$tmp=null;  //Serializar el arreglo.
		$tmp=null;  //Codificar URL.
		$tmp2=null;  //Serializar el arreglo.
		$tmp2=null;  //Codificar URL.
		$precio1 = 0;
		$precio2 = 0;
		$tiquetes = $_POST["tiquetes"];

		while ($fila = mysql_fetch_row($resultadoIda)) {
			$datos[] = $fila;  //cada elemento de $datos va a ser una fila del resultado;
		}
		$tmp=serialize($datos);  //Serializar el arreglo.
		$tmp=urlencode($tmp);  //Codificar URL.
		if(isset($_POST["compraRegreso"])){
			while ($fila = mysql_fetch_row($resultadoRegreso)) {
			$datosRegreso[] = $fila;  //cada elemento de $datos va a ser una fila del resultado;
		}
			$tmp2=serialize($datosRegreso);  //Serializar el arreglo.
			$tmp2=urlencode($tmp2);  //Codificar URL.
		}

	}
	?>
		<div class="col-xs-6 col-xs-offset-3 col-md-9 col-md-offset-1">
		<BR>
			<h2> <span class="glyphicon glyphicon-plane"></span> <font color="#000080">Vuelo de ida</font> </h2>
			<br>
		</div>

		<div class="col-xs-8 col-xs-offset-5 col-md-10 col-md-offset-1">
			
			<table class="table table-bordered">

				<tr class="info">
					<th><center>ID</center></th>
					<th><center>Origen</center></th>
					<th><center>Destino</center></th>
					<th><center>F. Ida</center></th>
					<th><center>H. ida</center></th>
					<th><center>H. Llegada</center></th>
					<th><center>Precio</center></th>
				</tr>

				<?php	foreach ($datos as $data):?>

					<tr>
						<td><center><?php echo $data[0];?></center></td>
						<td><center><?php echo $data[1];?></center></td>
						<td><center><?php echo $data[2];?></center></td>
						<td><center><?php echo $data[3];?></center></td>
						<td><center><?php echo $data[4];?></center></td>
						<td><center><?php echo $data[5];?></center></td>
						<td><center><?php echo $data[6];?></center></td>

					</tr>
					<?php $precio1 = str_replace(".", "", substr($data[6], 1));  endforeach; ?>
				</table>
				<br>
			</div>
			<?php if($resultadoRegreso != null){ ?>
			<br>
			<div class="col-xs-6 col-xs-offset-3 col-md-9 col-md-offset-1">
		
			<h2> <span class="glyphicon glyphicon-plane"></span> <font color="#000080">Vuelo de Regreso</font> </h2>
			<br>
			
		</div>
			<div class="col-xs-8 col-xs-offset-5 col-md-10 col-md-offset-1">
			
				<table class="table table-bordered">
					
					<tr class="info">
						<th><center>ID</center></th>
						<th><center>Origen</center></th>
						<th><center>Destino</center></th>
						<th><center>F. Ida</center></th>
						<th><center>H. ida</center></th>
						<th><center>H. Llegada</center></th>
						<th><center>Precio</center></th>
					</tr>

					<?php	foreach ($datosRegreso as $data):?>

						<tr>
							<td><center><?php echo $data[0];?></center></td>
							<td><center><?php echo $data[1];?></center></td>
							<td><center><?php echo $data[2];?></center></td>
							<td><center><?php echo $data[3];?></center></td>
							<td><center><?php echo $data[4];?></center></td>
							<td><center><?php echo $data[5];?></center></td>
							<td><center><?php echo $data[6];?></center></td>
						</tr>
						<?php $precio2 = str_replace(".", "", substr($data[6], 1)); endforeach; ?>
					</table>
				</div>

				<?php } ?>
				<form  role ="form"  method="get" action="generador.php"  enctype="application/x-www-form-urlencoded">
					<div class="container">
						<div class="col-xs-10 col-xs-offfset-4 col-md-10 col-md-offset-2">
							<div class="panel panel-default">
								<br>
								
								<p align=center>Tenga presente que para completar el proceso de compra, debe diligenciar los siguientes datos</p>
							</div>

							<div class="table-responsive">
								<div class="panel panel-default">
									<div class="panel-heading"><h3> <span class="glyphicon glyphicon-user"></span> <font color="#000080">Informacion personal</font> </h3></div>
									<div class="panel-body">

										<div class='col-sm-6'>
											<label>Nombre(s) </label>
											<br>
											<input placeholder="Escriba aqui su Nombre" name='Nombre' type='text' required/>
										</div>

										<div class='col-sm-6'>

											<label>Apellido(s) </label>
											<br>
											<input placeholder="Escriba aqui su Apellido" name='Apellido' type='text' required/>
										</div>



										<div class='col-sm-6'>
											<br>
											<label>Telefono </label>
											<br>
											<input placeholder="Escriba aqui su Telefono" name='Telefono' type='text' required/>
										</div>

										<div class='col-sm-6'>
											<br>
											<label>Correo Electronico</label>
											<br>
											<input placeholder="Escriba aqui su e-mail" name='Correo' type='text'required/>
										</div>

										<div class='col-sm-6'>
											<br>
											<label>Banco</label>
											<br>
											<select name="Banco">
												<option value="Colmena">Colmena</option>
												<option value="BBVA">BBVA</option>
												<option value="Bancolombia">Bancolombia</option>
											</select>
										</div>

										<div class='col-sm-6'>
											<br>
											<label>Tarjeta de Credito </label>
											<br>
											<input placeholder="Escriba aqui su Tarjeta de Credito" name='Tarjeta' type='text' required/>
										</div>

									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<br>
								<p align=center> si presentas inconvenientes al comprar voletos comuticate al numero 018000930930</p>
							</div>
						</div>
					</div>
					<br>

					<input type="hidden" name="precio" value=<?php echo ($precio2+$precio1)*$tiquetes;?>>
					<input type="hidden" name="tiquetes" value=<?php echo $tiquetes?>>
					<input type="hidden" name="ida" value=<?php echo $tmp?>>
					<?php if($resultadoRegreso != null){ ?>
					<input type="hidden" name="vuelta" value=<?php echo $tmp2?>>
					<?php }?>

					<div class="row">
						<div class="col-xs-4 col-xs-offset-2 col-md-2 col-md-offset-2">
							<a class="btn btn-warning btn-lg" href="../index.php" role="button">Nueva busqueda</a>
						</div>
						<div class="col-xs-5 col-xs-offset-2 col-md-2 col-md-offset-4">
							<button type="submit" name="continuar" class="btn btn-primary btn-lg btn-block" value="envia-POST">Continuar</button>
						</div>
					</div>
				</form>

				<br>

			   	<script>
					accesibilidad();
				</script>
			</body>
			</html>