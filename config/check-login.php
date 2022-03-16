<?php
require 'functions.php';
ini_set('date.timezone',  'America/Mexico_City');
$date = date('Y-m-d H:i:s');
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

conectar();

//validar tus datos mediante la funcion validarLogin
if(validarLogin($usuario, $pass)){
    $id = $_SESSION['id_usuario'];
    $estatus = "Online";

    $query = ("UPDATE usuarios SET estatus = '$estatus', ultima_conexion = '$date' WHERE id_usuario = $id");
    $result = mysqli_query($conexion, $query);

    //acedemos al sistemas
    if(esAdmin())
    header('Location: ../pages/admin/panelAdmin.php');
    else header('Location: ../pages/admin/panelAdmin.php');
}else{
    //si no es verdadero regresamos al formulario inicial
?>

<script>
    alert('Los datos ingresados son incorrectos.')
    location.href = '../index.php';
</script>

<?php
desconectar();
}
?>