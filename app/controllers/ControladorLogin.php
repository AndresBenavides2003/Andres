<?php

if(isset($_POST["opcion"]))
{
		require_once "../models/ModeloLogin.php";
}
else
{
	//si la opcion no es mandada por ajax entra aqui
	require_once "app/models/ModeloLogin.php";
}

Class ControladorLogin{
    public function DatosSolicitudes($fecha){
        $fecha = $fecha;
	    $r = ModeloLogin::DatosSolicitudes($fecha);

		$datos=
	    	[
		     'id_solicitud' => $r["id_solicitud"],
		     'codigo' => $r["codigo"],
		     'descripcion' => $r["descripcion"],
		     'tipo' =>$r["tipo"]
		   ];
		return $datos;
    }
}