<?php
/* http://programarenphp.wordpress.com */
/* incluimos primeramente el archivo que contiene la clase fpdf */
include ('fpdf/fpdf.php');
/* tenemos que generar una instancia de la clase */
        
		$ida = $_GET['ida'];
		$Regreso = null;
		if(isset($_GET["vuelta"])){			
			$Regreso = $_GET["vuelta"];			
			$tmp2 = stripslashes($Regreso); 
			$tmp2 = urldecode($tmp2); 			
			$tmp2 = unserialize($tmp2);
			$Regreso = $tmp2;
		}		
		$tmp = stripslashes($ida); 
		$tmp = urldecode($tmp); 
		$tmp = unserialize($tmp);
		$ida = $tmp;
		
		
		$cabecera = array("Nombre","Apellido","Telefono","Email","Banco","T. Credito");
		$datosPer = array($_GET["Nombre"],$_GET["Apellido"],$_GET["Telefono"],$_GET["Correo"],$_GET["Banco"],$_GET["Tarjeta"]);
		$cabeceraVuelos = array("ID","Origen","Destino","F. Ida","H.Ida","H.Llegada","Precio");
		
		
	class PDF extends FPDF{	
		function cabeceraVertical($cabecera)
		{
			$this->SetXY(70, 40);
			$this->SetFont('Arial','B',10);			
			foreach($cabecera as $columna)
			{
				//Parámetro con valor 2, hace que la cabecera sea vertical
				$this->Cell(30,7, utf8_decode($columna),1, 2 , 'L' );
			}
		}
		
		function datosVerticales($datos)
		{
			$this->SetXY(100, 40); //40 = 10 posiciónX_anterior + 30ancho Celdas de cabecera
			$this->SetFont('Arial','',10); //Fuente, Normal, tamaño
			foreach($datos as $columna)
			{
            $this->Cell(60,7, utf8_decode($columna),1, 2 , 'L' );
			}
		}
 
		function cabeceraHorizontal($cabecera)
		{
			$this->SetXY(20, 100);
			$this->SetFont('Arial','B',10);
			$this->SetFillColor(217,237,247);//Fondo verde de celda
			$this->SetTextColor(3, 3, 3); //Letra color blanco
			foreach($cabecera as $fila)
			{
				//Atención!! el parámetro true rellena la celda con el color elegido
				$this->Cell(24,7, utf8_decode($fila),1, 0 , 'L', true);
			}
		}
 
		
 
 
 
		function datosHorizontal($datos,$posicion,$bandera)
		{
			 $this->SetXY(20,$posicion);
			$this->SetFont('Arial','',10);
			$this->SetFillColor(229, 229, 229); //Gris tenue de cada fila
			$this->SetTextColor(3, 3, 3); //Color del texto: Negro
			
			foreach($datos as $fila)
			{
            //El parámetro badera dentro de Cell: true o false
            //true: Llena  la celda con el fondo elegido
            //false: No rellena la celda
				$this->Cell(24,7, utf8_decode($fila[0]),1, 0 , 'L' ,$bandera);
				$this->Cell(24,7, utf8_decode($fila[1]),1, 0 , 'L' ,$bandera);
				$this->Cell(24,7, utf8_decode($fila[2]),1, 0 , 'L' ,$bandera);
				$this->Cell(24,7, utf8_decode($fila[3]),1, 0 , 'L' ,$bandera);
				$this->Cell(24,7, utf8_decode($fila[4]),1, 0 , 'L' ,$bandera);
				$this->Cell(24,7, utf8_decode($fila[5]),1, 0 , 'L' ,$bandera);
				$this->Cell(24,7, utf8_decode($fila[6]),1, 0 , 'L' ,$bandera);
				$this->Ln();//Salto de línea para generar otra fila				
			}			
		}		
		
	}	
	
	$pdf = new PDF();
	
	$pdf->AddPage();
		
		
/* seleccionamos el tipo, estilo y tamaño de la letra a utilizar */
		$pdf->SetFont('Arial','B',16);	
		$pdf->Text(90,20,"AeroExpress");
		$pdf->Text(80,30,"Factura de Compra");
		$pdf->SetFont('Arial','B',12);
		$pdf->Text(20,35,"Datos del Usuario");
		$pdf->cabeceraVertical($cabecera);
		$pdf->datosVerticales($datosPer);
		$pdf->SetFont('Arial','B',12);
		$pdf->Text(20,95,"Información de vuelos");	
		$pdf->cabeceraHorizontal($cabeceraVuelos);
		$pdf->datosHorizontal($ida,107,false);
		if($Regreso!=null){
			$pdf->datosHorizontal($Regreso,114,false);
		}
		$pdf->SetFont('Arial','B',12);
		$pdf->Text(20,140,"Cantidad de tiquetes:");	
		$pdf->Text(80,140,$_GET["tiquetes"]);		
		$pdf->Text(20,150,"Total:");
		$pdf->Text(70,150,$_GET["precio"]);
        $pdf->Output("prueba.pdf",'F');
		
		echo "<script language='javascript'>var win = window.open('prueba.pdf','nuevo', 'directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=900, height=800');
		win.focus();
		</script>";//para ver el archivo pdf generado	
		echo "<script language='javascript'>
			alert('Gracias por comprar en Aerolineas Express. Su tiquete de compra se abrira en una pesta\u00f1a.');
		</script>";		
		echo "<script language='javascript'>
			window.open('http://localhost/Aerolinea/','_self','');
		</script>";
		
		exit;
		
		
		
		
	?>