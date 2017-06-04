<?php 
require_once("../Datos/Conexion.php");

class Boleta
{
	private $idBoleta;
	private $detalleBoleta;

	public function __construct(){}

	public function Boleta($idBoleta,$detalleBoleta)
	{
		$this->idBoleta=$idBoleta;
		$this->detalleBoleta=$detalleBoleta;
	}

	//ACCESADORES
 	public function getIdBoleta()            {return $this->idBoleta;} 
 	public function getDetalleBoleta()            {return $this->detalleBoleta;}
	//MUTANDORES
 	public function setIdBoleta($idBoleta)				{$this->idBoleta=$idBoleta;}
 	public function SetDetalleBoleta($detalleBoleta)				{$this->detalleBoleta=$detalleBoleta;}

//CUSTOMIZED O BUSINESS
   
	public function ingresarBoleta()
	   { $objConex=new Conexion();
	     $sql="INSERT INTO BOLETA VALUES(".$this->idBoleta.",'".$this->detalleBoleta."')";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function modificarBoleta()
	   { $objConex=new Conexion();
	     $sql="UPDATE BOLETA SET DETALLE_BOLETA='".$this->detalleBoleta."  WHERE(ID_BOLETA=".$this->idBoleta.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function eliminarBoleta()
	   { $objConex=new Conexion();
	     $sql="DELETE FROM BOLETA WHERE(ID_BOLETA=".$this->idBoleta.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   }
	   
	public function buscarBoleta()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM BOLETA WHERE(ID_BOLETA=".$this->idBoleta.")";
	     $vector=$objConex->generarTransaccion($sql);
	     return $vector;   
	   }

	public function listarBoleta()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM BOLETA";
	     $matrix=$objConex->gesnerarTransaccion($sql);
	     return $matrix;   
	   } 
}

?>