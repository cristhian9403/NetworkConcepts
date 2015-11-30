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
							 <h3 align="center"> <font color="#000080" ><b>9. Planificación y Cableado de Redes</b></h3></font>
							 <br>
								Antes de utilizar un teléfono IP, acceder a mensajería instantánea o realizar otras interacciones a través de una 
								red de datos, debemos conectar dispositivos intermediarios y finales mediante conexiones inalámbricas o de cable 
								para formar una red que funcione. Esta red será la que soporte nuestra comunicación en la red humana.
							<br>
							<br>
								Hasta esta etapa del curso, hemos considerado los servicios que una red de datos puede proporcionar a la red humana, 
								examinado las características de cada capa del modelo OSI y las operaciones de los protocolos TCP/IP,  observado en 
								detalle a Ethernet, una tecnología LAN universal. El siguiente paso es aprender cómo reunir todos estos elementos 
								para formar una red que funcione.
							<br>
							<br>
								<h3 align="justify"> <font color="#000080" ><b>	Factores de Selección de Dispositivos</b></h3></font>    
							<br>
								Cada LAN contará con un router que servirá de gateway para conectar la LAN a otras redes. Dentro de la LAN habrá uno 
								o más hubs o switches para conectar los dispositivos finales a la LAN.
							<br>
							<br>
								<h3 align="justify"> <font color="#000080" ><b>Dispositivos de internetwork</b></h3></font>
							
								<h3 align="justify"> <font color="#000080" ><b>Roters</b></h3></font> 
							
								Los routers son los dispositivos principales utilizados para interconectar redes. Cada puerto de un router se conecta 
								a una red diferente y realiza el enrutamiento de los paquetes entre las redes. Los routers tienen la capacidad de 
								dividir dominios de broadcast y dominios de colisiones.	También pueden utilizarse para interconectar redes que utilizan 
								diferentes tecnologías. Los routers pueden tener interfaces LAN y WAN. 
							<br>
							<br>	
								Las interfaces LAN del router permiten a los routers conectarse a los medios LAN. Para esto generalmente se utiliza un 
								cableado de UTP (Par trenzado no blindado), pero se pueden agregar módulos con fibra óptica. Según la serie o el modelo 
								del router, puede haber diferentes tipos de interfaces para la conexión del cableado WAN y LAN. 
							<br>
							<br>
								<h3 align="justify"> <font color="#000080" ><b>Hub</b></h3></font>
							<br>
								Un hub recibe una señal, la regenera y la envía a todos los puertos. El uso de hubs crea un bus lógico. Esto significa 
								que la LAN utiliza medios de acceso múltiple. Los puertos utilizan un método de ancho de banda compartido y a menudo 
								disminuyen su rendimiento en la LAN debido a las colisiones y a la recuperación. Si bien se pueden interconectar 
								múltiples hubs, éstos permanecen como un único dominio de colisiones.
							<br>
							<br>
								Los hubs son más económicos que los switches. Un hub generalmente se elige como dispositivo intermediario dentro de una 
								LAN muy pequeña que requiera requisitos de velocidad de transmisión (throughput) lenta o cuando los recursos económicos 
								sean limitados.
							<br>	
							<br>
								<h3 align="justify"> <font color="#000080" ><b>Switch</b></h3></font>
							<br>	
								Un switch recibe una trama y regenera cada bit de la trama en el puerto de destino adecuado. Este dispositivo se utiliza 
								para segmentar una red en múltiples dominios de colisiones. A diferencia del hub, un switch reduce las colisiones en una 
								LAN. Cada puerto del switch crea un dominio de colisiones individual. Esto crea una topología lógica punto a punto en 
								el dispositivo de cada puerto. Además, un switch proporciona ancho de banda dedicado en cada puerto y así aumenta el 
								rendimiento de una LAN. El switch de una LAN también puede utilizarse para interconectar segmentos de red de diferentes
								velocidades. 
							<br>
							<br>
								Generalmente, los switches se eligen para conectar dispositivos a una LAN. Si bien un switch es más costoso que un hub, 
								resulta económico al considerar su confiabilidad y rendimiento mejorados. 
							<br>
							<br>
								Existe una variedad de switches disponibles con distintas características que permiten la interconexión de múltiples 
								computadoras en el entorno empresarial típico de una LAN. Para cumplir con los requisitos de usuario, se debe planificar y 
								diseñar una LAN. La planificación asegura que se consideren debidamente todos los requisitos, factores de costo y opciones 
								de implementación.
							<br>
							<br>	
								Se deben considerar varios factores al seleccionar un dispositivo para una LAN particular. Estos factores incluyen,
								entre otros:
							<br>
							<br>
								<h3 align="justify"> <font color="#000080" ><b>Costo</b></h3></font>
							<br>	
								El costo de un switch se determina según sus capacidades y características. La capacidad del switch incluye el número 
								y los tipos de puertos disponibles además de la velocidad de conmutación. Otros factores que afectan el costo son las 
								capacidades de administración de red, las tecnologías de seguridad incorporadas y las tecnologías opcionales de 
								conmutación avanzadas.
							<br>
							<br>
								<h3 align="justify"> <font color="#000080" ><b>Velocidad y tipos de puertos/interfaces</b></h3></font>
							<br>	
								La necesidad de velocidad está siempre presente en un entorno LAN. Se encuentran disponibles computadoras más nuevas 
								con NIC incorporadas de 10/100/1000 Mbps. La selección de dispositivos de Capa 2 que puedan ajustarse a mayores 
								velocidades permite a la red evolucionar sin reemplazar los dispositivos centrales. 
							<br>
							<br>							
								Al seleccionar un switch, es fundamental la elección del número y tipo de puerto. Hágase las siguientes preguntas: 
							<br>
							<br>							
							<ul type="disk">
								<li>¿Usted compraría un switch con:</li>
								<li>Sólo los puertos suficientes para las necesidades actuales? </li>
								<li>Una combinación de velocidades UTP?</li>
								<li>Dos tipos de puerto, de UTP y de fibra?</li>
							</ul>
							<br>	
								Considere cuidadosamente cuántos puertos UTP se necesitarán y cuántos puertos de fibra se necesitarán. Del mismo modo,
								considere cuántos puertos necesitarán una capacidad de 1 Gbps y cuántos requerirán sólo anchos de banda de 10/100 Mbps. 
								Tenga en cuenta además cuándo necesitará más puertos.
							<br>
							<br>								
								<h3 align="justify"> <font color="#000080"><b>Posibilidad de expansión</b></h3></font>
							<br>	
								Los dispositivos de red, como los routers y switches, forman parte tanto de las configuraciones físicas modulares como 
								de las fijas. Las configuraciones fijas tienen un tipo y una cantidad específica de puertos o interfaces. Los 
								dispositivos modulares tienen ranuras de expansión que proporcionan la flexibilidad necesaria para agregar nuevos 
								módulos a medida que aumentan los requisitos. La mayoría de estos dispositivos incluyen una cantidad básica de puertos 
								fijos además de ranuras de expansión.
							<br>
							<br>
							<h3 align="justify"> <font color="#000080"><b>Interconexiones entre Dispositivos </b></h3></font>
							<br>
								Al planificar la instalación del cableado LAN, existen cuatro áreas físicas que se deben considerar:
							<br>
							<br>
							<ul type="disk">
								<li>Área de trabajo.</li>
								<li>Cuarto de telecomunicaciones, también denominado servicio de distribución.</li>
								<li>Cableado backbone, también denominado cableado vertical.</li>
								<li>Cableado de distribución, también denominado cableado horizontal.</li>
							</ul>
							<br>	
							<h3 align="justify"> <font color="#000080"><b>	Longitud total del cable</b></h3></font>
							<br>
							
								Para las instalaciones UTP, el estándar ANSI/TIA/EIA-568-B especifica que la longitud combinada total del cable que abarca
								las cuatro áreas enumeradas anteriormente se limita a una distancia máxima de 100 metros por canal. Este estándar establece 
								que se pueden utilizar hasta 5 metros de patch cable para interconectar los patch panels. Pueden utilizarse hasta 5 metros 
								de cable desde el punto de terminación del cableado en la pared hasta el teléfono o la computadora. 
							<br>
							<br>	
							<h3 align="justify"> <font color="#000080"><b>Áreas de trabajo</b></h3></font>
							<br>
								Las áreas de trabajo son las ubicaciones destinadas para los dispositivos finales utilizados por los usuarios individuales. 
								Cada área de trabajo tiene un mínimo de dos conectores que pueden utilizarse para conectar un dispositivo individual a la red. 
								Utilizamos patch cables para conectar dispositivos individuales a estos conectores de pared. El estándar EIA/TIA establece 
								que los patch cords de UTP utilizados para conectar dispositivos a los conectores de pared tienen una longitud máxima de 
								10 metros. 
							<br>
							<br>
								El cable de conexión directa es el patch cable de uso más común en el área de trabajo. Este tipo de cable se utiliza para
								conectar dispositivos finales, como computadoras, a una red. Cuando se coloca un hub o switch en el área de trabajo,
								generalmente se utiliza un cable de conexión cruzada para conectar el dispositivo al jack de pared. 
							<br>
							<br>	
							<h3 align="justify"> <font color="#000080"><b>Cuarto de telecomunicaciones</b></h3></font>
							<br>
								El cuarto de telecomunicaciones es el lugar donde se realizan las conexiones a los dispositivos intermediarios. Estos
								cuartos contienen dispositivos intermediarios (hubs, switches, routers y unidades de servicio de datos [DSU]) que 
								conectan la red. Estos dispositivos proporcionan transiciones entre el cableado backbone y el cableado horizontal. 
							<br>
							<br>
								Dentro del cuarto de telecomunicaciones, los patch cords realizan conexiones entre los patch panels, donde terminan los
								cables horizontales, y los dispositivos intermediarios. Los patch cables también interconectan estos dispositivos 
								intermediarios.
							<br>
							<br>
								Los estándares de la Asociación de Industrias Electrónicas y la Asociación de las Industrias de las Telecomunicaciones 
								(EIA/TIA) establecen dos tipos diferentes de patch cables de UTP. Uno de los tipos es el patch cord, con una longitud 
								de hasta 5 metros y se utiliza para interconectar el equipo y los patch panels en el cuarto de telecomunicaciones.
								Otro tipo de patch cable puede ser de hasta 5 metros de longitud y se utiliza para conectar dispositivos a un punto de 
								terminación en la pared.
							<br>
							<br>	
							<h3 align="justify"> <font color="#000080"><b>	Cableado horizontal</b></h3></font>
							<br>
								El cableado horizontal se refiere a los cables que conectan los cuartos de telecomunicaciones con las áreas de trabajo.
								La longitud máxima de cable desde el punto de terminación en el cuarto de telecomunicaciones hasta la terminación en la
								toma del área de trabajo no puede superar los 90 metros. Esta distancia máxima de cableado horizontal de 90 metros se 
								denomina enlace permanente porque está instalada en la estructura del edificio. Los medios horizontales se ejecutan desde 
								un patch panel en el cuarto de telecomunicaciones a un jack de pared en cada área de trabajo. Las conexiones a los 
								dispositivos se realizan con patch cables.
							<br>
							<br>	
							<h3 align="justify"> <font color="#000080"><b>	Cableado backbone</b></h3></font>
							<br>
								El cableado backbone se refiere al cableado utilizado para conectar los cuartos de telecomunicaciones a las salas de 
								equipamiento donde suelen ubicarse los servidores. El cableado backbone también interconecta múltiples cuartos de 
								telecomunicaciones en toda la instalación. A menudo, estos cables se enrutan fuera del edificio a la conexión WAN o ISP. 
							<br>
							<br>
								Los backbones, o cableado vertical, se utilizan para el tráfico agregado, como el tráfico de entrada o de salida de 
								Internet, y para el acceso a los recursos corporativos en una ubicación remota. Gran parte del tráfico desde varias 
								áreas de trabajo utilizará el cableado backbone para acceder a los recursos externos del área o la instalación. 
								Por lo tanto, los backbones generalmente requieren de medios de ancho de banda superiores como el cableado de fibra
								óptica. 
							<br>
							<br>
							<h3 align="justify"> <font color="#000080"><b>	Tipos de medios</b></h3></font>
							<br>
								Se deben considerar los diferentes tipos de medios al elegir los cables necesarios para realizar una conexión WAN o 
								LAN exitosa. Como ya mencionamos, existen diferentes implementaciones de la capa Física que admiten múltiples tipos 
								de medios:
							<br>	
							<br>
							<ul type="disk">
								<li>UTP (Categorías 5, 5e, 6 y 7).</li>
								<li>Fibra óptica.</li>
								<li>Inalámbrico.</li>
							</ul>
							<br>
								Cada tipo de medios tiene ventajas y desventajas. Algunos de los factores que se deben considerar son los siguientes: 
							<br>
							<br>
							<ul type="disk">
							<li>Longitud del cable: ¿El cable debe atravesar una habitación o extenderse desde un edificio hasta otro?</li>
							<li>Costo: ¿El presupuesto permite que se utilice un tipo de medios más costoso?</li>
							<li>Ancho de banda: ¿La tecnología utilizada con los medios ofrece un ancho de banda apropiado?</li>
							<li>Facilidad de instalación: ¿Tiene el equipo de implementación la capacidad de instalar el cable o es necesario contratar
								a un proveedor?</li>
							<li>Susceptibilidad a EMI/RFI: ¿Interferirá con la señal el entorno en el que estamos instalando el cable?</li>
							</ul>
							<br>	
							<h3 align="justify"> <font color="#000080"><b>	Realizacion de Conexiones LAN</b></h3></font>
								
							<h3 align="justify"> <font color="#000080"><b>	Cables UTP de conexión directa</b></h3></font>
							<br>
								Un cable de conexión directa tiene conectores en cada extremo y su terminación es idéntica conforme a los estándares 
								T568A o T568B.
							<br>
							<br>
								La identificación del estándar del cable utilizado le permite determinar si cuenta con el cable correcto para un 
								determinado trabajo. Más importante aún, es normal utilizar los mismos códigos de color en toda la LAN para lograr 
								consistencia en la documentación.
							<br>
							<br>
								Utilice cables directos para las siguientes conexiones:
							<br>
							<br>
							<ul type="disk">
							<li>Switch a puerto Ethernet del router</li>
							<li>Equipo a switch</li>
							<li>Equipo a hub </li>
							</ul>
							<br>
							<h3 align="justify"> <font color="#000080"><b>	Cables UTP de conexión cruzada</b></h3></font>
							<br>
								Para que los dos dispositivos se comuniquen a través de un cable directamente conectado entre los dos, el terminal 
								transmisor de uno de los dispositivos necesita conectarse al terminal receptor del otro dispositivo.
							<br>
							<br>
								Para alcanzar este tipo de conexión con un cable UTP, un extremo debe tener una terminación como diagrama de pin 
								EIA/TIA T568A y el otro, como T568B.
							<br>
							<br>
								En resumen, los cables de conexión cruzada conectan directamente los siguientes dispositivos en una LAN:
							<br>
							<br>
							<ul type="disk">
							<li>Switch a switch</li> 
							<li>Switch a hub</li>  
							<li>Hub a hub</li>  
							<li>Router a conexión del puerto Ethernet del router</li> 
							<li>Equipo a equipo</li>  
							<li>Equipo a puerto Ethernet del router</li> 
							</ul>
							<br>
							<h3 align="justify"> <font color="#000080"><b>	Desarrollo de un Esquema de Direccionamiento</b></h3></font>
							<br>
							Para desarrollar un esquema de direccionamiento para una red, comience por definir la cantidad total de hosts. 
							Considere cada dispositivo que requerirá una dirección IP, ahora y en el futuro.
							<br>
							<br>
							Algunos dispositivos finales que requieren una dirección IP son:
							<br>
							<br>
							<ul type="disk">
							<li>Equipos de usuarios.</li> 
							<li>Equipos de administradores.</li> 
							<li>Servidores.</li> 
							<li>Otros dispositivos finales, como impresoras, teléfonos IP y cámaras IP.</li> 
							</ul>
							<br>
							Entre los dispositivos de red que requieren una dirección IP se incluyen:
							<br>
							<br>
							<ul type="disk">
							<li>Interfaces LAN del Router.</li> 
							<li>Interfaces (serial) WAN del Router.</li> 
							</ul>
							<br>
							Entre los dispositivos de red que requieren una dirección IP para la administración se incluyen:
							<br>
							<br>
							<ul type="disk">
							<li>Switches.</li> 
							<li>Puntos de acceso inalámbrico.</li>
							</ul>
							<br>
							Una vez que se ha establecido la cantidad total de hosts (actuales y a futuro), considere el rango de direcciones 
							disponibles y dónde encajan en la dirección de red determinada.Luego, determine si todos los hosts formarán parte de la
							misma red o si toda la red se dividirá en subredes independientes.
								
							</div>
						   </div>
					    </div>
					</div>
								
			<div class="col-sm-6" >
				<div class="row">
					<div class="col-md-6" STYLE="left:-17px;">						
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/p1.jpg" data-lightbox="galeria" data-title="Planificación y Cableado de Redes"><img src="imagenes/p1.jpg" title="Planificación y Cableado de Redes" class="img-thumbnail"  /></a>					
				   </div>
								
					<div class="col-md-6 " STYLE="left:-35px; height:150px;">					
						<a  class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/p2.jpg" data-lightbox="galeria" data-title="Factores de Selección de Dispositivos"><img src="imagenes/p2.jpg" title="Factores de Selección de Dispositivos" class="img-thumbnail"   /></a>												
					</div>	
					
					<div class="col-md-6 " STYLE="left:-290px; top:24px;">								
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/p4.jpg" data-lightbox="galeria" data-title="Cable de Conexion Directa"><img src="imagenes/p4.jpg" title="Cable de Conexion Directa" class="img-thumbnail"  /></a>							
					</div>	

					<div class="col-md-6 " STYLE="left:240px; top:-140px;">		
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()"  href="imagenes/p3.jpg" data-lightbox="galeria" data-title="Cable de Conexión Cruzada"><img src="imagenes/p3.jpg" title="Cable de Conexión Cruzada" class="img-thumbnail" /></a>							
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