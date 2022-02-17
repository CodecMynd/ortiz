<?php
 //$conexion = null;

function conectar()
{
   global $conexion;

   $conexion = mysqli_connect('localhost', 'root', '', 'db_ortiz');

   //$conexion = mysqli_connect('den1.mysql6.gear.host', 'dbortiz', 'Tv4O~77K-R7j', 'dbortiz');
   mysqli_set_charset($conexion, 'utf8');

    //   if (mysqli_connect_error()) {
    //      echo "Error al conectarse con MySQL debido al error ".$conexion->connect_error;
    //   } else {
    //   echo 'conectado';
    //   }

} 

function validarLogin($usuario, $pass){
 global $conexion;
 ini_set('date.timezone', 'America/Mexico_City');
 date('m-d-Y h:i:s a', time() );

 $consulta = sprintf("SELECT * FROM usuarios WHERE usuario = '".$usuario."' AND pass = '".$pass."'  ");
 $respuesta = mysqli_query($conexion, $consulta);

 if($fila = mysqli_fetch_row($respuesta)){
     session_start();
     $_SESSION['id_usuario'] = $fila[0];
     $_SESSION['usuario'] = $usuario;
     $_SESSION['admin'] = $fila[8];
     $id = $_SESSION['id_usuario'] = $fila[0];

     return true;
 }
 return false;
}

function id(){
    session_start();
    return isset($_SESSION['id_usuario']);
}

function esAdmin(){
    return $_SESSION['admin'];
}

function haIniciadoSesion(){
    session_start();
    return isset($_SESSION['usuario']);
}

function desconectar(){
    global $conexion;
    mysqli_close($conexion);
}
?>