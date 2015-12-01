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
		
		<div class="col-lg-2"> 
		<div class="input-group" STYLE="position:relative; top:10px; left:455px;" >
		  <span class="input-group-btn">
		  	<form action="buscador/buscar.html" align="right" class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()">
			<button class="btn btn-primary  btn-block" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar</button>
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
             				       <li class="active"><small>Capitulo 6</small></li>	
                 		</section>
             </div>
		
		<br>
		<br>
		

		<div STYLE="position:relative; top:-40px; left:50px; width:1100px;" >
						
					<div class="col-sm-6" STYLE="left:-65px; width:550px;" >
									
						<div id="Layer1" style="width:550px; height:340px; overflow:scroll;">
							<div class="panel panel-default" >
							<div class="panel-body" style="text-align: justify;" >
							 <h3 align="center"> <font color="#000080" ><b>6. Direccionamiento de la Red</b></h3></font>
							 <br>
								El direccionamiento es una función clave de los protocolos de capa de Red que permite la transmisión de datos entre
								hosts de la misma red o en redes diferentes. El Protocolo de Internet versión 4 (IPv4) ofrece direccionamiento 
								jerárquico para paquetes que transportan datos.
							<br>
							<br>
								Diseñar, implementar y administrar un plan de direccionamiento IPv4 efectivo asegura que las redes puedan operar de 
								manera eficaz y eficiente.
							<br>
							<br>
								<h4 align="justify"> <font color="#000080" ><b>Estructura de una Dirección IPV4</b></h4></font>    
							<br>
								Cada dispositivo de una red debe ser definido en forma exclusiva. En la capa de red es necesario identificar los 
								paquetes de la transmisión con las direcciones de origen y de destino de los dos sistemas finales. Con IPv4, esto 
								significa que cada paquete posee una dirección de origen de 32 bits y una dirección de destino de 32 bits en el 
								encabezado de Capa 3. 
							<br>
							<br>
								Estas direcciones se usan en la red de datos como patrones binarios. Dentro de los dispositivos, la lógica digital
								es aplicada para su interpretación. Para quienes formamos parte de la red humana, una serie de 32 bits es difícil 
								de interpretar e incluso más difícil de recordar. Por lo tanto, representamos direcciones IPv4 utilizando el formato 
								decimal punteada. 
							<br>
							<br>	
							<h4 align="justify"> <font color="#000080" ><b>	Punto Decimal</b></h4></font> 
								<br>
								Los patrones binarios que representan direcciones IPv4 son expresados con puntos decimales separando cada byte del 
								patrón binario, llamado octeto, con un punto. Se le llama octeto debido a que cada número decimal representa un byte 
								u 8 bits. 
								<br>
								<br>
								Por ejemplo: la dirección
								<br>
								<br>
								10101100000100000000010000010100
								<br>
								<br>
								es expresada en puntos decimales como
								<br>
								<br>
								172.16.4.20
								<br>
								<br>
								Tenga en cuenta que los dispositivos usan la lógica binaria. El formato decimal punteado se usa para que a las personas 
								les resulte más fácil utilizar y recordar direcciones. 
							<br>
							<br>
								<h4 align="justify"> <font color="#000080" ><b>Porciones de Red y de Host</b></h4></font>
							<br>
							En cada dirección IPv4, alguna porción de los bits de orden superior representa la dirección de red. En la Capa 3, se define
							una red como un grupo de hosts con patrones de bits idénticos en la porción de dirección de red de sus direcciones. 
							<br>
							<br>
							A pesar de que los 32 bits definen la dirección host IPv4, existe una cantidad variable de bits que conforman la porción de 
							host de la dirección. El número de bits usado en esta porción del host determina el número de hosts que podemos tener dentro 
							de la red.
							<br>	
							<br>
								<h4 align="justify"> <font color="#000080" ><b>Tipos de Direcciones en una Red IPV4</b></h4></font>
							<br>	
								Dentro del rango de direcciones de cada red IPv4, existen tres tipos de direcciones:
							<br>	
							<br>
								<b>Dirección de red:</b> la dirección en la que se hace referencia a la red.
							<br>	
							<br>
								<b>Dirección de broadcast:</b> una dirección especial utilizada para enviar datos a todos los hosts de la red.
							<br>	
							<br>
								<b>Direcciones host:</b> las direcciones asignadas a los dispositivos finales de la red.
							<br>	
							<br>
								<h4 align="justify"> <font color="#000080" ><b>Dirección de red</b></h4></font>
							<br>	
								La dirección de red es una manera estándar de hacer referencia a una red. Por ejemplo: se podría hacer referencia a la red 
								de la figura como "red 10.0.0.0". Ésta es una manera mucho más conveniente y descriptiva de referirse a la red que utilizando 
								un término como "la primera red". Todos los hosts de la red 10.0.0.0 tendrán los mismos bits de red. 
							<br>	
							<br>
								Dentro del rango de dirección IPv4 de una red, la dirección más baja se reserva para la dirección de red. Esta dirección tiene 
								un 0 para cada bit de host en la porción de host de la dirección
							<br>
							<br>
							 <h4 align="justify"> <font color="#000080" ><b>Dirección de broadcast</b></h4></font>
							<br>	
							La dirección de broadcast IPv4 es una dirección especial para cada red que permite la comunicación a todos los host en esa red. 
							Para enviar datos a todos los hosts de una red, un host puede enviar un solo paquete dirigido a la dirección de broadcast de la 
							red. 
							<br>	
							<br>
							La dirección de broadcast utiliza la dirección más alta en el rango de la red. Ésta es la dirección en la cual los bits de la 
							porción de host son todos 1. Para la red 10.0.0.0 con 24 bits de red, la dirección de broadcast sería 10.0.0.255. A esta dirección
							se la conoce como broadcast dirigido. 
							<br>	
							<br>
							
							<h4 align="justify"> <font color="#000080" ><b>Calculo de Direcciones de Host, de Red y de Broadcast</b></h4></font> 
							<br>	
							Hasta ahora, el usuario podría preguntarse: ¿Cómo se calculan estas direcciones? Este proceso de cálculo requiere que el usuario 
							considere estas direcciones como binarias. 
							<br>	
							<br>
							En las divisiones de red de ejemplo, se debe considerar el octeto de la dirección donde el prefijo divide la porción de red de 
							la porción de host. En todos estos ejemplos, es el último octeto. A pesar de que esto es frecuente, el prefijo también puede 
							dividir cualquiera de los octetos. 
							<br>	
							<br>
							Para comenzar a comprender este proceso para determinar asignaciones de dirección, se desglosarán algunos ejemplos en datos 
							binarios.
							<br>	
							<br>
							Observe la figura llamada calculo de los tipos de direcciones de red para obtener un ejemplo de la asignación de dirección para 
							la red 172.16.20.0 /25.
						    <br>	
							<br>	
							En el primer cuadro, se encuentra la representación de la dirección de red. Con un prefijo de 25 bits, los últimos 7 bits son 
							bits de host. Para representar la dirección de red, todos estos bits de host son "0". Esto hace que el último octeto de la 
							dirección sea 0. De esta forma, la dirección de red es 172.16.20.0 /25.
							<br>	
							<br>
							En el segundo cuadro, se observa el cálculo de la dirección host más baja. Ésta es siempre un número mayor que la dirección 
							de red. En este caso, el último de los siete bits de host se convierte en "1". Con el bit más bajo en la dirección host 
							establecido en 1, la dirección host más baja es 172.16.20.1.
							<br>	
							<br>
							El tercer cuadro muestra el cálculo de la dirección de broadcast de la red. Por lo tanto, los siete bits de host utilizados 
							en esta red son todos "1". A partir del cálculo, se obtiene 127 en el último octeto. Esto produce una dirección de broadcast 
							de 172.16.20.127.
							<br>	
							<br>
							El cuarto cuadro representa el cálculo de la dirección host más alta. La dirección host más alta de una red es siempre un
							número menor que la dirección de broadcast. Esto significa que el bit más bajo del host es un '0' y todos los otros bits '1'. 
							Como se observa, esto hace que la dirección host más alta de la red sea 172.16.20.126.
							<br>	
							<br>
							A pesar de que para este ejemplo se ampliaron todos los octetos, sólo es necesario examinar el contenido del octeto dividido.
							<br>	
							<br>								
							
							<h4 align="justify"> <font color="#000080" ><b>Principios de Division en Subredes</b></h4></font>
							<br>	
							La división en subredes permite crear múltiples redes lógicas de un solo bloque de direcciones. Como usamos un router para 
							conectar estas redes, cada interfaz en un router debe tener un ID único de red. Cada nodo en ese enlace está en la misma red.
							<br>	
							<br>
							Creamos las subredes utilizando uno o más de los bits del host como bits de la red. Esto se hace ampliando la máscara para 
							tomar prestado algunos de los bits de la porción de host de la dirección, a fin de crear bits de red adicionales. Cuanto 
							más bits de host se usen, mayor será la cantidad de subredes que puedan definirse. Para cada bit que se tomó prestado, 
							se duplica la cantidad de subredes disponibles. Por ejemplo: si se toma prestado 1 bit, es posible definir 2 subredes. 
							Si se toman prestados 2 bits, es posible tener 4 subredes. Sin embargo, con cada bit que se toma prestado, se dispone de 
							menos direcciones host por subred.
							<br>	
							<br>
							El router A en la figura posee dos interfaces para interconectar dos redes. Dado un bloque de direcciones 192.168.1.0 /24, 
							se crearán dos subredes. Se toma prestado un bit de la porción de host utilizando una máscara de subred 255.255.255.128, 
							en lugar de la máscara original 255.255.255.0. El bit más significativo del último octeto se usa para diferenciar dos subredes. 
							Para una de las subredes, este bit es "0" y para la otra subred, este bit es "1". 
							<br>	
							<br>
							<h4 align="justify"> <font color="#000080" ><b>Fórmula para calcular subredes</b></h4></font>
							<br>	
							Use esta fórmula para calcular la cantidad de subredes: 
							<br>	
							<br>
							2^n donde n = la cantidad de bits que se tomaron prestados
							<br>	
							<br>
							En este ejemplo, el cálculo es así:
							<br>	
							<br>
							2^1 = 2 subredes
							<br>	
							<br>
							La cantidad de hosts
							<br>	
							<br>
							Para calcular la cantidad de hosts por red, se usa la fórmula 2^n - 2 donde n = la cantidad de bits para hosts.
							<br>	
							<br>
							La aplicación de esta fórmula, (2^7 - 2 = 126) muestra que cada una de estas subredes puede tener 126 hosts.
							<br>	
							<br>
							En cada subred, examine el último octeto binario. Los valores de estos octetos para las dos redes son:
							<br>	
							<br>
							Subred 1: 00000000 = 0
							<br>	
							<br>
							Subred 2: 10000000 = 128
							<br>	
							<br>
							Vea la figura para conocer el esquema de direccionamiento para estas redes.
																					
							</div>
						   </div>
					    </div>
					</div>
								
			<div class="col-sm-6" >
				<div class="row">
					<div class="col-md-6" STYLE="left:-17px;">						
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/D4.jpg" data-lightbox="galeria" data-title="Direccionamiento de la Red:IPv4"><img src="imagenes/D4.jpg" title="Direccionamiento de la Red: IPv4" class="img-thumbnail"  /></a>					
				   </div>
								
					<div class="col-md-6 " STYLE="left:-35px; height:150px;">					
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/D3.jpg" data-lightbox="galeria" data-title="Tipos de Direcciones de Red"><img src="imagenes/D3.jpg" title="Tipos de Direcciones de Red" class="img-thumbnail"   /></a>												
					</div>	
					
					<div class="col-md-6 " STYLE="left:-290px; top:24px;">								
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/D1.jpg" data-lightbox="galeria" data-title="Calculo de los Tipos de Direcciones de red"><img src="imagenes/D1.jpg" title="Calculo de los Tipos de Direcciones de Red" class="img-thumbnail"  /></a>							
					</div>	

					<div class="col-md-6 " STYLE="left:240px; top:-140px;">		
						<a class="zoom sobre img-circle" onmouseover="primero.playclip()" href="imagenes/D2.jpg" data-lightbox="galeria" data-title="Principios de Division en Subredes"><img src="imagenes/D2.jpg" title="Principios de Division en Subredes" class="img-thumbnail" /></a>							
					</div>	
				</div>
				<br>
				
			</div>
			<br>
			 	
		</div>		

	<div class="col-md-12" STYLE=" left:-17px; width:1132px;  top:-190px;  margin-bottom: -100px;" >	
	
		<nav class="navbar navbar-default "  >
		
		
  <ul class="pager" >
    <li class="previous" ><a class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()" href="capitulo5.php" ><span aria-hidden="false"><img src="imagenes/left1.png"></span></a></li>
    <li class="next"><a class="zoom sobre img-circle" onclick="MOTHER.playclip()" onmouseover="primero.playclip()" href="capitulo7.php"><span aria-hidden="false"><img src="imagenes/right1.png"></span></a></li>
	<li class="zoom sobre img-circle"  onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a  target="_blank" href="diccionario.pdf"><img src="imagenes/dictionary.png"><span aria-hidden="true"><font color="#000080" > Diccionario</font></span></a></li>
	<li class="zoom sobre img-circle"  onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a target="_blank" href="https://www.dropbox.com/s/gv4wwekjsnhb7lw/LaboratorioC6-Configuraci%C3%B3n%20de%20la%20subred%20y%20del%20router.pka?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" > Laboratorio</font></span></a></li>
	<li class="zoom sobre img-circle"  onclick="MOTHER.playclip()" onmouseover="primero.playclip()" ><a target="_blank" href="https://www.dropbox.com/s/98ds8r8zq29rh3z/Cisco_Packet_Tracer_6.1_for_Windows.exe?dl=0"><img src="imagenes/download1.png"><span aria-hidden="true"><font color="#000080" >Simulador</font></span></a></li>
	<li class="zoom sobre img-circle"  onclick="MOTHER.playclip()" onmouseover="primero.playclip()"><a href="principal.php"><img src="imagenes/home.png"><span aria-hidden="true"><font color="#000080" > Inicio</font></span></a></li>
  </ul>
  
  
</nav>

		
	</div>	
	
	</div>	

			
			
			
			
	<script src="js/lightbox.js"></script>	
	</body>
</html>