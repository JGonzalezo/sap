<?php include('header.php') ?>

<form class="altaAlumno" action="resumenClases.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">INFORMACIÓN DE CLASE</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <!-- Clave Clase -->
            <div class="col-xs-4">
              <label for="clveClase">Clave</label>
              <!--Efecto mediante bootstrap.css de la clase form-control -->
              <input type="text" id="clveClase" class="form-control" name="clveClase" required>
            </div>
            <!-- Clave Carrera -->
            <div class="col-xs-4">
              <label for="clveCar">Carrera</label>
              <select id="clveCar" class="form-control" name="clveCar">
                <option value=""></option>
                <option value="varios">Varios</option>
                <option value="LISC">LISC</option>
                <option value="LDI">LDI</option>
                <option value="LEPE">LEPE</option>
              </select>
            </div>
            <!-- Creditos -->
            <div class="col-xs-4">
              <label for="nomMat">Materia</label>
              <input type="text" id="nomMat" class="form-control" name="nomMat" required>
            </div>
          </div>

          <div class="row">
            <!-- Grado -->
            <div class="col-xs-1">
              <label for="grado">Grado</label>
              <input type="text" id="grado" name="grado" class="form-control" required>
            </div>
            <!-- Hora -->
            <div class="col-xs-3">
              <label for="clveHora">Hora</label>
              <input type="text" id="clveHora" name="clveHora" class="form-control" required>
            </div>
            <!-- Aula -->
            <div class="col-xs-2">
              <label for="clveAula">Aula</label>
              <input type="text" id="clveAula" name="clveAula" class="form-control" required>
            </div>
            <!-- Maestro -->
            <div class="col-xs-4">
              <label for="maestro">Maestro</label>
              <input type="text" name="maestro" id="maestro" class="form-control" required>
            </div>
          </div>
        </span>
      </div>
    <a href="resumenClases.php">
      <button type="submit" class="btn btn-success">Vista Previa</button>
    </a>
    <button type="button" class="btn btn-danger">Cancelar</button>
  </div>
</form>

<?php include('footer.php') ?>
