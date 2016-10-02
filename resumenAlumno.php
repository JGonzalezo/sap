<?php session_start(); ?>

<?php include('header.php') ?>

<?php

  require('connMySQL.php');

  $_SESSION['ap'] = $_POST['aPaterno'];
  $_SESSION['am'] = $_POST['aMaterno'];
  $_SESSION['nombre'] = $_POST['nombre'];
  $_SESSION['fNac'] = $_POST['fNac'];
  $_SESSION['edad'] = $_POST['edad'];
  $_SESSION['edoCivil'] = $_POST['edoCivil'];
  $_SESSION['curp'] = $_POST['curp'];
  $_SESSION['tel'] = $_POST['tel'];
  $_SESSION['cel'] = $_POST['cel'];
  $_SESSION['correo'] = $_POST['correo'];
  $_SESSION['calle'] = $_POST['calle'];
  $_SESSION['nExt'] = $_POST['nExt'];
  $_SESSION['nInt'] = $_POST['nInt'];
  $_SESSION['col'] = $_POST['col'];
  $_SESSION['cdad'] = $_POST['cdad'];
  $_SESSION['cdadNac'] = $_POST['cdadNac'];
  $_SESSION['edoNac'] = $_POST['edoNac'];
  $_SESSION['paisNac'] = $_POST['paisNac'];
  $_SESSION['escProc'] = $_POST['escProc'];
  $_SESSION['esp'] = $_POST['esp'];
  $_SESSION['prom'] = $_POST['prom'];
  $_SESSION['fEgreso'] = $_POST['fEgreso'];
  $_SESSION['campus'] = $_POST['campus'];
  $_SESSION['carrera'] = $_POST['carrera'];
  $_SESSION['beca'] = $_POST['beca'];
  $_SESSION['grado'] = $_POST['grado'];
  $_SESSION['numMat'] = $_POST['numMat'];
  $_SESSION['pago'] = $_POST['pago'];
  $_SESSION['mat1'] = $_POST['mat1'];
  $_SESSION['mat2'] = $_POST['mat2'];
  $_SESSION['mat3'] = $_POST['mat3'];
  $_SESSION['mat4'] = $_POST['mat4'];
  $_SESSION['mat5'] = $_POST['mat5'];
  $_SESSION['mat6'] = $_POST['mat6'];
  $_SESSION['mat7'] = $_POST['mat7'];
  $_SESSION['mat8'] = $_POST['mat8'];
  $_SESSION['pago'] = $_POST['pago'];
  $_SESSION['cntoEm'] = $_POST['cntoEm'];
  $_SESSION['prstcoEm'] = $_POST['prstcoEm'];
  $_SESSION['telEm'] = $_POST['telEm'];
  $_SESSION['seg'] = $_POST['seg'];
  $_SESSION['alrgEnf'] = $_POST['alrgEnf'];
  $_SESSION['obs'] = $_POST['obs'];

?>

<h2 style="text-align:center">Resumen de Información</h2>
<p style="text-align:center">
  Favor de verificar que la información sea la correcta antes de guardar.
</p>

