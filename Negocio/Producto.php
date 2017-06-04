<?php 
require_once("../Datos/Conexion.php");

class Producto
{
	private $idProd;
	private $nomProd;
	private $descProd;
	private $precio;

	public function __construct(){}

	public function Producto($idProd,$nomProd,$descProd,$precio)
	{
		$this->idProd=$idProd;
		$this->nomProd=$nomProd;
		$this->descProd=$descProd;
		$this->precio=$precio;
	}

	//ACCESADORES
 	public function getIdProd()            {return $this->idProd;} 
 	public function getNomProd()            {return $this->nomProd;} 
 	public function getDescProd()            {return $this->descProd;} 
 	public function getPrecio()            {return $this->precio;} 
	//MUTANDORES
 	public function setIdProd($idProd)				{$this->idProd=$idProd;}
 	public function SetNomProd($nomProd)				{$this->nomProd=$nomProd;}
	public function setDescProd($descProd)				{$this->descProd=$descProd;}
	public function setPrecio($precio)				{$this->precio=$precio;}

//CUSTOMIZED O BUSINESS
   
	public function ingresarProducto()
	   { $objConex=new Conexion();
	     $sql="INSERT INTO PRODUCTO VALUES(".$this->idProd.",'".$this->nomProd."',".$this->descProd.",".$this->precio."')";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function modificarProducto()
	   { $objConex=new Conexion();
	     $sql="UPDATE PRODUCTO SET nombre_producto='".$this->nomProd."', descripcion_producto='".$this->descProd."', precio_producto=".$this->precio."  WHERE(IDPRODUCTO=".$this->idProd.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   } 
	   
	public function eliminarProducto()
	   { $objConex=new Conexion();
	     $sql="DELETE FROM PRODUCTO WHERE(IDPRODUCTO=".$this->idProd.")";
	     $resul=$objConex->generarTransaccion($sql);
	     return $resul;   
	   }
	   
	public function buscarProducto()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM PRODUCTO WHERE(IDPRODUCTO=".$this->idProd.")";
	     $vector=$objConex->generarTransaccion($sql);
	     return $vector;   
	   }

	public function listarProducto()
	   { $objConex=new Conexion();
	     $sql="SELECT * FROM PRODUCTO";
	     $matrix=$objConex->generarTransaccion($sql);
	     return $matrix;   
	   } 
}

?>