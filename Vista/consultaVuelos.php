<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" id="cuerpo">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="../js/letra.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link href="../css/estilo.css" rel="stylesheet">
<title>Aerolines AeroExpress</title>
  
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body background="cielo10.jpg" >

		
						<nav  class = "navbar navbar-default navbar-static-top" role="navigation" > 
							<div  class= "container.fixed"> 
									<a> 
										<img style="max-width:400px; margin-top: -35px;background-color:#F0FFFF;"
										src="imagenes/logotipo.png" width="1050px"/> 
									</a> 
									
									<p align=right> Estas en: consulta vuelos</p>

								
								
							</div> 
					</nav>
					<br>
									<div class="col-md-offset-2">
										<a  onClick="accesibiliza()" class="btn">Contraste</a>
										<a href="javascript:decreaseFontSize();" class="btn">Disminuir el Tamano A-</a> 
										<a href="javascript:increaseFontSize();" class="btn">Aumentar el Tamano A+</a>
										
									</div>
									<br>
					<br>
<script>
function cambiarTh() {

   var th = document.getElementsByTagName('th');
   for(i=0;i<th.length;i++) {

     th[i].style.background = document.getElementById('background-tabla').value;
}
}

</script>

<?php
	$vuelos = $_GET['lista'];			
	$tmp = stripslashes($vuelos); 
	$tmp = urldecode($tmp); 
	$tmp = unserialize($tmp);
	
	$vuelosRegreso = null;			
	$tmp2 = null; 
	$tmp2 = null; 
	$tmp2 = null;
	
	if(isset($_GET['regreso'])){
		$vuelosRegreso = $_GET['regreso'];			
		$tmp2 = stripslashes($vuelosRegreso); 
		$tmp2 = urldecode($tmp2); 
		$tmp2 = unserialize($tmp2);
	}
	
?>	
<div class="container">


			
			  <div class="table-responsive">
				<div class="panel panel-default col-md-offset-2">
					<!-- Default panel contents -->
					<div class="table-responsive ">
			  <div class="panel panel-default">
			  <div class="panel-heading" id="cabecera"><h1> <span class="glyphicon glyphicon-plane"></span> <font color="#000080">Selecciona los vuelos</font> </h1></div>
			  <div class="panel-body">
			  <p>
			  <div class="col-xs-12 .col-sm-6 .col-md-8">
				<h2><span class=</span><font color="#000080">Trayecto de Ida</font></h2>
					</div>
					<br>
					<br>
					<br>
					<div class="col-sm-4"><h4><b>Lugar de Origen: <?php echo $_GET['Origen'];?></b></h4></div>
			  <div class="col-sm-4"><h4><b>Lugar de Destino: <?php echo $_GET['Destino'];?></b></h4></div> 
			  <div class="col-sm-4"><h4><b>Pasajeros: <?php echo $_GET['adultos'];?></b></h4></div>
				 </p>
			  
			  
			  
			   

			 </div> 
			<br>
  
	<div class="table-responsive">
	<form role="form" method="post" action="compra.php" method="post" enctype="application/x-www-form-urlencoded">
		<table class="table table-bordered">
			
				<tr class="info">
					<th><center>ID</center></th>
					<th><center>Origen</center></th>
					<th><center>Destino</center></th>	
					<th><center>F. Ida</center></th>				
					<th><center>H. ida</center></th>
					<th><center>H. Llegada</center></th>
					<th><center>F. Regreso</center></th>
					<th><center>Precio</center></th>
					<th><center>Comprar</center></th>
				</tr>
					   
			<?php	foreach ($tmp as $data):?>
						   
			<tr>
				<td><center><?php echo $data[0];?></center></td>
				<td><center><?php echo $data[1];?></center></td>
				<td><center><?php echo $data[2];?></center></td>
				<td><center><?php echo $data[3];?></center></td>
				<td><center><?php echo $data[4];?></center></td>			
				<td><center><?php echo $data[5];?></center></td>
				<td><center><?php echo $data[7];?></center></td>
				<td><center><?php echo $data[6];?></center></td>
				<td><center><input type="radio" name="compraIda" value=<?php echo $data[8];?> checked/></center></td>
				
			</tr>
			<?php  endforeach; ?>		
		</table>	
		<br>
		
	 
	<?php if(isset($_GET['regreso'])){ ?>
		<div class="col-xs-12 .col-sm-6 .col-md-8">
			<h2> <span class=   </span><font color="#000080">Trayecto de Regreso</font> </h2> 
				</div>
				<br>
				<br>
				<br>					
				<div class="col-sm-4"><h4><b>Lugar de Origen: <?php echo $_GET['Destino'];?></b></h4></div>
				<div class="col-sm-4"><h4><b>Lugar de Destino: <?php echo $_GET['Origen'];?></b></h4></div> 
				<div class="col-sm-4"><h4><b>Pasajeros: <?php echo $_GET['adultos'];?></b></h4></div>
								
						
	
	 </div>
	 <br>
	 
		<div class="table-responsive">
		<table class="table table-bordered">
			
				<tr class="info">
					<th><center>ID</center></th>
					<th><center>Origen</center></th>
					<th><center>Destino</center></th>	
					<th><center>F. Ida</center></th>				
					<th><center>H. ida</center></th>
					<th><center>H. Llegada</center></th>
					<th><center>F. Regreso</center></th>
					<th><center>Precio</center></th>
					<th><center>Comprar</center></th>
				</tr>	
			
			
			<?php if($tmp2!=null){
					foreach ($tmp2 as $data):?>
						   
			<tr>
				<td><center><?php echo $data[0];?></center></td>
				<td><center><?php echo $data[1];?></center></td>
				<td><center><?php echo $data[2];?></center></td>
				<td><center><?php echo $data[3];?></center></td>
				<td><center><?php echo $data[4];?></center></td>			
				<td><center><?php echo $data[5];?></center></td>
				<td><center><?php echo $data[7];?></center></td>
				<td><center><?php echo $data[6];?></center></td>
				<td><center><input type="radio" name="compraRegreso" value=<?php echo $data[8];?> checked/></center></td>
				
			</tr>
			<?php  endforeach;} ?>
			
			
			
				
		</table>
		</div>
		</div>
		<?php } ?>
		
		<div class="fixed">
			<br>
			<div class="col-xs-4">
			
				<a class="btn btn-warning btn-lg" href="../index.php" role="button">Nueva busqueda</a>
			</div>
			
			<input type="hidden" name="tiquetes" value=<?php echo $_GET['adultos']?>>
			
			<div class="col-xs-5 col-xs-offset-2 col-md-3 col-md-offset-5">
				<button type="submit" class="btn btn-primary btn-lg btn-block" name="ComprarVuelo">Comprar</button>
			
			</div>
			
		</div>
	</form>
	
	 
   </div>
   <br>
 </div>
</div>
</div>

   	<script>
		accesibilidad();
	</script>

	</body>
</html>