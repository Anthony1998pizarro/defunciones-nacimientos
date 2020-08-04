<?= $this->extend('users/consulta') ?>

<?= $this->section('forms') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <label><h2> PROVINCIA </h2></label>
            <div class="input-group">
            <form action="/user/nacimiento/provincia" method="post" >
                <div class="input-group-append">
                <select name="provincia" class="custom-select form-control" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <?php
                    foreach ($results as $row ) {
                        echo "<option value=";
                        echo $row->provincia;
                        echo ">";
                        echo $row->provincia;
                        echo "</option>";
                    }
                    ?>
                </select>
                    <button class="btn btn-outline-secondary" style="border-radius: 12px;" type="submit">CONSULTAR</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="row">
       <?php
       if ($flag==1){
           echo $provincia;
           echo "<br/>";
           echo $table;
       } 
        ?>
    </div>
</div>

<?= $this->endSection() ?>