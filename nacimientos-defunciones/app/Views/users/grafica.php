<?= $this->extend('templates/users/index_user_template') ?>

<?= $this->section('contenido_usuario') ?>

<h1>GRAFICAS</h1>

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



<?= $this->endSection() ?>