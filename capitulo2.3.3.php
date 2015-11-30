<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" id="cuerpo">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NetworkConcepts</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/jquery.js"></script>
	<script src="js/letra.js"></script>
	<script src="js/sonidos.js"></script>
	
	<link href="css/estilo.css" rel="stylesheet">
	<link href="css/carrousell.css" rel="stylesheet" type="text/css">
	
    <script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="css/estiloZoom.css" rel="stylesheet" type="text/css">

	

	<script src="../js/accesibilidad.js"></script>
	<link href="../css de paginas/accesibilidad.css" rel="stylesheet">

	
	<title>NetworkConcepts</title>
	
	<script>
	 function deshabilita(){
		document.getElementById('FechaRegreso').disabled = true;
	}

	function habilita(){
		document.getElementById('FechaRegreso').disabled = false;
	}
	</script>
  

</head>

	<body background="imagenes/net.jpg">
	<div STYLE="position:absolute; top:20px; left:130px; width:1100px;">
	
		<nav  class = "navbar navbar-default navbar-static-top" role="navigation" > 
						<div  class= "container.fixed"> 
							
									<img style=" margin-top: -1px; "
									src="imagenes/bannner.png"  /> 
								<br>	
						</div> 
		</nav>
		
	    
				
				
		<div STYLE="position:relative; top:10px; left:-14px; width:1050px;">
		
		<div class="col-lg-6">
			<a onClick="accesibiliza()" class="btn">Contraste</a>
			<a href="javascript:decreaseFontSize();" class="btn">Disminuir el Tamano A-</a> 
			<a href="javascript:increaseFontSize();" class="btn">Aumentar el Tamano A+</a>
		
		</div>	
		</div>	
		
	<div class="col-lg-3"> 
		<div class="input-group" STYLE="position:relative; top:10px; left:315px;" >
		  <input type="text" class="form-control" placeholder="Buscar..." size="200px">
		  <span class="input-group-btn">
		  	<form action="buscador/buscar.html">
			<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Ir</button>
			</form>
		  </span>
		</div><!-- /input-group -->
		</div>
		
		<br>
		<br>
		

		<div STYLE="position:relative; top:1.8px; left:50px; width:1100px;" >
						
					<div class="col-sm-6" STYLE="left:-65px; width:550px;" >
									
						<div id="Layer1" style="width:550px; height:340px; overflow:scroll;">
							<div class="panel panel-default" >
							<div class="panel-body" style="text-align: justify;" >
							 <h3 align="center"> <font color="#000080" ><b>2.3.3 Medios de Red</b></h3></font>
							 <br>
								La comunicación a través de una red es transportada por un medio. El medio proporciona el canal por el cual viaja 
								el mensaje desde el origen hasta el destino. 
							<br>
							<br>
								Las redes modernas utilizan principalmente tres tipos de medios para interconectar los dispositivos y proporcionar 
								la ruta por la cual pueden transmitirse los datos. Estos medios son:
							<br>
							<br>
                            <ul type="disk">
								<li>hilos metálicos dentro de los cables,</li>
								<li>fibras de vidrio o plásticas (cable de fibra óptica), y</li>
								<li>transmisión inalámbrica.</li>
							</ul>
							<br>
							
							    La codificación de señal que se debe realizar para que el mensaje sea transmitido es diferente para cada tipo de medio.
								En los hilos metálicos, los datos se codifican dentro de impulsos eléctricos que coinciden con patrones específicos. 
								Las transmisiones por fibra óptica dependen de pulsos de luz, dentro de intervalos de luz visible o infrarroja. En las
								transmisiones inalámbricas, los patrones de ondas electromagnéticas muestran los distintos valores de bits. 
							<br>
							<br>	
								Los diferentes tipos de medios de red tienen diferentes características y beneficios. No todos los medios de red tienen 
								las mismas características ni son adecuados para el mismo fin. Los criterios para elegir un medio de red son:
							<br>
							<br>	
							 <ul type="disk">
								<li>La distancia en la cual el medio puede transportar exitosamente una señal,</li>
								<li>El ambiente en el cual se instalará el medio,</li>
								<li>La cantidad de datos y la velocidad a la que se deben transmitir, y</li>
								<li>El costo del medio y de la instalación.</li>
							</ul>

								
							</div>
						   </div>
					    </div>
					</div>
								
			<div class="col-sm-6" >
				<div class="row">
					<div class="col-md-6" STYLE="left:-17px;">						
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/medios.png" data-lightbox="galeria" data-title="Medios de Red"><img src="imagenes/medios.png"  title="Medios de Red" class="img-thumbnail"  /></a>					
				   </div>
								
					<div class="col-md-6 " STYLE="left:-35px; height:150px;">					
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/cobre.jpg" data-lightbox="galeria" data-title="Medios de Cobre"><img src="imagenes/cobre.jpg" title="Medios de Cobre" class="img-thumbnail"   /></a>												
					</div>	
					
					<div class="col-md-6 " STYLE="left:-290px; top:24px;">								
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/fibra.jpg" data-lightbox="galeria" data-title="Medios de Fibra Óptica"><img src="imagenes/fibra.jpg" title="Medios de Fibra Óptica"  class="img-thumbnail"  /></a>							
					</div>	

					<div class="col-md-6 " STYLE="left:240px; top:-140px;">		
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/inalambrico.jpg" data-lightbox="galeria" data-title="Medios Inalámbricos"><img src="imagenes/inalambrico.jpg"  title="Medios Inalámbricos" class="img-thumbnail" /></a>							
					</div>	
				</div>
				<br>
				
			</div>
			<br>
			 	
		</div>		

	<div class="col-md-12" STYLE=" left:-17px; width:1132px;  top:-150px;  margin-bottom: -100px;" >	
	
		<nav class="navbar navbar-default "  >
		
		
  <ul class="pager" >
    <li class="previous" ><a href="#" ><span aria-hidden="false"><img src="imagenes/left1.png"></span></a></li>
    <li class="next"><a href="#"><span aria-hidden="false"><img src="imagenes/right1.png"></span></a></li>
	<li class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a href="#"><img src="imagenes/dictionary.png"><span aria-hidden="true"><font color="#000080" > Diccionario</font></span></a></li>
	<li><a href="#"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" > Laboratorio</font></span></a></li>
	<li><a target="_blank" href="https://www.dropbox.com/s/98ds8r8zq29rh3z/Cisco_Packet_Tracer_6.1_for_Windows.exe?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" >Simulador</font></span></a></li>
	<li><a href="principal.php"><img src="imagenes/home.png"><span aria-hidden="true"><font color="#000080" > Inicio</font></span></a></li>
  </ul>
  
  
</nav>

		
	</div>	
	
	</div>	

			
			
			
			
	<script src="js/lightbox.js"></script>	
	</body>
</html>