<?php

session_start();
if(isset($_SESSION['sesion usuario'])) {
 // echo "Si existe sesion";
 $usuario_sesion = $_SESSION['sesion usuario'];
 $sql = "SELECT * FROM tb_usuarios WHERE usuarios = '$usuario_sesion'";
 $query = $pdo ->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(fech_style: PDO::FETCH_ASSOC);
foreach ($usuarios as $user){
$nombres_sesion = $user['nombres'];
}

}else{
echo "No existe sesión";
header('Location: '.$URL.'/login');
 }
 