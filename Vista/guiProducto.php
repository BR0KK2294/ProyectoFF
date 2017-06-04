<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administracion de Productos</title>
</head>
<body>
</body>
</html>

<?php
require_once("../Datos/Conexion.php");
$objConex=new Conexion();
$objConex->abrirConexion();
$sql="SELECT * FROM ARRIENDO";
$datos=$objConex->generarTransaccion($sql);
echo "<html><center>";
echo "<form action='../Controlador/TProducto.php' method='post'>";
//echo "<table class='gridtable' type='text/css' href='../Utilitarios/Maqueta.css'>";
echo "<table>";
echo "<tr><th bgcolor='#6699FF'>ID PRODUCTO</th><th bgcolor='#6699FF'>NOMBRE</th>
          <th bgcolor='#6699FF'>DESCRIPCION</th><th bgcolor='#6699FF'>PRECIO</th></tr>";
//LLENAR TABLA
while($reg=mysql_fetch_row($datos))	
{ echo "<tr>";
  echo "<td bgcolor='#6699FF'>".$reg[0]."</td>";  
  echo "<td bgcolor='#6699FF'>".$reg[1]."</td>";  
  echo "<td bgcolor='#6699FF'>".$reg[2]."</td>";  
  echo "<td bgcolor='#6699FF'>".$reg[3]."</td>";  
  echo "</tr>";
}	  
//cuadro de captura de datos
  echo "<tr>";
  echo "<td><input type=text name=idProd></td>";
  echo "<td><input type=text name=nombre></td>";
  echo "<td><input type=text name=desc></td>";
  echo "<td><input type=text name=precio></td>";
  echo "</tr></table>";  
  //Crear botones de eventos
  echo "<table><tr>";
  echo "<td><input type=submit name=OK value='Ingresar'></td>";  
  echo "<td><input type=submit name=OK1 value='Modificar'></td>";   
  echo "<td><input type=submit name=OK2 value='Eliminar'></td>";   
  echo "</tr></table>";
  echo "</form></center></html>";

?>

