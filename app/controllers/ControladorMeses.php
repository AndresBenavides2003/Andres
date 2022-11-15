<?php

if(isset($_POST["opcion"]))
{
		require_once "../models/ModeloMeses.php";
}
else
{
	//si la opcion no es mandada por ajax entra aqui
	require_once "app/models/ModeloMeses.php";
}

Class ControladorMeses{
    public function listarSolicitudesHerramientaPorMeses(){
        $respuesta = ModeloMeses::listarSolicitudesHerramientaPorMeses();
        return $respuesta;
    }
    public function listarSolicitudesMaterialesPorMeses(){
        $respuesta = ModeloMeses::listarSolicitudesMaterialesPorMeses();
        return $respuesta;
    }
    public function listarSolicitudesEquipoPorMeses(){
        $respuesta = ModeloMeses::listarSolicitudesEquipoPorMeses();
        return $respuesta;
    }
}

if(isset($_POST["opcion"])){
    if($_POST["opcion"] == "listarSolicitudesHerramientaPorMeses"){
        //$tipo = (isset($_POST['utilidades'])) ? $_POST['utilidades'] : null;
        //$mes = (isset($_POST['meses'])) ? $_POST['meses'] : null;
        $respuesta = new ControladorMeses();
        $respuesta = $respuesta->listarSolicitudesHerramientaPorMeses();
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);

    }
    elseif($_POST["opcion"] == "listarSolicitudesMaterialesPorMeses"){
        //$tipo = (isset($_POST['utilidades'])) ? $_POST['utilidades'] : null;
        //$mes = (isset($_POST['meses'])) ? $_POST['meses'] : null;
        $respuesta = new ControladorMeses();
        $respuesta = $respuesta->listarSolicitudesMaterialesPorMeses();
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }
    elseif($_POST["opcion"] == "listarSolicitudesEquipoPorMeses"){
        //$tipo = (isset($_POST['utilidades'])) ? $_POST['utilidades'] : null;
        //$mes = (isset($_POST['meses'])) ? $_POST['meses'] : null;
        $respuesta = new ControladorMeses();
        $respuesta = $respuesta->listarSolicitudesEquipoPorMeses();
        echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);
    }
    
}