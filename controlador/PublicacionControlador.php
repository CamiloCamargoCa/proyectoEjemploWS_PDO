<?php 

include '../modelo/PublicacionModelo.php';

Class PublicacionControlador{

function ListaComentarioPorPublicacion($idpu){

$objModelo=new PublicacionModelo();
$res=$objModelo->ListarComentarioPorPublicaciones($idpu);
$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}

var_dump(json_encode($datos));

}

//--------------------------------------------------------

function ListaPublicacionPorUsuario($id){

$objModelo=new PublicacionModelo();
$res=$objModelo->ListarPublicacionesPorUsuario($id);
$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}

echo json_encode($datos);

}

//--------------------------------------------------------

function MostrarPublicaciones(){

$objModelo=new PublicacionModelo();
$res=$objModelo->ListarDePublicaciones();
$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}

echo json_encode($datos);

}

//--------------------------------------------------------

function registroPublicaciones($titulo,$img,$descrip,$fecha,$ciudad,$idUsu){

$objModelo=new PublicacionModelo();
$res=$objModelo->registrarPublicacion($titulo,$img,$descrip,$fecha,$ciudad,$idUsu);
/*$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}*/

//echo json_encode($datos);

}

//--------------------------------------------------------

function edicionPublicaciones($id,$titulo,$img,$descrip,$fecha,$ciudad,$idUsu){

$objModelo=new PublicacionModelo();
$res=$objModelo->editarPublicacion($id,$titulo,$img,$descrip,$fecha,$ciudad,$idUsu);
/*$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}*/

//echo json_encode($datos);

}

//--------------------------------------------------------

function eliminacionPublicaciones($id){

$objModelo=new PublicacionModelo();
$res=$objModelo->eliminarPublicacion($id);
/*$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}*/

//echo json_encode($datos);

}

}//fin de clase



 ?>