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
	
	
	
	
	<meta name="keywords" content="VideoLightBox, LightBox, Video Gallery, video html, html video player" />
		<meta name="description" content="VideoLightBox Gallery created with VideoLightBox, a free wizard program that helps you easily generate beautiful Lightbox-style web video galleries" />
		<link rel="shortcut icon" href="favicon.ico" />
		
		<!-- Start VideoLightBox.com HEAD section -->
		<link rel="stylesheet" href="index_videolb/videolightbox.css" type="text/css" />
		
			<link rel="stylesheet" type="text/css" href="index_videolb/overlay-minimal.css"/>
			<script src="index_videolb/jquery.js" type="text/javascript"></script>
			<script src="index_videolb/swfobject.js" type="text/javascript"></script>

	
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
									
						<div id="Layer1" style="width:550px; height:415px; overflow:scroll;">
							<div class="panel panel-default" >
							<div class="panel-body" style="text-align: justify;" >
							 <h3 align="center"> <font color="#000080" ><b> 5. Capa de Red del Modelo OSI </b></h3></font>
							 <br>
							 <h3 align="justify"> <font color="#000080" ><b>Definición</b></h3></font>
							<br>
							 La Capa de red o Capa 3 de OSI es aquella que provee servicios para intercambiar secciones de datos individuales a través de 
							 la red  entre dispositivos finales identificados.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Funcionalidad</b></h3></font>
							 <br>
							 Para realizar el transporte de datos de extremo a extremo la Capa 3 utiliza cuatro procesos básicos:
							 <br>
							<br>
							<ul type="disk">
							<li>Direccionamiento,</li>
							<li>Encapsulamiento,</li>
							<li>Enrutamiento , y</li>
							<li>Desencapsulamiento.</li>
							</ul>
							<br>
							
							<h3 align="justify"> <font color="#000080" ><b>Direccionamiento</b></h3></font>
							<br>
							Primero, la Capa de red debe proveer un mecanismo para direccionar estos dispositivos finales. Si las secciones individuales
							de datos deben dirigirse a un dispositivo final, este dispositivo debe tener una dirección única. En una red IPv4, cuando se 
							agrega esta dirección a un dispositivo, al dispositivo se lo denomina host. 
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Encapsulación</b></h3></font>
							<br>
							Segundo, la capa de Red debe proveer encapsulación. Los dispositivos no deben ser identificados sólo con una dirección; las 
							secciones individuales, las PDU de la capa de Red, deben, además, contener estas direcciones. Durante el proceso de 
							encapsulación, la Capa 3 recibe la PDU de la Capa 4 y agrega un encabezado o etiqueta de Capa 3 para crear la PDU de la Capa 3.
							Cuando nos referimos a la capa de Red, denominamos paquete a esta PDU. Cuando se crea un paquete, el encabezado debe contener, 
							entre otra información, la dirección del host hacia el cual se lo está enviando. A esta dirección se la conoce como dirección 
							de destino. El encabezado de la Capa 3 también contiene la dirección del host de origen. A esta dirección se la llama dirección 
							de origen.
							<br>
							<br>
							Después de que la Capa de red completa el proceso de encapsulación, el paquete es enviado a la capa de enlace de datos que ha 
							de prepararse para el transporte a través de los medios.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Enrutamiento</b></h3></font>
							<br>
							Luego, la capa de red debe proveer los servicios para dirigir estos paquetes a su host destino. Los host de origen y destino no 
							siempre están conectados a la misma red. En realidad, el paquete podría recorrer muchas redes diferentes. A lo largo de la ruta, 
							cada paquete debe ser guiado a través de la red para que llegue a su destino final. Los dispositivos intermediarios que conectan 
							las redes son los routers. La función del router es seleccionar las rutas y dirigir paquetes hacia su destino. A este proceso se 
							lo conoce como enrutamiento.
							<br>
							<br>
							Durante el enrutamiento a través de una internetwork, el paquete puede recorrer muchos dispositivos intermediarios. A cada ruta 
							que toma un paquete para llegar al próximo dispositivo se la llama salto. A medida que el paquete es enviado, su contenido 
							(la PDU de la Capa de transporte) permanece intacto hasta que llega al host destino.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Desencapsulamiento</b></h3></font>
							<br>
							Finalmente, el paquete llega al host destino y es procesado en la Capa 3. El host examina la dirección de destino para verificar
							que el paquete fue direccionado a ese dispositivo. Si la dirección es correcta, el paquete es desencapsulado por la capa de Red y 
							la PDU de la Capa 4 contenida en el paquete pasa hasta el servicio adecuado en la capa de Transporte. 
							<br>
							<br>
							A diferencia de la capa de Transporte (Capa 4 de OSI), que administra el transporte de datos entre los procesos que se ejecutan 
							en cada host final, los protocolos especifican la estructura y el procesamiento del paquete utilizados para llevar los datos 
							desde un host hasta otro host. Operar ignorando los datos de aplicación llevados en cada paquete permite a la capa de Red 
							llevar paquetes para múltiples tipos de comunicaciones entre hosts múltiples.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Protocolos de capa de Red</b></h3></font>
							<br>
							Los protocolos implementados en la capa de Red que llevan datos del usuario son:
							<br>
							<br>
							<ul type="disk">
							<li>versión 4 del Protocolo de Internet (IPv4),</li>
							<li>versión 6 del Protocolo de Internet (IPv6),</li>
							<li>intetercambio Novell de paquetes de internetwork (IPX),</li>
							<li>AppleTalk, y</li>
							<li>servicio de red sin conexión (CLNS/DECNet).</li>
							</ul>
							<br>
							El Protocolo de Internet (IPv4 y IPv6) es el protocolo de transporte de datos de la capa 3 más ampliamene utilizado y será el
							tema de este curso. Los demás protocolos no serán abordados en profundidad.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>IPv4</b></h3></font>
							<br>
							Como se muestra en la figura llamada Protocolo IPv4, los servicios de capa de Red implementados por el conjunto de protocolos TCP/IP son el Protocolo 
							de Internet (IP). La versión 4 de IP (IPv4) es la versión de IP más ampliamente utilizada. Es el único protocolo de Capa 3 que 
							se utiliza para llevar datos de usuario a través de Internet.
							<br>
							<br>
							El Protocolo de Internet fue diseñado como un protocolo con bajo costo. Provee sólo las funciones necesarias para enviar un 
							paquete desde un origen a un destino a través de un sistema interconectado de redes. El protocolo no fue diseñado para 
							rastrear ni administrar el flujo de paquetes. Estas funciones son realizadas por otros protocolos en otras capas.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Características básicas de IPv4:</b></h3></font>
							<br>
							<ul type="disk">
							<li><b>Sin conexión:</b> No establece conexión antes de enviar los paquetes de datos.</li>
							<li><b>Máximo esfuerzo (no confiable):</b>  No se usan encabezados para garantizar la entrega de paquetes.</li>
							<li><b>Medios independientes:</b>  Operan independientemente del medio que lleva los datos.</li>
							</ul>								
							</div>
						   </div>
					    </div>
					</div>
								
			<div class="col-sm-6" >
				<div class="row">
					<div class="col-md-6" STYLE="left:-17px;">						
						<a href="imagenes/R1.jpg" data-lightbox="galeria" data-title="Capa de Red"><img src="imagenes/R1.jpg" title="Capa de Red" class="img-thumbnail"  /></a>					
				   </div>
								
					<div class="col-md-6 " STYLE="left:-35px; height:150px;">					
						<a href="imagenes/R2.jpg" data-lightbox="galeria" data-title="IPv4"><img src="imagenes/R2.jpg" title="IPv4" class="img-thumbnail"   /></a>												
					</div>	
					
					
				</div>
				<br>
				<div class="col-sm-6" style=" left:-32px; top:-18px;">
				<div class="videogallery"  >
								<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/video_1448842238.mp4" title="Video: funcionamiento de la Capa de Red"><img src="index_videolb/thumbnails/video_1448842238.png" alt="capa_de_transporte" /><span></span></a><span class="videolb"><a href="http://videolightbox.com">html video</a> by VideoLightBox.com v3.1</span>
							</div>
			</div>
			
			<div class="col-lg-12" style="top:-10px; width:528px; left:-30px;" >
								 <div class="panel panel-info" style="text-align: justify; "    >
									<small><b>Descripción del Video:</b> este video muestra los procesos que utiliza la capa 3 para el intercambio de datos a traves de la red. </small> 
								 </div>
						    </div>	
			</div>
			<br>
			 	
		</div>		

	<div class="col-md-12" STYLE=" left:-17px; width:1132px;  top:-15px;  margin-bottom: -100px;" >	
	
		<nav class="navbar navbar-default "  >
		
		
  <ul class="pager" >
    <li class="previous"><a href="#"><span aria-hidden="false"><img src="imagenes/left1.png"></span></a></li>
    <li class="next"><a href="#"><span aria-hidden="false"><img src="imagenes/right1.png"></span></a></li>
	<li><a href="#"><img src="imagenes/dictionary.png"><span aria-hidden="true"><font color="#000080" > Diccionario</font></span></a></li>
	<li><a href="#"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" > Laboratorio</font></span></a></li>
	<li><a href="https://www.dropbox.com/s/otxjrs8maablpmx/ww.jpg?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" >Simulador</font></span></a></li>
	<li><a href="principal.php"><img src="imagenes/home.png"><span aria-hidden="true"><font color="#000080" > Inicio</font></span></a></li>
  </ul>
  
  
</nav>

		
	</div>	
	
	</div>	

			
			
			
			
	<script src="index_videolb/jquery.tools.min.js" type="text/javascript"></script>
	<script src="index_videolb/videolightbox.js" type="text/javascript"></script>
	<script src="js/lightbox.js"></script>	
	<!-- End VideoLightBox.com BODY section -->
	</body>
</html>