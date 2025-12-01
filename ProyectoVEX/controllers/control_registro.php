<?php
require_once '../models/usuario.php';
//
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $datos = [
        'nombre'      => $_POST['nombre'],
        'ap_paterno'  => $_POST['ap_paterno'],
        'ap_materno'  => $_POST['ap_materno'],
        'sexo'        => $_POST['sexo'],
        'email'       => $_POST['email'],
        'password'    => $_POST['password']
    ];

    // Ejecutar el procedimiento almacenado a través del modelo
    $mensaje = Usuario::registrar($datos);
    var_dump($mensaje); // prueba temporal
    // Redirigir según el resultado
    if ($mensaje === 'Registro de asistente exitoso') {
        // Crear sesión automáticamente
        session_start();
        $_SESSION['asistente_logged_in'] = true;
        $_SESSION['asistente_nombre'] = $datos['nombre']; // o el campo que quieras 
        
        header("Location: ../views/dashboards/asistenteDashboard.php");
        exit();
    } else {
        header("Location: ../views/register/registro.php?error=" . urlencode($mensaje));
        exit();
    }
}
?>
