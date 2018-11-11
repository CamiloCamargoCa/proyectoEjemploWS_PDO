<?php 
include 'conexion/conexion.php';


class ComentarioModelo{

private $idComentario;
private $observacion;
private $idPublicacion;


//--------------------------------------------------------

function registrarComentario($obser,$idPubli){

$objBaseDatos= new Conexion();


$this->observacion=$obser;
$this->idPublicacion=$idPubli;

$res=$objBaseDatos->prepare("insert into comentario (observacion, idPublicacion) VALUES ('$this->observacion','$this->idPublicacion')");
$res->execute();
return $res;

$objBaseDatos=null;


}

//--------------------------------------------------------

function editarComentario($id,$obser,$idPubli){

$objBaseDatos= new Conexion();

$this->idComentario=$id;
$this->observacion=$obser;
$this->idPublicacion=$idPubli;

$res=$objBaseDatos->prepare("update comentario set observacion='$this->observacion', idPublicacion='$this->idPublicacion'"
	." where idComentario='$this->idComentario'");
$res->execute();
return $res;

$objBaseDatos=null;

}

//--------------------------------------------------------

function eliminarComentario($id){

$objBaseDatos= new Conexion();

$this->idComentario=$id;


$res=$objBaseDatos->prepare("delete from comentario where idComentario='$this->idComentario'");
$res->execute();
return $res;

$objBaseDatos=null;


}

}











 ?>