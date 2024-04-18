<h1>Записи</h1>

<ol>
    <?php
    foreach ($records as $record) {
        echo "<li value='\"{$record->id}\"'>
              Врач: {$record->doctor->name} {$record->doctor->surname} {$record->doctor->patronymic} {$record->doctor->special->name}<br>
              Пациент: {$record->pacient->name} {$record->pacient->surname} {$record->pacient->patronymic}<br>
              Статус: <br>
              {$record->status->name}<br>
              Дата: {$record->date_record}<br>
              </li>";
    }
    ?>
</ol>

<button onclick="window.location.href='/createRecord'">Создать запись</button>

<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>Врач <select name="id">
            <?php foreach ($records_open as $record){
                echo '<option value="' . $record->id . '">' . $record->id.'</option>';
            } ?>
        </select></label>
    <button>Отменить запись</button>
</form>
