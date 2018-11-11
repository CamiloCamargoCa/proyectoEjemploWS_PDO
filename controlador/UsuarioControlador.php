<?php 

include '../modelo/UsuarioModelo.php';


class UsuarioControlador{


function validarUsuario($usu,$pass){

$objModelo=new UsuarioModelo();
$res=$objModelo->loginUsuario($usu,$pass);
$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}

echo json_encode($datos);

}

//--------------------------------------------------------

function registroUsuario($nom,$ape,$tele,$celu,$usu,$pass){

$objModelo=new UsuarioModelo();
$res=$objModelo->registrarUsuario($nom,$ape,$tele,$celu,$usu,$pass);
/*$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;


}*/

//echo json_encode($datos);

}

//--------------------------------------------------------

function edicionUsuario($id,$nom,$ape,$tele,$celu,$usu,$pass){

$objModelo=new UsuarioModelo();
$res=$objModelo->editarUsuario($id,$nom,$ape,$tele,$celu,$usu,$pass);
/*$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}*/

//echo json_encode($datos);

}

//--------------------------------------------------------

function eliminacionUsuario($id){

$objModelo=new UsuarioModelo();
$res=$objModelo->eliminarUsuario($id);
/*$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}*/

//echo json_encode($datos);

}


}
//fin de la clase


 ?>