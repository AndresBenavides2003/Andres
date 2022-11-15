<?php

require_once "Conexion.php";

Class ModeloMeses{
    static public function listarSolicitudesHerramientaPorMeses(){
        $x=Conexion::conectar()->prepare("SELECT S.id_solicitud as idSolicitud, S.codigo as codigo, 
        S.nombre as nombre, S.descripcion as descripcion, S.persona as persona, S.ficha as ficha, S.tipo as tipo,
        S.fecha as fecha FROM tbl_solicitudes as S WHERE S.tipo = 'herramienta' and S.fecha between '2022-05-01 00:00:00' and '2022-05-30 23:59:59'");
        $x->execute();
        return $x->fetchAll(PDO::FETCH_ASSOC);
    }
    static public function listarSolicitudesMaterialesPorMeses(){
        $x=Conexion::conectar()->prepare("SELECT S.id_solicitud as idSolicitud, S.codigo as codigo, 
        S.nombre as nombre, S.descripcion as descripcion, S.persona as persona, S.ficha as ficha, S.tipo as tipo,
        S.fecha as fecha FROM tbl_solicitudes as S WHERE S.tipo = 'material'");
        $x->execute();
        return $x->fetchAll(PDO::FETCH_ASSOC);
    }
    static public function listarSolicitudesEquipoPorMeses(){
        $x=Conexion::conectar()->prepare("SELECT S.id_solicitud as idSolicitud, S.codigo as codigo, 
        S.nombre as nombre, S.descripcion as descripcion, S.persona as persona, S.ficha as ficha, S.tipo as tipo,
        S.fecha as fecha FROM tbl_solicitudes as S WHERE S.tipo = 'equipo'");
        $x->execute();
        return $x->fetchAll(PDO::FETCH_ASSOC);
    }
    
}