<?php 
include 'conexion/conexion.php';


class PublicacionModelo{

private $idPublicacion;
private $titulo;
private $imagen;
private $descripcion;
private $fecha;
private $ciudad;
private $idUsuario;

 
function ListarComentarioPorPublicaciones($id){

$objBaseDatos= new Conexion();
$this->idPublicacion=$id;
$res=$objBaseDatos->prepare("SELECT idComentario, comentario.idPublicacion, observacion from comentario inner join publicacion ON comentario.idPublicacion=publicacion.idPublicacion WHERE comentario.idPublicacion=$this->idPublicacion");
$res->execute();

return $res;

$objBaseDatos=null;

}

//--------------------------------------------------------

function ListarPublicacionesPorUsuario($id){

$objBaseDatos= new Conexion();
$this->idUsuario=$id;
$res=$objBaseDatos->prepare("SELECT idPublicacion, titulo, imagen, descripcion, fecha, ciudad, us.idUsuario FROM publicacion pu inner join usuario us ON pu.idUsuario=us.idUsuario WHERE us.idUsuario='$this->idUsuario'");
$res->execute();
return $res;

$objBaseDatos=null;

}

//--------------------------------------------------------

function ListarDePublicaciones(){

$objBaseDatos= new Conexion();

$res=$objBaseDatos->prepare("SELECT * FROM publicacion");
$res->execute();
return $res;

$objBaseDatos=null;

}

//--------------------------------------------------------
function registrarPublicacion($titulo,$img,$descrip,$fecha,$ciudad,$idUsu){

$objBaseDatos= new Conexion();
$this->titulo=$titulo;
$this->imagen=$img;
$this->descripcion=$descrip;
$this->fecha=$fecha;
$this->ciudad=$ciudad;
$this->idUsuario=$idUsu;

$res=$objBaseDatos->prepare("insert into publicacion (titulo, imagen, descripcion, fecha, ciudad, idUsuario) VALUES ('$this->titulo','$this->imagen',"
	."'$this->descripcion','$this->fecha','$this->ciudad','$this->idUsuario')");
$res->execute();

return $res;

$objBaseDatos=null;

}

//--------------------------------------------------------


function editarPublicacion($id,$titulo,$img,$descrip,$fecha,$ciudad,$idUsu){

$objBaseDatos= new Conexion();


$this->idPublicacion=$id;
$this->titulo=$titulo;
$this->imagen=$img;
$this->descripcion=$descrip;
$this->fecha=$fecha;
$this->ciudad=$ciudad;
$this->idUsuario=$idUsu;

$res=$objBaseDatos->prepare("update publicacion set titulo='$this->titulo', imagen='$this->imagen',descripcion='$this->descripcion',fecha='$this->fecha',"
	."ciudad='$this->ciudad', idUsuario='$this->idUsuario' where idPublicacion='$this->idPublicacion'");
$res->execute();
return $res;

$objBaseDatos=null;

}

//--------------------------------------------------------

function eliminarPublicacion($id){

$objBaseDatos= new Conexion();

$this->idPublicacion=$id;


$res=$objBaseDatos->prepare("delete from publicacion where idPublicacion='$this->idPublicacion'");
$res->execute();
return $res;

$objBaseDatos=null;


}

}//fin de la clase 


 ?>