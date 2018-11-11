<?php 
include 'conexion/conexion.php';


class UsuarioModelo{

private $idUsuario;
private $nombre;
private $apellido;
private $telefono;
private $celular;
private $correo;
private $contrasena;

 
//--------------------------------------------------------

function loginUsuario($usu,$pass){

$objBaseDatos= new Conexion();
$this->correo=$usu;
$this->contrasena=$pass;

$res=$objBaseDatos->prepare("select * from usuario where correo='$this->correo' and contrasena='$this->contrasena'");
$res->execute();
return $res;

$objBaseDatos=null;

}

//--------------------------------------------------------

function registrarUsuario($nom,$ape,$tele,$celu,$usu,$pass){

$objBaseDatos= new Conexion();

$this->nombre=$nom;
$this->apellido=$ape;
$this->telefono=$tele;
$this->celular=$celu;
$this->correo=$usu;
$this->contrasena=$pass;

$res=$objBaseDatos->prepare("insert into usuario (nombre, apellido, telefono, celular, correo, contrasena) VALUES ('$this->nombre','$this->apellido',"
	."'$this->telefono','$this->celular','$this->correo','$this->contrasena')");
$res->execute();
return $res;

$objBaseDatos=null;

}

//--------------------------------------------------------

function editarUsuario($id,$nom,$ape,$tele,$celu,$usu,$pass){

$objBaseDatos= new Conexion();

$this->idUsuario=$id;
$this->nombre=$nom;
$this->apellido=$ape;
$this->telefono=$tele;
$this->celular=$celu;
$this->correo=$usu;
$this->contrasena=$pass;

$res=$objBaseDatos->prepare("update usuario set nombre='$this->nombre', apellido='$this->apellido', telefono='$this->telefono',celular='$this->celular',"
	."correo='$this->correo', contrasena='$this->contrasena' where idUsuario='$this->idUsuario'");
$res->execute();
return $res;

$objBaseDatos=null;

}

//--------------------------------------------------------

function eliminarUsuario($id){

$objBaseDatos= new Conexion();

$this->idUsuario=$id;


$res=$objBaseDatos->prepare("delete from usuario where idUsuario='$this->idUsuario'");
$res->execute();
return $res;

$objBaseDatos=null;

}

}











 ?>