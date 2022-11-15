<?php

require_once "Conexion.php";

Class ModeloLogin{
    static public function DatosSolicitudes($fecha){
        $x=Conexion::conectar()->prepare("SELECT S.codigo as codigo, S.tipo as tipo, 
        S.descripcion as descripcion, S.id_solicitud as id_solicitud FROM tbl_solicitudes as S WHERE S.fecha BETWEEN '2022-04-01' AND '2022-04-21' = :fecha");
        $x->bindParam(":fecha", $fecha, PDO::PARAM_STR);
        $x->execute();
        return $x->fetch();
    }
}