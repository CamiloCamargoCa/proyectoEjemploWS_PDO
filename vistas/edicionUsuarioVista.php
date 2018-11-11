<?php 

include '../controlador/UsuarioControlador.php';





  if (isset($_REQUEST['id']) && !empty($_REQUEST['id']) &&
              isset($_REQUEST['nom']) && !empty($_REQUEST['nom']) &&
               isset ($_REQUEST['ape']) && !empty($_REQUEST['ape'])&&
               isset($_REQUEST['tele']) && !empty($_REQUEST['tele']) &&
               isset ($_REQUEST['celu']) && !empty($_REQUEST['celu'])&&
               isset($_REQUEST['usu']) && !empty($_REQUEST['usu']) &&
               isset ($_REQUEST['pass']) && !empty($_REQUEST['pass'])){


    $id=@$_REQUEST['id'];
  	$nom=@$_REQUEST['nom'];
$ape=@$_REQUEST['ape'];
$tele=@$_REQUEST['tele'];
$celu=@$_REQUEST['celu'];
$usu=@$_REQUEST['usu'];
$pass=@$_REQUEST['pass'];

$obj=new UsuarioControlador();
$obj->edicionUsuario($id,$nom,$ape,$tele,$celu,$usu,$pass);

  }else{
  	  	echo "ingrese bien los datos no sea berriondo";

  }