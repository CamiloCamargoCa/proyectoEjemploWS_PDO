<?php 

include '../controlador/PublicacionControlador.php';


  if (isset($_REQUEST['titulo']) && !empty($_REQUEST['titulo'])&&
  isset($_REQUEST['img']) && !empty($_REQUEST['img'])&&
  isset($_REQUEST['descrip']) && !empty($_REQUEST['descrip'])&&
  isset($_REQUEST['fecha']) && !empty($_REQUEST['fecha'])&&
  isset($_REQUEST['ciudad']) && !empty($_REQUEST['ciudad'])&&
  isset($_REQUEST['idUsu']) && !empty($_REQUEST['idUsu'])){

$titulo=$_REQUEST['titulo'];
$img=$_REQUEST['img'];
$descrip=$_REQUEST['descrip'];
$fecha=$_REQUEST['fecha'];
$ciudad=$_REQUEST['ciudad'];
$idUsu=$_REQUEST['idUsu'];

$objLogin=new PublicacionControlador();
$objLogin->registroPublicaciones($titulo,$img,$descrip,$fecha,$ciudad,$idUsu);

  }else{
  	echo "ingrese bie los datos no sea berriondo";
  }





 ?>