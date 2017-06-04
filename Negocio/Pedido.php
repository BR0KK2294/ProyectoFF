<?php 
require_once("../Datos/Conexion.php");

class Pedido
{
	private $idPedido;
	private $nomCliPedido;
	private $totalPedido;
	private $tiempoEstimado;

	public function __construct(){}

	public function Pedido($idPedido,$nomCliPedido,$totalPedido,$tiempoEstimado)
	{
		$this->idPedido=$idPedido;
		$this->nomCliPedido=$nomCliPedido;
		$this->totalPedido=$totalPedido;
		$this->tiempoEstimado=$tiempoEstimado;
	}

	//ACCESADORES
 	public function getIdPedido()            {return $this->idPedido;} 
 	public function getNomCliPedido()         {return $this->nomCliPedido;} 
 	public function getTotalPedido()            {return $this->totalPedido;} 
 	public function gettiempoEstimado()            {return $this->tiempoEstimado;} 
	//MUTANDORES
 	public function setIdPedido($idPedido)				{$this->idPedido=$idPedido;}
 	public function setNomCliPedido($nomCliPedido)				{$this->nomCliPedido=$nomCliPedido;}
	public function setTotalPedido($totalPedido)				{$this->totalPedido=$totalPedido;}
	public function setTiempoEstimado($tiempoEstimado)				{$this->tiempoEstimado=$tiempoEstimado;}

//CUSTOMIZED O BUSINESS
   
	public function ingresarPedido()
	   { $objConex=new Conexion();
	     $sql="INSERT INTO PEDIDO VALUES(".$this->idPedido.",'".$this->nomCliPedido."',".$this->totalPedido.",".$this->tiempoEstimado."')";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function modificarPedido()
	   { $objConex=new Conexion();
	     $sql="UPDATE PEDIDO SET nom_cli_pedido='".$this->nomCliPedido."', total_pedido='".$this->totalPedido."', tiempo_Estimado=".$this->tiempoEstimadotiempoEstimado."  WHERE(IDPEDIDO=".$this->idPedido.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function eliminarPedido()
	   { $objConex=new Conexion();
	     $sql="DELETE FROM PEDIDO WHERE(IDPEDIDO=".$this->idPedido.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   }
	   
	public function buscarPedido()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM PEDIDO WHERE(IDPEDIDO=".$this->idPedido.")";
	     $vector=$objConex->generarTransaccion($sql);
	     return $vector;   
	   }

	public function listarPedido()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM PEDIDO";
	     $matrix=$objConex->generarTransaccion($sql);
	     return $matrix;   
	   } 



}
?>