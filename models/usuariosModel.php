<?php
function crearConexion()
{
    $servidor = "localhost";
    $baseDatos = "juego";
    $usuario = "developer";
    $pass = "developer";
    try {
        return new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
    } catch (PDOException $e) {
        return false;
    }
}

function comprobarUsuario($usuario)
{

    try {
        $conexion = crearConexion();
        $consulta = $conexion->prepare("SELECT * FROM `puntuacion` WHERE `usuario` LIKE :usuario");
        $parametros = array(":usuario" => $usuario);
        $consulta->execute($parametros);
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        $conexion = null;
        return $resultado;
    } catch (PDOException $e) {
        return false;
    }
}

function insertaUser($usuario)
{
    try {
        $conexion = crearConexion();
        $sqlInsert = $conexion->prepare("INSERT INTO puntuacion (usuario)  VALUES (?)");
        $sqlInsert->bindParam(1, $usuario);

        $sqlInsert->execute();


        $conexion = null;
        return $sqlInsert;
    } catch (Throwable $e) {
    }
}
/*insertaUser("ruben");*/