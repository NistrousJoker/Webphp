<?php
class Producto{
  private $codigo, $descripcion, $precio, $existencias, $imagen, $categoria;
  function __construct($codigo, $descripcion, $precio, $existencias, $imagen, $categoria){
    $this->codigo = $codigo;
    $this->descripcion = $descripcion;
    $this->precio = $precio;
    $this->existencias = $existencias;
    $this->imagen = $imagen;
    $this->categoria = $categoria;
  }

  function getCodigo(){
    return $this->codigo;
  }
  function setCodigo($codigo){
    $this->codigo = $codigo;
  }
  function getDescripcion(){
    return $this->descripcion;
  }
  function setDescripcion($descripcion){
    $this->descripcion = $descripcion;
  }
  function getPrecio(){
    return $this->precio;
  }
  function setPrecio($precio){
    $this->precio = $precio;
  }
  function getExistencias(){
    return $this->existencias;
  }
  function setExistencias($existencias){
    $this->existencias = $existencias;
  }
  function getImagen(){
    return $this->imagen;
  }
  function setImagen($imagen){
    $this->imagen = $imagen;
  }
  function getCategoria(){
    return $this->categoria;
  }
  function setCategoria($categoria){
    $this->categoria = $categoria;
  }
}
 ?>
