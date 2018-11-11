<?php 


include '../controlador/ComentarioControlador.php';






  if (isset($_REQUEST['obser']) && !empty($_REQUEST['obser']) &&
               isset ($_REQUEST['idPubli']) && !empty($_REQUEST['idPubli']) ){


$obser=@$_REQUEST['obser'];
$idPubli=@$_REQUEST['idPubli'];

$obj=new ComentarioControlador();
$obj->registroComentario($obser,$idPubli);



  }else{
  	echo "ingrese bie los datos no sea berriondo";
  }




 ?>