<?php 

include '../controlador/ComentarioControlador.php';


  if (

  	isset($_REQUEST['id']) && !empty($_REQUEST['id']) &&
  	isset($_REQUEST['obser']) && !empty($_REQUEST['obser']) &&
               isset ($_REQUEST['idPubli']) && !empty($_REQUEST['idPubli']) ){

$id=@$_REQUEST['id'];
$obser=@$_REQUEST['obser'];
$idPubli=@$_REQUEST['idPubli'];

$obj=new ComentarioControlador();
$obj->edicionComentario($id,$obser,$idPubli);


  }else{
  	echo "ingrese bie los datos no sea berriondo";
  }








 ?>