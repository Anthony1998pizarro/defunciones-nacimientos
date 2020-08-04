<?= $this->extend('users/consulta') ?>

<?= $this->section('forms') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <label><h2> CAUSA DEFUNCIÓN </h2></label>
            <div class="input-group">
                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                <?php
                    foreach ($results as $row ) {
                        echo "<option value=";
                        echo $row->sem_gest;
                        echo ">";
                        echo $row->sem_gest;
                        echo "</option>";
                    }
                ?>
                </select>
            <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">CONSULTAR</button>
        </div>
</div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>