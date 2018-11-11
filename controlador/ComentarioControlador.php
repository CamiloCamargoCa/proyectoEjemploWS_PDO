<?php 


include '../modelo/ComentarioModelo.php';


class ComentarioControlador{

//--------------------------------------------------------	

function registroComentario($obser,$idPubli){

$objModelo=new ComentarioModelo();
$res=$objModelo->registrarComentario($obser,$idPubli);
/*$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}*/

//echo json_encode($datos);

}

//--------------------------------------------------------

function edicionComentario($id,$obser,$idPubli){

$objModelo=new ComentarioModelo();
$res=$objModelo->editarComentario($id,$obser,$idPubli);
/*$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}*/

//echo json_encode($datos);

}

//--------------------------------------------------------

function eliminacionComentario($id){

$objModelo=new ComentarioModelo();
$res=$objModelo->eliminarComentario($id);
/*$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}*/

//echo json_encode($datos);

}

}

























 ?>