<?= $this->extend('templates/dashboard_index') ?>

<?= $this->section('contenido') ?>

<div class="jumbotron">
  <h1 class="display-4 text-center">
    Sistema de consultas <small class="d-block">INEC</small>
  </h1>
  <div class="text-center">
    <img class="img-img-fluid w-50"
        src="https://www.presidencia.gob.ec/wp-content/uploads/2019/05/Captura-de-pantalla-2019-05-15-a-las-23.03.17.png" />
  </div>

  <p class="lead">
    El actual sistema es el encargado de realizar consultas y presentar los datos de las defunciones y nacimientos dados en el Ecuador.
    </p>
  <hr class="my-4">
  <p>
    Proyecto integrador P56 - Gestion de base de datos - Sistemas de Información - Software Libre.
  </p>

</div>

<?= $this->endSection() ?>