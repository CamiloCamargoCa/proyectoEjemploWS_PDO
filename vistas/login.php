<?php 

include '../controlador/UsuarioControlador.php';






  if (isset($_REQUEST['usu']) && !empty($_REQUEST['usu']) &&
               isset ($_REQUEST['pass']) && !empty($_REQUEST['pass']) ){


$usu=@$_REQUEST['usu'];
$pass=@$_REQUEST['pass'];
$objLogin=new UsuarioControlador();

$objLogin->validarUsuario($usu,$pass);



  }else{
  	echo "ingrese bie los datos no sea berriondo";
  }



  




/*$cnx=new PDO("mysql:host=localhost;dbname=clasificado","root","");
$res=$cnx->prepare("select * from usuario where correo='$usu' and contrasena='$pass'");
//$res=$cnx->datos("select * from usuario where correo='$usu' and contrasena='$pass'");
$res->execute();



//$datos=array();
$datos=$res->fetchAll();
foreach ($res as $row) {
	$datos[]=$row;
}


echo json_encode($datos);


$cnx=null;*/



 ?>