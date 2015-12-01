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
	<script type="text/javascript" src="mediaplayer/swfobject.js"></script>
	
    <script src="js/bootstrap.js"></script>
	<link href="css/bootstrap.css" rel="stylesheet">
	
	
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

	<body background="imagenes/mundo.jpg">
	<div STYLE="position:absolute; top:20px; left:130px; width:1100px;">
	
		<nav  class = "navbar navbar-default navbar-static-top" role="navigation" > 
						<div  class= "container.fixed"> 
							
									<img style=" margin-top: -1px; "
									src="imagenes/bannner.png"  /> 
								<br>	
						</div> 
		</nav>
		
	    <div class="col-md-1-1-1-1">
									<ul class="nav nav-tabs nav-justified" >
										<li role="presentation" class="active"><a href="#"><small>Inicio</small></a></li>
										<li><a href="capitulo1.php"><small>Capítulo 1</small></a></li>
										
										<li role="presentation" class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
										<small>Capítulo2</small><span class="caret"></span>
										</a>
										<ul class="dropdown-menu">
										<li><a href="capitulo2.php">2 Comunicación a traves de la Red</a></li>
										<li><a href="capitulo2.1.php">2.1 Elementos de la Comunicación</a></li>
										<li><a href="capitulo2.2.php">2.2 Comunicación de Mensajes</a></li>
										<li><a href="capitulo2.3.php">2.3 Componentes de la Red</a></li>
										<li><a href="capitulo2.3.1.php">2.3.1 Dispositivos Finales</a></li>
										<li><a href="capitulo2.3.2.php">2.3.2 Dispositivos Intermediarios</a></li>
										<li><a href="capitulo2.3.3.php">2.3.3 Medios de Red</a></li>
										</ul>
										</li>
										<li><a href="capitulo3.php"><small>Capítulo 3</small></a></li>
										<li><a href="capitulo4.php"><small>Capítulo 4</small></a></li>
										<li><a href="capitulo5.php"><small>Capítulo 5</small></a></li>
										<li><a href="capitulo6.php"><small>Capítulo 6</small></a></li>
										<li><a href="capitulo7.php"><small>Capítulo 7</small></a></li>
										<li><a href="capitulo8.php"><small>Capítulo 8</small></a></li>
										<li><a href="capitulo9.php"><small>Capítulo 9</small></a></li>
										
									</ul>
		</div>
				
				
		<div STYLE="position:relative; top:10px; left:1px; width:1050px;">
		
		<div align="left">
			<a onClick="accesibiliza()" class="btn">Contraste</a>
			<a href="javascript:decreaseFontSize();" class="btn">Disminuir el Tamano A-</a> 
			<a href="javascript:increaseFontSize();" class="btn">Aumentar el Tamano A+</a>
		</div>	
		
		
	
		</div>	
		
		<div class="row" style=" position:relative; left:695px; top:-10px; ">
		 <div  class="col-md-6" >
		
	<div id="player">This text will be replaced</div>
   
      <script type="text/javascript">
		var so = new SWFObject('mediaplayer/mediaplayer.swf','mpl','320','20','7');
		so.addParam('allowfullscreen','true');
		so.addVariable('file','mediaplayer/audios/danzahungara.mp3');
		so.addVariable('height','20');
		so.addVariable('width','320');
		so.addVariable('backcolor','0xCCCCFF');
		so.addVariable('lightcolor','0x99FFFF');
		so.addVariable('autostart','true');
		so.write('player');
	</script>
        </div>
     </div>
		<br>


		
		
		<div STYLE="position:relative; top:-18px; left:55px; width:1100px;">
						
					<div class="col-sm-6" STYLE="left:-69px; width:530px;" >
									
						<div class="panel panel-info">
							<div class="panel-heading" align="center"><b>INTRODUCCIÓN DEL CURSO</b></div>
							<div class="panel-body" style="text-align: justify;">
								
								Como el título de la aplicacion  lo indica, se enfoca en el aprendizaje 
								de los aspectos fundamentales de las redes de datos. A traves de este curso, 
								aprenderá las habilidades  conceptuales prácticas que constituyen la 
								base para entender lo básico de las redes, asi mismo contribuirá a que 
								el estudiante pueda desarrollar las aptitudes necesarias para planear e implementar pequeñas redes. 
								<br>
								<br>
							</div>
						</div>
					</div>
								
					<div class="col-md-6" STYLE=" left:-75px; top:-2px;">
											
											
											
										
											<div id="myCarousel" class="carousel slide" data-ride="carousel">
												  <!-- Indicators -->
												<ol class="carousel-indicators">
													<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
													<li data-target="#myCarousel" data-slide-to="1"></li>
													<li data-target="#myCarousel" data-slide-to="2"></li>
													<li data-target="#myCarousel" data-slide-to="3"></li>
													<li data-target="#myCarousel" data-slide-to="4"></li>
												</ol>

												  <!-- Wrapper for slides -->
													<div class="carousel-inner" role="listbox">
														<div class="item active">
														  <img src="imagenes/admonp.jpg" alt="Chania">
														</div>

														<div class="item">
														  <img src="imagenes/admon6.png" alt="Chania">
														</div>

														<div class="item">
														  <img src="imagenes/admon2.jpg" alt="Flower">
														</div>

														<div class="item">
														  <img src="imagenes/admon5.jpg" alt="Flower">
														</div>
														<div class="item">
														  <img src="imagenes/admon1.jpg" alt="Flower">
														</div>
													</div>

												 
												
												
											</div>
											<br>
											<br>
											<br>
								
				</div>
								
				
					
					<br>
					<br>
		</div>	
			
	</div>				
						
						
				

												 
												
												
											
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</body>
</html>