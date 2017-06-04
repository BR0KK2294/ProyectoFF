<?php 
require_once("../Datos/Conexion.php");

class Combo
{
	private $idCombo;
	private $nomCombo;
	private $precio;

	public function __construct(){}

	public function Combo($idPedido,$nomCombo,$precio,$tiempoEstimado)
	{
		$this->idCombo=$idCombo;
		$this->nomCombo=$nomCombo;
		$this->precio=$precio;
	}

	//ACCESADORES
 	public function getIdCombo()            {return $this->idCombo;} 
 	public function getNomCombo()         {return $this->nomCombo;} 
 	public function getPrecio()            {return $this->precio;} 
	//MUTANDORES
 	public function setIdCombo($idCombo)				{$this->idCombo=$idCombo;}
 	public function setNomCombo($nomCombo)				{$this->nomCombo=$nomCombo;}
	public function setPrecio($precio)				{$this->precio=$precio;}

//CUSTOMIZED O BUSINESS
   
	public function ingresarCombo()
	   { $objConex=new Conexion();
	     $sql="INSERT INTO COMBO VALUES(".$this->idCombo.",'".$this->nomCombo."',".$this->precio."')";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function modificarCombo()
	   { $objConex=new Conexion();
	     $sql="UPDATE COMBO SET NOMBREPROMO='".$this->nomCombo."', PRECIOCOMBO='".$this->precio."  WHERE(IDCOMBO=".$this->idCombo.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function eliminarCombo()
	   { $objConex=new Conexion();
	     $sql="DELETE FROM COMBO WHERE(IDCOMBO=".$this->idCombo.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   }
	   
	public function buscarCombo()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM COMBO WHERE(IDCOMBO=".$this->idCombo.")";
	     $vector=$objConex->generarTransaccion($sql);
	     return $vector;   
	   }

	public function listarCombo()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM COMBO";
	     $matrix=$objConex->generarTransaccion($sql);
	     return $matrix;   
	   } 



}
?>