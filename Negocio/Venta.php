<?php 
require_once("../Datos/Conexion.php");

class Venta
{
	private $idVenta;
	private $nomCliente;
	private $nomCaja;
	private $sisCompra;
	private $fecha;

	public function __construct(){}

	public function Venta($idVenta,$nomCliente,$nomCaja,$sisCompra,$fecha)
	{
		$this->idVenta=$idVenta;
		$this->nomCliente=$nomCliente;
		$this->nomCaja=$nomCaja
		$this->sisCompra=$sisCompra;
		$this->fecha=$fecha;
	}

	//ACCESADORES
 	public function getIdVenta()            {return $this->idVenta;} 
 	public function getNomCliente()            {return $this->nomCliente;} 
 	public function getNomCaja()			{return $this->nomCaja;}
 	public function getSisCompra()            {return $this->sisCompra;} 
 	public function getFecha()            {return $this->fecha;} 
	//MUTANDORES
 	public function setIdVenta($idVenta)				{$this->idVenta=$idVenta;}
 	public function setNomCliente($nomCliente)				{$this->nomCliente=$nomCliente;}
 	public function setNomCaja($nomCaja)				{$this->nomCaja=$nomCaja;}
	public function setSisCompra($sisCompra)				{$this->sisCompra=$sisCompra;}
	public function setFecha($fecha)				{$this->fecha=$fecha;}

//CUSTOMIZED O BUSINESS
   
	public function ingresarVenta()
	   { $objConex=new Conexion();
	     $sql="INSERT INTO VENTA VALUES(".$this->idVenta.",'".$this->nomCliente."',".$this->nomCaja."',".$this->sisCompra.",".$this->fecha."')";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function modificarVenta()
	   { $objConex=new Conexion();
	     $sql="UPDATE VENTA SET nom_cli_venta='".$this->nomCliente."', nom_caj_venta='".$this->nomCaja."', sistema_compra='".$this->sisCompra."', fecha_venta='".$this->fecha."'  WHERE(IDVENTA=".$this->idVenta.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function eliminarVenta()
	   { $objConex=new Conexion();
	     $sql="DELETE FROM VENTA WHERE(IDVENTA=".$this->idVenta.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   }
	   
	public function buscarVenta()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM VENTA WHERE(IDVENTA=".$this->idVenta.")";
	     $vector=$objConex->generarTransaccion($sql);
	     return $vector;   
	   }

	public function listarVenta()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM VENTA";
	     $matrix=$objConex->gesnerarTransaccion($sql);
	     return $matrix;   
	   } 
}

?>