<main id="main" class="main">

  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title" style="font-size:30px;">PERSONAL &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" id="btn-return" type="button" style="float:right; display:none;" data-bs-toggle="modal">Regresar</button>
        </div>
      </div>
    </div>
  </div>

    <!--  CUERPO -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body" id="C_Meses">
            <h5 class="card-title"></h5>
            <form action="" method="POST" id="ConsultarMeses">
              <div class="row" id="DatosMeses">
                <div class="col-md-6">
                  <label for="exampleInputEmail1" style="font-size:15px;">Seleccionar Tipo</label>
                  <select class="form-control" data-size="3" id="utilidades" name="utilidades" required>
                    <option value="null">--SELECCIONE--</option>
                    <option value="herramienta">HERRAMIENTAS</option>
                    <option value="material">MATERIALES</option>
                    <option value="equipo">EQUIPOS</option> 
                  </select>
                </div>
                <div class="col-md-6" id="listaMeses">
                  <label for="exampleInputEmail1" style="font-size:15px;">Seleccionar Tipo</label>
                  <select class="form-select" data-width="100%" data-size="3" name="meses" id="meses" required>
                    <option value="null">--SELECIONE--</option>
                    <option value="01">ENERO</option>
                    <option value="02">FEBRERO</option>
                    <option value="03">MARZO</option>
                    <option value="04">ABRIL</option>
                    <option value="05">MAYO</option>
                    <option value="06">JUNIO</option>
                    <option value="07">JULIO</option>
                    <option value="08">AGOSTO</option>
                    <option value="09">SEPTIEMBRE</option>
                    <option value="10">OCTUBRE</option>
                    <option value="11">NOVIEMBRE</option>
                    <option value="12">DICIEMBRE</option>
                  </select><br>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">ENVIAR</button>
                </div>
              </div>
              
            </form>
          </div>
        </div>
        
        <div class="row" id="TablaMeses" style="display: none;">
          <div class="card">
            <h5 class="card-title" style="text-align:center;">MES DE </h5>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table" id="TablaConsultaMeses" style="width:100%">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">ID SOLICITUD</th>
                      <th scope="col">CODIGO</th> 
                      <th scope="col">DESCRIPCION</th>
                      <th scope="col">TIPO</th>
                      <th scope="col">NOMBRE</th>
                      <th scope="col">FICHA</th>
                      <th scope="col">FECHA</th>
                    </tr>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        


      </div>
    </div>

</main>