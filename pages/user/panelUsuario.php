<?php
session_start();
if(isset($_SESSION['id_usuario'])){
if($_SESSION['id_usuario']['admin'] != 0){
    header('Location: panelAdmin.php');
}
}else{
    header('Location: ../../../index.php');
}
?>
<script>
    alert("user");
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../../config/cerrar-sesion.php">cerrar</a>
</body>
</html>