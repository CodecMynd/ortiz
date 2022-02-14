<?php

//validar datos sean ajax para evitar injection sql

if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    require 'functions.php';
    conectar();

    sleep(1); //atrazamos 2 segundos
    session_start(); //crear variable de sesión
    session_id();
    
    $conexion->set_charset('utf8');

    $usuario = $conexion->real_escape_string($_POST['usuario']);
    $pass = $conexion->real_escape_string($_POST['pass']);

    if ($nueva_consulta = $conexion->prepare("SELECT usuario, pass,admin FROM usuarios  WHERE usuario = ?  AND pass = ? ")) {

        
        $nueva_consulta->bind_param('ss', $usuario, $pass);

        $nueva_consulta->execute();

        $resultado = $nueva_consulta->get_result();

        if ($resultado->num_rows == 1) {
            $row = $resultado->fetch_assoc();
            
            $_SESSION['usuario'] = $row; // variable 
   

            echo json_encode(array('error' => false, 'usuario' => $row['admin']));
        } else {
            echo json_encode(array('error' => true));
        }
        $nueva_consulta->close();
    }
}


// injection = ' or '1' = '1