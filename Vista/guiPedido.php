<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administracion de Pedidos</title>
</head>
<body>
</body>
</html>

<?php
require_once("../Datos/Conexion.php");
$objConex=new Conexion();
$objConex->abrirConexion();
$sql="SELECT * FROM PEDIDO";
$datos=$objConex->generarTransaccion($sql);
echo "<html><center>";
echo "<form action='../Controlador/TPedido.php' method='post'>";
//echo "<table class='gridtable' type='text/css' href='../Utilitarios/Maqueta.css'>";
echo "<table>";
echo "<tr><th bgcolor='#6699FF'>ID PEDIDO</th><th bgcolor='#6699FF'>NOMBRE CLIENTE</th>
          <th bgcolor='#6699FF'>PRECIO TOTAL</th><th bgcolor='#6699FF'>TIEMPO ESTIMADO</th></tr>";
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
  echo "<td><input type=text name=idPedido></td>";
  echo "<td><input type=text name=nomCli></td>";
  echo "<td><input type=text name=total></td>";
  echo "<td><input type=text name=tiempoEstim></td>";
  echo "</tr></table>";  
  //Crear botones de eventos
  echo "<table><tr>";
  echo "<td><input type=submit name=OK value='Ingresar'></td>";  
  echo "<td><input type=submit name=OK1 value='Modificar'></td>";   
  echo "<td><input type=submit name=OK2 value='Eliminar'></td>";   
  echo "</tr></table>";
  echo "</form></center></html>";

?>

