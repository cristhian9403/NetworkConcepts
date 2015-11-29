<?php
	include_once "../Modelo/ConsultaM.php";
		
	if(isset($_POST["BuscarVuelo"])){		
		$oVuelos = new ConsultaM();		
		# Creo una variable regreso, que almacena el resultado del formulario
		$regreso = $_POST["optradio"];		
		$resultado2 = null;
		
		# Le paso la varibale "regreso" a la funcion consultaVuelos
		if($regreso=="soloIda"){		
			$resultado = $oVuelos->consultaVuelos($_POST["Origen"],$_POST["Destino"],$_POST["ida"]);		
		}elseif($regreso =="idaVuelta"){
			echo "regreso";
			#Resultado para ida
			$resultado = $oVuelos->consultaVuelos($_POST["Origen"],$_POST["Destino"],$_POST["ida"],$_POST["FechaRegreso"]);
			#resultado para regreso
			$resultado2 = $oVuelos->consultaVuelos($_POST["Destino"],$_POST["Origen"],$_POST["FechaRegreso"]);	
		}
		
		
		$datos = array();
		
		$datosRegreso = array();
		while ($fila = mysql_fetch_row($resultado)) { 
			$datos[] = $fila;  //cada elemento de $datos va a ser una fila del resultado; 			
		}
		$tmp=serialize($datos);  //Serializar el arreglo.
		$tmp=urlencode($tmp);  //Codificar URL. 	
		
		if($resultado2 != null){
			$datos2 = array();
			while ($fila2 = mysql_fetch_row($resultado2)) { 
				$datos2[] = $fila2;  //cada elemento de $datos va a ser una fila del resultado; 			
			}
			$tmp2=serialize($datos2);  //Serializar el arreglo.
			$tmp2=urlencode($tmp2);  //Codificar URL. 
			header("Location: ../Vista/consultaVuelos.php?lista=$tmp&regreso=$tmp2&Origen=".$_POST["Origen"]."&Destino=".$_POST["Destino"]."&adultos=".$_POST["adultos"]); //Redireccionamos
		}else{
			header("Location: ../Vista/consultaVuelos.php?lista=$tmp&Origen=".$_POST["Origen"]."&Destino=".$_POST["Destino"]."&adultos=".$_POST["adultos"]); //Redireccionamos
		}	
	}
		
		
?>