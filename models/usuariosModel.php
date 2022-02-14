<?php
function crearConexion(){
    $servidor="localhost";
    $baseDatos="juego"; 
    $usuario= "root";
    $pass="root";
    // $usuario= "developer";
    // $pass="developer";
    try {
        return new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
    } catch (PDOException $e) {
        return false;
    }
}

function comprobarUsuario($usuario){

    try {
        $conexion = crearConexion();
        $consulta = $conexion->prepare("SELECT * FROM `usuarios` WHERE `usuario` LIKE :usuario");
        $parametros = array(":usuario" => $usuario);
        $consulta->execute($parametros);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    } catch (PDOException $e) {
        return false;
    }
    }

function insertaUser($usuario, $contraseña){
    try {
        $conexion=crearConexion();
        $sqlInsert=$conexion->prepare("INSERT INTO usuarios ( usuario, contraseña)  VALUES (?, ?)");
        $sqlInsert->bindParam(1, $usuario);
        $sqlInsert->bindParam(2, $contraseña);
        
    
       $sqlInsert->execute();
        
        $last_id = $conexion->lastInsertId();
        $conexion = null;
        return $last_id;
    } catch (Throwable $e) {
        
    }
}
