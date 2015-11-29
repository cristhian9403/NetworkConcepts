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
			<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Ir</button>
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
							 <h3 align="center"> <font color="#000080" ><b>8. Capa Física del Modelo OSI</b></h3></font>
							 <br>
								<h3 align="justify"> <font color="#000080" ><b>	Definición</b></h3></font>
							<br>
							La capa física de OSI es aquella que proporciona los medios de transporte para los bits que conforman la trama de la capa de 
							Enlace de datos a través de los medios de red. Esta capa acepta una trama completa desde la capa de Enlace de 
							datos y lo codifica como una secuencia de señales que se transmiten en los medios locales. Un dispositivo final 
							o un dispositivo intermedio recibe los bits codificados que componen una trama.El envío de tramas a través de 
							medios de transmisión requiere los siguientes elementos de la capa física: 
							<br>
							<br>
							<ul type="disk">
							<li>Medios físicos y conectores asociados.</li>
							<li>Una representación de los bits en los medios.</li>
							<li>Codificación de los datos y de la información de control.</li>
							<li>Sistema de circuitos del receptor y transmisor en los dispositivos de red.</li>
							</ul>
							<br>
							En este momento del proceso de comunicación, la capa de transporte ha segmentado los datos del usuario, 
							la capa de red los ha colocado en paquetes y luego la capa de enlace de datos los ha encapsulado como tramas.
							<br>
								<br>
								<h3 align="justify"> <font color="#000080" ><b>	Objetivo</b></h3></font>
							<br>
								El objetivo de la capa física es crear la señal óptica, eléctrica o de microondas que representa a los bits en
								cada trama. Luego, estas señales se envían por los medios una a la vez. Otra función de la capa física es la de 
								recuperar estas señales individuales desde los medios, restaurarlas para sus representaciones de bit y enviar 
								los bits hacia la capa de Enlace de datos como una trama completa. 
							<br>
							<br>	
							<h3 align="justify"> <font color="#000080" ><b>	Funcionamiento</b></h3></font>						
							<br>
                                Los medios no transportan la trama como una única entidad. Los medios transportan señales, una por vez, para representar 
								los bits que conforman la trama. Existen tres tipos básicos de medios de red en los cuales se representan los datos: 
							<br>
							<br>
							<ul type="disk">
								<li>Cable de cobre</li>
								<li>Fibra</li>
								<li>Inalámbrico</li>
                            </ul>
								<br>
								La presentación de los bits -es decir, el tipo de señal- depende del tipo de medio. Para los medios de cable de cobre, 
								las señales son patrones de pulsos eléctricos. Para los medios de fibra, las señales son patrones de luz. Para los 
								medios inalámbricos, las señales son patrones de transmisiones de radio.
								<br>
								<br>
								<h3 align="justify"> <font color="#000080" ><b>Identificación de una Trama</b></h3></font>
								<br>
								Cuando la capa física codifica los bits en señales para un medio específico, también debe distinguir dónde termina una 
								trama y dónde se inicia la próxima. De lo contrario, los dispositivos de los medios no reconocerían cuándo se ha 
								recibido exitosamente una trama. En tal caso, el dispositivo de destino sólo recibiría una secuencia de señales y no 
								sería capaz de reconstruir la trama correctamente. Como se describió en el capítulo anterior, indicar el comienzo de la 
								trama es a menudo una función de la capa de Enlace de datos. Sin embargo, en muchas tecnologías, la capa física puede 
								agregar sus propias señales para indicar el comienzo y el final de la trama.
								<br>
								<br>
								Para habilitar un dispositivo receptor a fin de reconocer de manera clara el límite de una trama, el dispositivo transmisor
								agrega señales para designar el comienzo y el final de una trama. Estas señales representan patrones específicos de bits que 
								sólo se utilizan para indicar el comienzo y el final de una trama.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Principios Fundamentales de la Capa física</b></h3></font>
							<br>
							Las tres funciones esenciales de la capa física son:
							<br>
							<br>
							<ul type="disk">
							<li>Los componentes físicos</li>
							<li>Codificación de datos</li>
							<li>Señalización</li>
							</ul>
							<br>
							Los elementos físicos son los dispositivos electrónicos de hardware, medios y conectores que transmiten y 
							transportan las señales para representar los bits.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Codificación </b></h3></font>
							<br>
							La codificación es un método utilizado para convertir un stream de bits de datos en un código predefinido. 
							Los códigos son grupos de bits utilizados para ofrecer un patrón predecible que pueda reconocer tanto el 
							emisor como el receptor. La utilización de patrones predecibles permite distinguir los bits de datos de 
							los bits de control y ofrece una mejor detección de errores en los medios. 
							<br>
							<br>
							Además de crear códigos para los datos, los métodos de codificación en la capa física también pueden 
							proporcionar códigos para control, como la identificación del comienzo y el final de una trama. El host
							que realiza la transmisión transmitirá el patrón específico de bits o un código para identificar el
							comienzo y el final de la trama. 
							<br>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Señalización</b></h3></font>
							<br>
							La capa física debe generar las señales inalámbricas, ópticas o eléctricas que representan el "1" y el "0"
							en los medios. El método de representación de bits se denomina método de señalización. Los estándares de 
							capa física deben definir qué tipo de señal representa un "1" y un "0". Esto puede ser tan sencillo como
							un cambio en el nivel de una señal eléctrica, un impulso óptico o un método de señalización más complejo.
							<br>
								<br>
								<h3 align="justify"> <font color="#000080" ><b>Estándares</b></h3></font>
								<br>
								
								La capa física consiste en un hardware creado por ingenieros en forma de conectores, medios y circuitos electrónicos.
								Por lo tanto, es necesario que las principales organizaciones especializadas en ingeniería eléctrica y en comunicaciones 
								definan los estándares que rigen este hardware. 
								<br>
								<br>
								Por el contrario, las operaciones y los protocolos de las capas superiores de OSI se llevan a cabo mediante un software 
								y están diseñados por especialistas informáticos e ingenieros de software. Como vimos en el capítulo anterior, el grupo 
								de trabajo de ingeniería de Internet (IETF) define los servicios y protocolos del conjunto TCP/IP en las RFC.
								<br>
								<br>
								Al igual que otras tecnologías asociadas con la capa de Enlace de datos, las tecnologías de la capa física se definen por 
								diferentes organizaciones, tales como:
								<br>
								<br>
							<ul type="disk">
							 <li>La Organización Internacional para la Estandarización (ISO).</li>
							 <li>El Instituto de Ingenieros Eléctricos y Electrónicos (IEEE).</li>
							 <li>El Instituto Nacional Estadounidense de Estándares (ANSI).</li> 
							 <li>La Unión Internacional de Telecomunicaciones (ITU) .</li>
							 <li>La Asociación de Industrias Electrónicas/Asociación de la Industria de las Telecomunicaciones (EIA/TIA).</li>
							 <li>Autoridades de las telecomunicaciones nacionales, como la Comisión Federal de Comunicaciones (FCC) en EE.UU.</li>
							</ul>
							<br>
							<h3 align="justify"> <font color="#000080" ><b>Hardware y tecnologías de la Capa física</b></h3></font>
							<br>
							Las tecnologías definidas por estas organizaciones incluyen cuatro áreas de estándares de la capa física:
							<ul type="disk">
							<li>Propiedades físicas y eléctricas de los medios</li> 
							<li>Propiedades mecánicas (materiales, dimensiones, diagrama de pines) de los conectores</li> 
							<li>Representación de los bits por medio de las señales (codificación)</li> 
							<li>Definición de las señales de la información de control</li>
							</ul>
								
							</div>
						   </div>
					    </div>
					</div>
								
			<div class="col-sm-6" >
				<div class="row">
					<div class="col-md-6" STYLE="left:-17px;">						
						<a href="imagenes/vivir.jpg" data-lightbox="galeria" data-title="Recursos Disponibles en Internet"><img src="imagenes/vivir.jpg" class="img-thumbnail"  /></a>					
				   </div>
								
					<div class="col-md-6 " STYLE="left:-35px; height:150px;">					
						<a href="imagenes/aprender.jpg" data-lightbox="galeria" data-title="Redes que Respaldan la Forma en que Aprendemos"><img src="imagenes/aprender.jpg"  class="img-thumbnail"   /></a>												
					</div>	
					
					<div class="col-md-6 " STYLE="left:-290px; top:24px;">								
						<a href="imagenes/trabajar.jpg" data-lightbox="galeria" data-title="Redes que Respaldan la Forma en que Trabajamos"><img src="imagenes/trabajar.jpg"  class="img-thumbnail"  /></a>							
					</div>	

					<div class="col-md-6 " STYLE="left:240px; top:-140px;">		
						<a href="imagenes/jugar.jpg" data-lightbox="galeria" data-title="Redes que Respaldan la Forma en que Trabajamos"><img src="imagenes/jugar.jpg"  class="img-thumbnail" /></a>							
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
	<li><a href="https://www.dropbox.com/s/otxjrs8maablpmx/ww.jpg?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" >Simulador</font></span></a></li>
	<li><a href="principal.php"><img src="imagenes/home.png"><span aria-hidden="true"><font color="#000080" > Inicio</font></span></a></li>
  </ul>
  
  
</nav>

		
	</div>	
	
	</div>	

			
			
			
			
	<script src="js/lightbox.js"></script>	
	</body>
</html>