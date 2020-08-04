<?= $this->extend('users/consulta') ?>

<?= $this->section('forms') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <label><h2> NIVEL EDUCACIÓN </h2></label>
            <form action="/user/nacimiento/educacion" method="post" >
            <div class="input-group">
                <select name=estudio class="custom-select form-control" id="inputGroupSelect04" aria-label="Example select with button addon">
                <?php
                    foreach ($results as $row ) {
                        echo "<option value=";
                        echo $row->nivel_inst;
                        echo ">";
                        echo $row->nivel_inst;
                        echo "</option>";
                    }
                ?>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" style="border-radius: 12px;" type="submit">CONSULTAR</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
       <?php
       if ($flag==1){
           echo $estudio;
           echo "<br/>";
           echo $table;
       } 
        ?>
    </div>
</div>

<?= $this->endSection() ?>