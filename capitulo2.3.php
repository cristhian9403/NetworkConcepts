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
	
	<link href="css/estilo.css" rel="stylesheet">
	<link href="css/carrousell.css" rel="stylesheet" type="text/css">
	
    <script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="css/estiloZoom.css" rel="stylesheet" type="text/css">

	
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
		  <span class="input-group-btn">
		  	<form action="buscador/buscar.html" align="right">
			<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>
			</form>
		  </span>
		</div><!-- /input-group -->
		</div>
			
			<div class="row">
                 		<section class="posts col-md-12" STYLE=" top:20px; left:1px;">
                 				<ol class="breadcrumb">
                 					<li>
             					       <a href="principal.php"><small>Inicio</small></a> 
             				       </li>
             				       <li class="active"><small>Capitulo 2.3</small></li>	
                 		</section>
             </div>
		
		<br>
		<br>
		

		<div STYLE="position:relative; top:-40px; left:50px; width:1100px;" >
						
					<div class="col-sm-6" STYLE="left:-65px; width:550px;" >
									
						<div id="Layer1" style="width:550px; height:340px; overflow:scroll;">
							<div class="panel panel-default" >
								<div class="panel-body" style="text-align: justify;" >
										 <h3 align="center"> <font color="#000080" ><b>2.3 Componentes de la red</b></h3></font>
										 
										<br>
											La ruta que toma un mensaje desde el origen hasta el destino puede ser tan sencilla 
											como un solo cable que conecta una computadora con otra o tan compleja como una red 
											que literalmente abarca el mundo. Esta infraestructura de red es la plataforma que respalda la red humana. 
											Proporciona el canal estable y confiable por el cual se producen las comunicaciones.

										<br>
										<br>
										<h4 align="justify"> <font color="#000080" ><b>Los Dispositivos y los medios</b></h4></font>
										
										<br>
											son los elementos físicos o hardware de la red. El hardware es generalmente el componente 
											visible de la plataforma de red, como una computadora portátil o personal, un switch, o el cableado que se 
											usa para conectar estos dispositivos. A veces, puede que algunos componentes no sean visibles. En el caso de los 
											medios inalámbricos, los mensajes se transmiten a través del aire utilizando radio frecuencia invisible u ondas infrarrojas. 
										<br>
										<br>
										<h4 align="justify"> <font color="#000080" ><b>Los servicios y procesos</b></h4></font>
										
										<br>
											son los programas de comunicación, denominados software, que se ejecutan en los dispositivos conectados a la red.
											Un servicio de red proporciona información en respuesta a una solicitud. Los servicios incluyen una gran cantidad de aplicaciones 
											de red comunes que utilizan las personas a diario, como los servicios de e-mail hosting y los servicios de Web hosting. Los procesos
											proporcionan la funcionalidad que direcciona y traslada mensajes a través de la red. Los procesos son menos obvios para nosotros, pero
											son críticos para el funcionamiento de las redes.
										<br>
										<br>
										En la imagen se muestran algunos dispositivos comunes que generalmente originan mensajes que constituyen nuestra comunicación. Esto incluye
										diversos tipos de equipos (se muestran íconos de una computadora de escritorio y de una portátil), servidores y teléfonos IP. En las redes de 
										área local, estos dispositivos generalmente se conectan a través de medios LAN (con cables o inalámbricos).
										<br>
										<br>
										<h4 align="justify"> <font color="#000080" ><b>Los símbolos genéricos se muestran para:</b></h4></font>
								
										<br>
										<ul type="disk">
										
											<li>Switch: el dispositivo más utilizado para interconectar redes de área local,</li>
											<li>Firewall: proporciona seguridad a las redes,</li>
											<li>Router: ayuda a direccionar mensajes mientras viajan a través de una red,</li>
											<li>Router inalámbrico: un tipo específico de router que generalmente se encuentra en redes domésticas,</li>
											<li>Nube: se utiliza para resumir un grupo de dispositivos de red, sus detalles pueden no ser importantes en este análisis,</li>
											<li>Enlace serial: una forma de interconexión WAN (Red de área extensa), representada por la línea en forma de rayo.</li>
										</ul>
										<br>
										<h4 align="justify"> <font color="#000080" ><b>Redes de Área Local LAN</b></h4></font>
												
												<br>
												Las infraestructuras de red pueden variar en gran medida en términos de:
												<br>
												
												<ul type="disk">
										
													<li>el tamaño del área cubierta,</li>
													<li>la cantidad de usuarios conectados, y</li>
													<li>la cantidad y tipos de servicios disponibles.</li>
													
										        </ul>
												<br>
												Una red individual generalmente cubre una única área geográfica y proporciona servicios y aplicaciones a personas dentro de 
												una estructura organizacional común, como una empresa, un campus o una región. Este tipo de red se denomina Red de área local (LAN).
												Una LAN por lo general está administrada por una organización única. El control administrativo que rige las políticas de seguridad y 
												control de acceso está implementado en el nivel de red.
												<br>
												<br>
												<h4 align="justify"> <font color="#000080" ><b>Redes de Área Amplia</b></h4></font>
												<br>
												Cuando una compañía o una organización tiene ubicaciones separadas por grandes distancias geográficas, es posible que deba utilizar
												un proveedor de servicio de telecomunicaciones (TSP) para interconectar las LAN en las distintas ubicaciones. Los proveedores de servicios
												de telecomunicaciones operan grandes redes regionales que pueden abarcar largas distancias. Tradicionalmente, los TSP transportaban las
												comunicaciones de voz y de datos en redes separadas. Cada vez más, estos proveedores ofrecen a sus subscriptores servicios de red convergente 
												de información. 
												<br>
												
												<br>
												Por lo general, las organizaciones individuales alquilan las conexiones a través de una red de proveedores de servicios de telecomunicaciones.
												Estas redes que conectan las LAN en ubicaciones separadas geográficamente se conocen como Redes de área amplia (WAN). Aunque la organización mantiene 
												todas las políticas y la administración de las LAN en ambos extremos de la conexión, las políticas dentro de la red del proveedor del servicio de 
												comunicaciones son controladas por el TSP. 
												<br>
												
												<br>
												Las WAN utilizan dispositivos de red diseñados específicamente para realizar las interconexiones entre las LAN. Dada la importancia de estos dispositivos 
												para la red, la configuración, instalación y mantenimiento de éstos son aptitudes complementarias de la función de una red de la organización.
													
												
												</ul>
												
												<br>
												
												<br>
												La estandarización de los distintos elementos de la red permite el funcionamiento conjunto de equipos y dispositivos creados por 
												diferentes compañías. Los expertos en diversas tecnologías pueden contribuir con las mejores ideas para desarrollar una red eficiente 
												sin tener en cuenta la marca o el fabricante del equipo.
												<br>
												
												<br>
										
								</div>
								
							</div>
						   
					    </div>
					</div>
					
					
						<div class="col-sm-6" >
							<div class="row">
								<div class="col-md-6" STYLE="left:-40px;">		
									<img src="imagenes/componentes.jpg" title="Componentes de Red">			
								</div>
							</div>	
				
						</div>
		</div>
			<br>
			 	
		
		
			
		<div class="col-md-12" STYLE=" left:-17px; width:1132px;  top:-195px;  margin-bottom: -100px;" >	
	    
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
			<nav class="navbar navbar-default "  >
		
		
			  <ul class="pager" >
				<li class="previous"><a class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()" href="capitulo2.2.php" ><span aria-hidden="false"><img src="imagenes/left1.png"></span></a></li>
				<li class="next"><a class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()" href="capitulo2.3.1.php"><span aria-hidden="false"><img src="imagenes/right1.png"></span></a></li>
				<li class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a target="_blank" href="diccionario.pdf"><img src="imagenes/dictionary.png"><span aria-hidden="true"><font color="#000080" > Diccionario</font></span></a></li>
				<li class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a target="_blank" href="https://www.dropbox.com/s/98ds8r8zq29rh3z/Cisco_Packet_Tracer_6.1_for_Windows.exe?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" >Simulador</font></span></a></li>
				<li class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a href="principal.php"><img src="imagenes/home.png"><span aria-hidden="true"><font color="#000080" > Inicio</font></span></a></li>
			  </ul>
			  
  
</nav>

		
		</div>	
	
		
	</div>	

			
			
			
	<script src="js/lightbox.js"></script>	
</body>
</html>