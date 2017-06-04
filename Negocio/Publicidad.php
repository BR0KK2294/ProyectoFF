<?php 
require_once("../Datos/Conexion.php");

class Publicidad
{
	private $idPublicidad;
	private $nomPubli;
	private $descPubli;
	private $tiempoPubli;

	public function __construct(){}

	public function Publicidad($idPublicidad,$nomPubli,$descPubli,$tiempoPubli)
	{
		$this->idPublicidad=$idPublicidad;
		$this->nomPubli=$nomPubli;
		$this->descPubli=$descPubli;
		$this->tiempoPubli=$tiempoPubli;
	}

	//ACCESADORES
 	public function getIdPublicidad()            {return $this->idPublicidad;} 
 	public function getNomPubli()            {return $this->nomPubli;} 
 	public function getDescPubli()            {return $this->descPubli;} 
 	public function getTiempoPubli()            {return $this->tiempoPubli;} 
	//MUTADORES
 	public function setIdPublicidad($idPublicidad)				{$this->idPublicidad=$idPublicidad;}
 	public function setNomPubli($nomPubli)				{$this->nomPubli=$nomPubli;}
	public function setDescPubli($descPubli)				{$this->descPubli=$descPubli;}
	public function setTiempoPubli($tiempoPubli)				{$this->tiempoPubli=$tiempoPubli;}

//CUSTOMIZED O BUSINESS
   
	public function ingresarPublicidad()
	   { $objConex=new Conexion();
	     $sql="INSERT INTO PUBLICIDAD VALUES(".$this->idPublicidad.",'".$this->nomPubli."',".$this->descPubli.",".$this->tiempoPubli."')";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function modificarPublicidad()
	   { $objConex=new Conexion();
	     $sql="UPDATE PUBLICIDAD SET NOMBRE_PUBLICIDAD='".$this->nomPubli."', DESCRIPCION_PUBLICIDAD='".$this->descPubli."', TIEMPO_DURACION=".$this->tiempoPubli."  WHERE(IDPUBLICIDAD=".$this->idPublicidad.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function eliminarPublicidad()
	   { $objConex=new Conexion();
	     $sql="DELETE FROM PUBLICIDAD WHERE(IDPUBLICIDAD=".$this->idPublicidad.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   }
	   
	public function buscarPublicidad()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM PUBLICIDAD WHERE(IDPUBLICIDAD=".$this->idPublicidad.")";
	     $vector=$objConex->generarTransaccion($sql);
	     return $vector;   
	   }

	public function listarPublicidad()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM PUBLICIDAD";
	     $matrix=$objConex->generarTransaccion($sql);
	     return $matrix;   
	   } 
}

?>