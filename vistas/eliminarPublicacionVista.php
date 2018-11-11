<?php 

include '../controlador/PublicacionControlador.php';


  if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])){


$id=$_REQUEST['id'];


$objLogin=new PublicacionControlador();
$objLogin->eliminacionPublicaciones($id);

  }else{
  	echo "ingrese bie los datos no sea berriondo";
  }





 ?>