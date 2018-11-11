<?php 


include '../controlador/UsuarioControlador.php';






  if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])){


$id=@$_REQUEST['id'];

$obj=new UsuarioControlador();
$obj->eliminacionUsuario($id);



  }else{
  	echo "ingrese bien los datos no sea berriondo";
  }









 ?>