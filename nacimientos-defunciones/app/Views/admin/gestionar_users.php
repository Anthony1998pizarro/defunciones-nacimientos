<?= $this->extend('templates/admin/dashboard_admin') ?>

<?= $this->section('contenido_admin') ?>

<div class="container">
<h2 class="text-center my-4">Gestion de usuarios</h2>

<table class="table table-hover text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($users as $user): ?>

    <tr>
      <th><?= $user->id?></th>
      <th><?= $user->name?></th>
      <th><?= $user->lastname?></th>
      <th><?= $user->email?></th>
    </tr>
  <?php endforeach ?>

  </tbody>
</table>

</div>


<?= $this->endSection() ?>