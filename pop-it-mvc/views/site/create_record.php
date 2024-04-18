<h1>Создать запись</h1>
<?php
if (app()->auth::check()):
    ?>
    <form method="post">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label>Врач <select name="doctor_id">
                <?php foreach ($doctors as $doctor){
                    echo '<option value="' . $doctor->id . '">' . $doctor->name .' '.$doctor->surname.' '.$doctor->patronymic.' Категория:'.$doctor->special->name. '</option>';
                    //echo "<option value="{$doctor->id}"> {$doctor->name} {$doctor->surname} {$doctor->patronymic} {$doctors->special->name}</option>";
                } ?>
            </select></label>
        <br>
        <label>Пациент <select name="pacient_id">
                <?php foreach ($patients as $patient){
                    echo "<option value={$patient->id}>{$patient->name} {$patient->surname} {$patient->patronymic}</option>";
                } ?>
            </select></label>
        <label>Дата <input type="date" name="date_record"></label>
        <button>Создать запись</button>
    </form>
<?php endif;
