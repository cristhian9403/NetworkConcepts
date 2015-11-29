
<?php
$archivo = fopen("compra.txt", "w");

$txt = 'ID:'.$_GET['id']."\n
	Origen:".$_GET['Origen']."\n
	Destino:".$_GET['Destino']."\n
	F. Ida:".$_GET['FIda']."\n
	F. Regreso:".$_GET['FRegreso']."\n
	H. ida:".$_GET['Hida']."\n
	H. Llegada:".$_GET['HLlegada']."\n
	Precio:".$_GET['Precio']."\n\n

	Tarjeta de Credito:".$_POST['Tarjeta']."\n
	Nombres:".$_POST['Nombre']."\n
	Telefono:".$_POST['Telefono']."\n
	Banco:".$_POST['Banco']."\n
	Apellidos:".$_POST['Apellido']."\n
	Correo Electronico:".$_POST['Correo']."\n

	Gracias por su compra";

fwrite($archivo, $txt);
fclose($archivo);

?> 

<html>
<head>
	<title></title>
</head>
<body>
<h1>Compra finalizada</h1>
</body>
</html>