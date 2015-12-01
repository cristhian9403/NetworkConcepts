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
		<div class="input-group" STYLE="position:relative; top:10px; left:390px;" >
		  <span class="input-group-btn">
		  	<form action="buscador/buscar.html" align="right" class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()">
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
             				       <li class="active"><small>Capitulo 2</small></li>	
                 		</section>
             </div>
		
		<br>
		<br>
		

		<div STYLE="position:relative; top:-40px; left:50px; width:1100px;" >
						
					<div class="col-sm-6" STYLE="left:-65px; width:550px;" >
									
						<div id="Layer1" style="width:550px; height:340px; overflow:scroll;">
							<div class="panel panel-default" >
								<div class="panel-body" style="text-align: justify;" >
										 <h3 align="center"> <font color="#000080" ><b>2.Comunicacion a través de la Red</b></h3></font>
										
										<br>
										<h4 align="justify"> <font color="#000080" ><b>¿Qué es la  Comunicación?</b></h4></font>
										 
										
										 <br>
											El término comunicación procede del latín communicare que significa “hacer a otro partícipe de lo que uno tiene”.
											La comunicación es la acción de comunicar o comunicarse, se entiende como el proceso por el que se trasmite y recibe una información.

										<br>
										<br>
											La comunicación en nuestra vida cotidiana tiene diferentes formas y existe en muchos entornos. 
											Tenemos diferentes expectativas según si estamos conversando por Internet o participando de una entrevista de
											trabajo. Cada situación tiene su comportamiento y estilo correspondiente.
										<br>
										<br>
											La comunicación entre individuos está destinada a ser exitosa cuando el significado del mensaje comprendido por
											el receptor coincide con el significado del emisor.
										<br>
										<br>
										<h4 align="justify"> <font color="#000080" ><b>Establecimiento de reglas</b></h4></font>
										
										<br>
										Antes de comenzar a comunicarnos, establecemos reglas o acuerdos que rigen la conversación. Estas reglas o protocolos 
										deben respetarse para que el mensaje se envíe y comprenda correctamente. Algunos de los protocolos que rigen con éxito 
										las comunicaciones humanas son:
										<br>
										<br>
										<ul type="disk">
										
											<li>emisor y receptor identificados,</li>
											<li>método de comunicación consensuado (cara a cara, teléfono, carta, fotografía),</li>
											<li>idioma y gramática comunes,</li>
											<li>velocidad y puntualidad en la entrega, y</li>
											<li>requisitos de confirmación o acuse de recibo.</li>
										
										</ul>
										
												
												<br>
												Las reglas de comunicación pueden variar según el contexto. Si un mensaje transmite un hecho o concepto importante,
												se necesita una confirmación de que el mensaje se recibió y comprendió correctamente. Los mensajes menos importantes 
												pueden no requerir acuse de recibo por parte del receptor.
												<br>
												
												<br>
												Las reglas de comunicación pueden variar según el contexto. Si un mensaje transmite un hecho o concepto importante, 
												se necesita una confirmación de que el mensaje se recibió y comprendió correctamente. Los mensajes menos importantes
												pueden no requerir acuse de recibo por parte del receptor. 
												<br>
												
												<br>
												Las técnicas utilizadas en las comunicaciones de red comparten estos fundamentos con las conversaciones humanas. Se presuponen 
												algunas reglas debido a que muchos de los protocolos de comunicación humana son implícitos y están arraigados en nuestra cultura. 
												Al establecer las redes de datos, es necesario ser mucho más explícito sobre la forma en que se realizan y juzgan con éxito las 
												comunicaciones.
												<br>
												
												<br>
												Poder comunicarse en forma confiable con todos en todas partes es de vital importancia para nuestra vida personal y comercial.
												Para respaldar el envío inmediato de los millones de mensajes que se intercambian entre las personas de todo el mundo, confiamos 
												en una Web de redes interconectadas. Estas redes de información o datos varían en tamaño y capacidad, pero todas las redes tienen
												cuatro elementos básicos en común:
												<br>
												
												<br>
												<ul type="disk">
												
													<li>reglas y acuerdos para regular cómo se envían, redireccionan, reciben e interpretan los mensajes,</li>
													<li>los mensajes o unidades de información que viajan de un dispositivo a otro,</li>
													<li>una forma de interconectar esos dispositivos, un medio que puede transportar los mensajes de un dispositivo a otro, y</li>
													<li>los dispositivos de la red que cambian mensajes entre sí.</li>
													
												
												</ul>
												
												
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
									<img src="imagenes/comunicacion.jpg" title="Comunacion a Traves de la Red">			
								</div>
							</div>	
				
						</div>
		</div>
			<br>
			 	
		
		
			
		<div class="col-md-12" STYLE=" left:-17px; width:1132px;  top:-190px;  margin-bottom: -100px;" >	
	    
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
			<nav class="navbar navbar-default "  >
		
		
  <ul class="pager" >
    <li class="previous" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a class="zoom sobre img-circle"  href="capitulo1.php" ><span aria-hidden="false"><img src="imagenes/left1.png"></span></a></li>
    <li class="next" onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()" href="capitulo2.1.php"><span aria-hidden="false"><img src="imagenes/right1.png"></span></a></li>
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