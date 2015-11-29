<?php
	include_once '../conexion.php';
	
	class ConsultaM {
		
		function consultaVuelos($origen,$destino,$fechaida){
						
			$query = "SELECT `Identificador`,`Origen`,`Destino`,`FechaIda`,`HoraIda`,`HoraLlegada`,`Precio`, `FechaRegreso`, `Referancia` FROM vuelos_disponibles WHERE 		Origen='$origen' AND Destino='$destino' AND FechaIda = 	  '$fechaida'";	
								
			$conexion = new conexionBD();
			$resultado = $conexion->consulta($query);			
			$conexion->disconnect();
			return $resultado;
		}
		
		function CompraVuelos($referencia){
						
			$query = "SELECT `Identificador`,`Origen`,`Destino`,`FechaIda`,`HoraIda`,`HoraLlegada`,`Precio` FROM vuelos_disponibles WHERE 	`Referancia`='$referencia'";	
								
			$conexion = new conexionBD();
			$resultado = $conexion->consulta($query);			
			$conexion->disconnect();
			return $resultado;
		}
	}
?>