<?php include 'header.php'; ?>

<form class="altaAlumno" action="resumenHorario.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">INFORMACIÓN DE HORARIOS</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <!-- Clave Hora -->
            <div class="col-xs-4">
              <label for="clveHora">Clave</label>
              <!--Efecto mediante bootstrap.css de la clase form-control -->
              <input type="text" id="clveCar" class="form-control" name="clveHora" required>
            </div>
            <!-- Nombre Hora -->
            <div class="col-xs-4">
              <label for="hora">Hora</label>
              <input type="text" id="hora" class="form-control" name="hora" required>
            </div>
          </div>
        </span>
      </div>
    <a href="resumenHorario.php">
      <button type="submit" class="btn btn-success">Vista Previa</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include 'footer.php'; ?>
