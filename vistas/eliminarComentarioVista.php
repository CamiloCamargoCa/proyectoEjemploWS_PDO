<?php 

include '../controlador/ComentarioControlador.php';


  if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])){


$id=@$_REQUEST['id'];

$obj=new ComentarioControlador();
$obj->eliminacionComentario($id);



  }else{
  	echo "ingrese bie los datos no sea berriondo";
  }



 ?>