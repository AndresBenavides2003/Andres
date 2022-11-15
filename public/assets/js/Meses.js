$(document).ready(function() {
    var opcion;
    var ContadorM = 0;
    $("#ConsultarMeses").submit(function(e){
        e.preventDefault();
        mes = $("#meses").val();
        tipo = $("#utilidades").val();
        $("#btn-return").click(function(){
            $("#C_Meses").show(1000);
            $("#TablaMeses").hide(500);
            $("#btn-return").hide(500);
        });
        if (mes === "null" || tipo === "null"){
            Swal.fire({
                position: 'center',
                icon: 'warning',
                title: 'Faltan Campos Por Llenar',
                ShowConfirmButton: false,
                timer: 2000
            }).setTimeout(function() {
                window.location.href = "app/views/Plantilla.php";
            }, 3000);
        }else{
            if (tipo === "herramienta"){
                Swal.fire({
                    position: 'center',
                    icon: '',
                    title: 'Buscando...',
                    ShowConfirmButton: false,
                    timer: 1000
                });
                $("#C_Meses").hide(500);
                $("#TablaMeses").show(1000);
                $("#btn-return").show(1000);


                var tablaMeses = $('#TablaConsultaMeses').DataTable({ retrieve: true, paging: false });
                tablaMeses.destroy();
                tablaMeses = $("#TablaConsultaMeses").DataTable({
                    "ajax": { 
                        "url": "app/controllers/ControladorMeses.php",
                        "method": "POST",
                        "data": { 
                            opcion : "listarSolicitudesHerramientaPorMeses"
                        },
                        "dataSrc": ""
                    },
                    "columns": [
                        {
                            data: null,
                            render: function (data, type, row) {
                                ContadorM = ContadorM + 1;
                                return "<b>" + ContadorM + "</b>";
                            }
                        },
                        {"data": "idSolicitud"},
                        {"data": "codigo"},
                        {"data": "descripcion"},
                        {"data": "tipo"},
                        {"data": "persona"},
                        {"data": "ficha"},
                        {"data": "fecha"}
                    ]
                })
            }
            else if (tipo === "material"){
                Swal.fire({
                    position: 'center',
                    icon: '',
                    title: 'Buscando...',
                    ShowConfirmButton: false,
                    timer: 1000
                });
                $("#C_Meses").hide(500);
                $("#TablaMeses").show(1000);
                $("#btn-return").show(1000);


                var tablaMeses = $('#TablaConsultaMeses').DataTable({ retrieve: true, paging: false });
                tablaMeses.destroy();
                tablaMeses = $("#TablaConsultaMeses").DataTable({
                    "ajax": { 
                        "url": "app/controllers/ControladorMeses.php",
                        "method": "POST",
                        "data": { 
                            opcion : "listarSolicitudesMaterialesPorMeses"
                        },
                        "dataSrc": ""
                    },
                    "columns": [
                        {
                            data: null,
                            render: function (data, type, row) {
                                ContadorM = ContadorM + 1;
                                return "<b>" + ContadorM + "</b>";
                            }
                        },
                        {"data": "idSolicitud"},
                        {"data": "codigo"},
                        {"data": "descripcion"},
                        {"data": "tipo"},
                        {"data": "persona"},
                        {"data": "ficha"},
                        {"data": "fecha"}
                    ]
                })
            }
            else if (tipo === "equipo"){
                Swal.fire({
                    position: 'center',
                    icon: '',
                    title: 'Buscando...',
                    ShowConfirmButton: false,
                    timer: 1000
                });
                $("#C_Meses").hide(500);
                $("#TablaMeses").show(1000);
                $("#btn-return").show(1000);


                var tablaMeses = $('#TablaConsultaMeses').DataTable({ retrieve: true, paging: false });
                tablaMeses.destroy();
                tablaMeses = $("#TablaConsultaMeses").DataTable({
                    "ajax": { 
                        "url": "app/controllers/ControladorMeses.php",
                        "method": "POST",
                        "data": { 
                            opcion : "listarSolicitudesEquipoPorMeses"
                        },
                        "dataSrc": ""
                    },
                    "columns": [
                        {
                            data: null,
                            render: function (data, type, row) {
                                ContadorM = ContadorM + 1;
                                return "<b>" + ContadorM + "</b>";
                            }
                        },
                        {"data": "idSolicitud"},
                        {"data": "codigo"},
                        {"data": "descripcion"},
                        {"data": "tipo"},
                        {"data": "persona"},
                        {"data": "ficha"},
                        {"data": "fecha"}
                    ]
                })
            }
            
            
        }
        var Cuerpo = $('#C_Meses');
        $("#btn-return").click(function(){
            $("#C_Meses").show(1000);
            $("#TablaMeses").hide(500);
            $("#btn-return").hide(500);
            Cuerpo.ajax.reload(null, false);
        });
        
    })
})