<?php
class Pedido{
  private $codigo, $persona, $fecha, $importe, $estado, $productos;


  function __construct($codigo, $persona, $fecha, $importe, $estado) {
    $this->persona = $persona;
    $this->fecha = $fecha;
    $this->importe = $importe;
    $this->estado = $estado;
    $this->codigo = $codigo;
  }
  function getCodigo(){
    return $this->codigo;
  }
  function setCodigo($codigo){
    $this->codigo = $codigo;
  }
  function getPersona(){
    return $this->persona;
  }
  function setPersona($persona){
    $this->persona = $persona;
  }
  function getFecha(){
    return $this->fecha;
  }
  function setFecha($fecha){
    $this->fecha = $fecha;
  }
  function getImporte(){
    return $this->importe;
  }
  function setImporte($importe){
    $this->importe = $importe;
  }
  function getEstado(){
    return $this->estado;
  }
  function setEstado($estado){
    $this->estado = $estado;
  }
  function getProductos(){
    return $this->productos;
  }
  function setProductos($productos){
    $this->productos = $productos;
  }
}
 ?>
