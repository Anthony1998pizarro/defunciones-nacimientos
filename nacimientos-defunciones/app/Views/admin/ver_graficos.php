<?= $this->extend('templates/admin/dashboard_admin') ?>

<?= $this->section('contenido_admin') ?>

<h1>GRAFICAS</h1>

<h2>Nacimientos</h2>

<div class="row">

  <div class="col-md-6">
    <canvas id="nac-cant"></canvas>
  </div>

  <div class="col-md-6">
    <canvas id="nac-asis"></canvas>
  </div>
  
  <div class="col-md-6">
    <canvas id="nac-civ"></canvas>
  </div>
  
  <div class="col-md-6">
    <canvas id="nac-inst"></canvas>
  </div>

  <div class="col-md-6">
    <canvas id="nac-ocu"></canvas>
  </div>
  
  <div class="col-md-6">
    <canvas id="nac-prod"></canvas>
  </div>
</div>

<h2>Defunciones</h2>

<div class="row">

  <div class="col-md-6">
      <canvas id="defs-cant"></canvas>
  </div>
  <div class="col-md-6">
      <canvas id="defs-causa"></canvas>
  </div>
  <div class="col-md-6">
      <canvas id="defs-niv"></canvas>
  </div>
  <div class="col-md-6">
      <canvas id="defs-sem"></canvas>
  </div>
  <div class="col-md-6">
      <canvas id="defs-est"></canvas>
  </div>
  <div class="col-md-6">
      <canvas id="defs-ocu"></canvas>
  </div>
</div>


<?= $this->endSection() ?>