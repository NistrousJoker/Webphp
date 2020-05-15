<?php
  class Usuario{
    private $codigo, $admin, $activo, $usuario, $nombre, $apellidos;
    function __construct($codigo, $admin, $activo, $usuario, $nombre, $apellidos) {
      $this->admin = $admin;
      $this->activo = $activo;
      $this->usuario = $usuario;
      $this->nombre = $nombre;
      $this->apellidos = $apellidos;
      $this->codigo = $codigo;
    }
    function getCodigo(){
      return $this->codigo;
    }
    function setCodigo($codigo){
      $this->codigo = $codigo;
    }
    function getAdmin(){
      return $this->admin;
    }
    function setAdmin($admin){
      $this->admin = $admin;
    }
    function getActivo(){
      return $this->activo;
    }
    function setActivo($activo){
      $this->activo = $activo;
    }
    function getUsuario(){
      return $this->usuario;
    }
    function setUsuario($usuario){
      $this->usuario = $usuario;
    }
    function getNombre(){
      return $this->nombre;
    }
    function setNombre($nombre){
      $this->nombre = $nombre;
    }
    function getApellidos(){
      return $this->apellidos;
    }
    function setApellidos($apellidos){
      $this->apellidos = $apellidos;
    }


  }

 ?>
