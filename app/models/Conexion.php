<?php
//conexion a base de datos parametrizacion
class Conexion{
    public  static function conectar(){
        $link = new PDO("mysql:host=localhost; dbname=senasubs_siginv", "root", "");
        return $link;
    }
}