<form class="altaAlumno" action="guardarAlumno.php" method="post">
  <!--Panel que contiene todos los elemtnos del formulario, CSS en bootstrap por clase y estilo.css por id-->
  <div class="panel panel-primary" id="panelWrap">
    <!--Titlo en el formulario de bootstrap-->
    <div class="panel-heading">
      <h3 class="panel-title">INFORMACION DEL ALUMNO</h3>
    </div>
      <!--El contenido del formulario se separa por esta div de boostrap-->
      <div class="panelContent">
        <span class="panelItems">
          <div class="row">
            <!-- <label for="matricula">Matricula</label>
            <p>

            </p> -->
          </div>
          <!-- Fila 1 -->
          <div class="row">
            <!--Se utiliza el grid system de bootstrap para acomodar los campos, cada campo tiene algun derivado de la clase col-TAMAÑO-NUMCOL -->
            <!-- Apellido Paterno -->
            <div class="col-xs-4">
              <label for="aPaterno">Apellido Paterno</label>
              <!--Efecto mediante bootstrap.css de la clase form-control -->
              <p>
                <?php echo $_SESSION['ap']; ?>
              </p>
            </div>
            <!-- Apellido Materno -->
            <div class="col-xs-4">
              <label for="am">Apellido Materno</label>
              <p>
                <?php echo $_SESSION['am']; ?>
              </p>
            </div>
            <!-- Nombre -->
            <div class="col-xs-4">
              <label for="nombre">Nombre(s)</label>
              <p>
                <?php echo $_SESSION['nombre']; ?>
              </p>
            </div>
          </div>
          <!-- Fila 2 -->
          <div class="row">
            <!-- Fecha de nacimiento -->
            <div class="col-md-4">
              <label for="fNac">Fecha de Nacimeinto</label>
              <p>
                <?php echo $_SESSION['fNac']; ?>
              </p>
            </div>
              <!-- Edad -->
            <div class="col-md-1">
              <label for="edad">Edad</label>
              <p>
                <?php echo $_SESSION['edad']; ?>
              </p>
            </div>
              <!-- Estado Civil -->
            <div class="col-md-3">
              <label for="edoCivil">Estado Civil</label>
              <p>
                <?php echo $_SESSION['edoCivil']; ?>
              </p>
            </div>
              <!-- CURP -->
            <div class="col-xs-4">
              <label for="curp">CURP</label>
              <p>
                <?php echo $_SESSION['curp']; ?>
              </p>
            </div>
          </div>
          <!-- Fila 3 -->
          <div class="row">
            <!-- Telefono -->
            <div class="col-xs-4">
              <label for="tel">Telefono</label>
              <p>
                <?php echo $_SESSION['tel']; ?>
              </p>
            </div>
            <!-- Celular -->
            <div class="col-xs-4">
              <label for="cel">Celular</label>
              <p>
                <?php echo $_SESSION['cel']; ?>
              </p>
            </div>
            <!-- Correo -->
            <div class="col-xs-4">
              <label for="email">Correo</label>
              <p>
                <?php echo $_SESSION['correo']; ?>
              </p>
            </div>
          </div>
          <!-- Fila 4 -->
          <div class="row">
            <!-- Calle -->
            <div class="col-xs-4">
              <label for="calle">Calle</label>
              <p>
                <?php echo $_SESSION['calle']; ?>
              </p>
            </div>
            <!-- Número exterior -->
            <div class="col-md-1">
              <label for="nExt">N.Ext</label>
              <p>
                <?php echo $_SESSION['nExt']; ?>
              </p>
            </div>
            <!-- Número Interior -->
            <div class="col-md-1">
              <label for="nInt">N.Int</label>
              <p>
                <?php echo $_SESSION['nInt']; ?>
              </p>
            </div>
            <!-- Colonia -->
            <div class="col-md-2">
              <label for="col">Colonia</label>
              <p>
                <?php echo $_SESSION['col']; ?>
              </p>
            </div>
            <!-- Ciudad -->
            <div class="col-md-4">
              <label for="ciudad">Ciudad</label>
              <p>
                <?php echo $_SESSION['cdad']; ?>
              </p>
            </div>
          </div>
          <!-- Fila 5 -->
          <div class="row">
            <!-- Ciudad de nacimiento -->
            <div class="col-md-4">
              <label for="cdadNac">Ciudad de nacimiento</label>
              <p>
                <?php echo $_SESSION['cdadNac']; ?>
              </p>
            </div>
            <!-- Estado de nacimiento -->
            <div class="col-md-4">
              <label for="edoNac">Estado de nacimiento</label>
              <p>
                <?php echo $_SESSION['edoNac']; ?>
              </p>
            </div>
            <!-- Pais de nacimiento -->
            <div class="col-md-4">
              <label for="paisNac">Pais de nacimiento</label>
              <p>
                <?php echo $_SESSION['paisNac']; ?>
              </p>
            </div>
          </div>
          <!-- Fila 6 -->
          <div class="row">
            <!-- Escuela de procedencia -->
            <div class="col-md-4">
              <label for="escProc">Escuela de procedencia</label>
              <p>
                <?php echo $_SESSION['escProc']; ?>
              </p>
              </select>
            </div>
            <!-- Especialidad -->
            <div class="col-md-4">
              <label for="esp">Especialidad</label>
            <p>
              <?php echo $_SESSION['esp']; ?>
            </p>
            </div>
            <!-- Fecha de egreso -->
            <div class="col-md-3">
              <label for="fEgreso">Fecha Egreso</label>
              <p>
                <?php echo $_SESSION['fEgreso']; ?>
              </p>
            </div>
            <!-- Espacio -->
            <div class="col-md-1">
            </div>
            <!-- Promedio -->
            <div class="col-md-1">
              <label for="prom">Prom.</label>
              <p>
                <?php echo $_SESSION['prom']; ?>
              </p>
            </div>
          </div>
        </span>
      </div>
    <!-- Segunda sección de formulario -->
    <div class="panel-heading">
      <h3 class="panel-title">SOLICITUD DE ESTUDIOS</h3>
    </div>
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 7 -->
          <div class="row">
            <!-- Campus -->
            <div class="col-md-4">
              <label for="campus">Campus</label>
              <p>
                <?php echo $_SESSION['campus']; ?>
              </p>
            </div>
            <!-- Carrera -->
            <div class="col-md-4">
              <label for="carrera">Carrera</label>
              <p>
                <?php echo $_SESSION['carrera']; ?>
              </p>
            </div>
            <!-- Beca -->
            <div class="col-md-1">
              <label for="beca">Beca</label>
              <p>
                <?php echo $_SESSION['beca']; ?>
              </p>
            </div>
            <!-- Grado -->
            <div class="col-md-1">
              <label for="grado">Grado</label>
              <p>
                <?php echo $_SESSION['grado']; ?>
              </p>
            </div>
            <!-- Asignaturas -->
            <div class="col-md-1">
              <label for="numMat">Asignaturas</label>
              <p>
                <?php echo $_SESSION['numMat']; ?>
              </p>
            </div>
          </div>
          <!-- Fila 8 -->
          <div class="row">
            <div class="col-md-8">
              <label>Materias Seleccionadas:</label>
            </div>
          </div>
          <!-- Fila 9 -->
          <div class="row">
            <div class="col-md-3">
              <label for="mat1">Materia 1</label>
              <p>
                <?php
                  if (strlen($_SESSION['mat1']) == 0) {
                    echo "N/A";
                  } else {
                    echo $_SESSION['mat1'];
                  }
                 ?>
              </p>
            </div>

            <div class="col-md-3">
              <label for="mat2">Materia 2</label>
              <p>
                <?php
                  if (strlen($_SESSION['mat2']) == 0) {
                    echo "N/A";
                  }else {
                    echo $_SESSION['mat2'];
                  }
                 ?>
              </p>
            </div>

            <div class="col-md-3">
              <label for="mat3">Materia 3</label>
              <p>
                <?php
                  if (strlen($_SESSION['mat3']) == 0) {
                    echo "N/A";
                  }else {
                    echo $_SESSION['mat3'];
                  }
                 ?>
              </p>
            </div>

            <div class="col-md-3">
              <label for="mat4">Materia 4</label>
              <p>
                <?php
                  if (strlen($_SESSION['mat4']) == 0) {
                    echo "N/A";
                  }else {
                    echo $_SESSION['mat4'];
                  }
                 ?>
              </p>
            </div>
          </div>
          <!-- Fila 14 -->
          <div class="row">
            <div class="col-md-3">
              <label for="mat5">Materia 5</label>
              <p>
                <?php
                  if (strlen($_SESSION['mat5']) == 0) {
                    echo "N/A";
                  }else {
                    echo $_SESSION['mat5'];
                  }
                 ?>
              </p>
            </div>

            <div class="col-md-3">
              <label for="mat6">Materia 6</label>
              <p>
                <?php
                  if (strlen($_SESSION['mat6']) == 0) {
                    echo "N/A";
                  }else {
                    echo $_SESSION['mat6'];
                  }
                 ?>
              </p>
            </div>

            <div class="col-md-3">
              <label for="mat7">Materia 7</label>
              <p>
                <?php
                  if (strlen($_SESSION['mat7']) == 0) {
                    echo "N/A";
                  }else {
                    echo $_SESSION['mat7'];
                  }
                 ?>
              </p>
            </div>

            <div class="col-md-3">
              <label for="mat8">Materia 8</label>
              <p>
                <?php
                  if (strlen($_SESSION['mat8']) == 0) {
                    echo "N/A";
                  }else {
                    echo $_SESSION['mat8'];
                  }
                 ?>
              </p>
            </div>
          </div>
          <!-- Fila 15 -->
          <div class="row">
            <div class="col-md-3">
              <!-- Mensualidad -->
              <label for="pago">Mensualidad</label>
              <p>
                <?php echo $_SESSION['pago']; ?>
              </p>
            </div>
          </div>
        </span>
      </div>

    <div class="panel-heading">
      <h3 class="panel-title">INFORMACION ADICIONAL</h3>
    </div>
      <div class="panelContent">
        <span class="panelItems">
          <!-- Fila 16 -->
          <div class="row">
              <div class="col-md-4">
                <label for="cntoEm">Contacto de emergencia</label>
                <p>
                  <?php echo $_SESSION['cntoEm']; ?>
                </p>
              </div>

              <div class="col-md-4">
                <label for="prstcoEm">Parentesco</label>
                <p>
                  <?php echo $_SESSION['prstcoEm']; ?>
                </p>
              </div>

              <div class="col-md-4">
                <label for="telEm">Telefono de emergencia</label>
                <p>
                  <?php echo $_SESSION['telEm']; ?>
                </p>
              </div>
            </div>
          <!-- Fila 17 -->
          <div class="row">
              <div class="col-md-4">
                <label for="seg">Seguro</label>
                <p>
                  <?php echo $_SESSION['seg']; ?>
                </p>
              </div>
            </div>
          <!-- Fila 18 -->
          <div class="row">
              <div class="col-md-6">
                <label for="enfs">Alergias/Enfermedades</label>
                <p>
                  <?php echo $_SESSION['alrgEnf']; ?>
                </p>
              </div>

              <div class="col-md-6">
                <label for="obs">Observaciones</label>
                <p>
                  <?php echo $_SESSION['obs']; ?>
                </p>
              </div>
            </div>
        </span>
      </div>
      <a href="guardarAlumno.php">
        <button type="submit" class="btn btn-success">Guardar</button>
      </a>
      <a href="almoAlta.php">
        <button type="button" class="btn btn-danger">Cancelar</button>
      </a>
  </div>
</form>


<?php include('footer.php') ?>
