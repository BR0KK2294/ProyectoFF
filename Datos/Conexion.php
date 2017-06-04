<?php

class Conexion
{ private $serv="127.0.0.1";
  private $usuario="root";
  private $clave="";
  private $bdatos="fastfoodbd";
  private $conex="";
  
  public function abrirConexion()
  { $this->conex=mysql_connect($this->serv,$this->usuario,$this->clave) or die ('ERROR AL UBICAR URL...:'.mysql_error());
    mysql_select_db($this->bdatos,$this->conex);
	return $this->conex;  
  }
  
  public function cerrarConexion()
  { mysql_close($this->conex) or die ('ERROR DE CIERRE...VERIFIQUE..:'.mysql_error()); }
  
  public function generarTransaccion($sql)
  {  $this->abrirConexion();
     $resul=mysql_query($sql,$this->conex) or die ('ERROR DE SENTENCIA...VERIFIQUE..:'.mysql_error()); 
     $this->cerrarConexion();
     return $resul;
  }
}
?>
