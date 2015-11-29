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
									
						<div id="Layer1" style="width:550px; height:350px; overflow:scroll;">
							<div class="panel panel-default" >
							<div class="panel-body" style="text-align: justify;" >
							 <h3 align="center"> <font color="#000080" ><b>2.2 Comunicación de Mensajes</b></h3></font>
							 <br>
								En teoría, una comunicación simple, como un video musical o un e-mail puede enviarse a través de la red desde
								un origen hacia un destino como un stream de bits masivo y continuo. Si en realidad los mensajes se transmitieron 
								de esta manera, significará que ningún otro dispositivo podrá enviar o recibir mensajes en la misma red mientras 
								esta transferencia de datos está en progreso. Estos grandes streams de datos originarán retrasos importantes. 
								Además, si falló un enlace en la infraestructura de red interconectada durante la transmisión, se perderá todo el 
								mensaje y tendrá que retransmitirse por completo.

							<br>
							<br>
								Un mejor enfoque para enviar datos a través de la red es dividir los datos en partes más pequeñas y más manejables. 
								La división del stream de datos en partes más pequeñas se denomina segmentación. La segmentación de mensajes tiene 
								dos beneficios principales.
							<br>
							<br>
                                Primero, al enviar partes individuales más pequeñas del origen al destino, se pueden entrelazar diversas conversaciones
								en la red. El proceso que se utiliza para entrelazar las piezas de conversaciones separadas en la red se denomina 
								multiplexación. 
							<br>
							<br>
								Segundo, la segmentación puede aumentar la confiabilidad de las comunicaciones de red. No es necesario que las partes 
								separadas de cada mensaje sigan el mismo recorrido a través de la red desde el origen hasta el destino. Si una ruta en 
								particular se satura con el tráfico de datos o falla, las partes individuales del mensaje aún pueden direccionarse hacia
								el destino mediante los recorridos alternativos. Si parte del mensaje no logra llegar al destino, sólo se deben 
								retransmitir las partes faltantes.
							<br>
							<br>	
								La desventaja de utilizar segmentación y multiplexación para transmitir mensajes a través de la red es el nivel de 
								complejidad que se agrega al proceso. Supongamos que tuviera que enviar una carta de 100 páginas, pero en cada sobre 
								sólo cabe una. El proceso de escribir la dirección, etiquetar, enviar, recibir y abrir los cien sobres requerirá mucho 
								tiempo tanto para el remitente como para el destinatario. 
							<br>
							<br>
								En las comunicaciones de red, cada segmento del mensaje debe seguir un proceso similar para asegurar que llegue al 
								destino correcto y que puede volverse a ensamblar en el contenido del mensaje original. 
							<br>
							<br>
								Varios tipos de dispositivos en toda la red participan para asegurar que las partes del mensaje lleguen a los destinos de
								manera confiable. 
								
							</div>
						   </div>
					    </div>
					</div>
								
			<div class="col-sm-5" style="width:495px; " >
			
						<div class="row ">
						
							<div class="videogallery" >
								<a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/video_1448731249.mp4" title="Video: Comunicación de Mensajes"><img src="index_videolb/thumbnails/video_1448731249.png" alt="video_1448731249" /><span></span></a><span class="videolb"><a href="http://videolightbox.com">html video</a> by VideoLightBox.com v3.1</span>
							</div>
												
						    <div class="col-lg-12" style="top:8px; width:528px; left:-15px;" >
								 <div class="panel panel-info" style="text-align: justify; "    >
									<small><b>Descripción del Video:</b> este video muestra los procesos de Segmentación y Multiplexación que se dan en la comunicación.</small> 
								 </div>
						    </div>		<!-- Start VideoLightBox.com HEAD section 
									<video controls class="img-responsive" style="width:500px; " >
									<source src="video/ahora.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'  >
									
									</video>-->									
			            </div>	
			</div>
			<br>
			 	
		</div>		

	<div class="col-md-12" STYLE=" left:-17px; width:1132px;  top:4px;  margin-bottom: -100px;" >	
	
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
	<!-- End VideoLightBox.com BODY section -->
	</body>
</html>