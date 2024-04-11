<h1>Список пациентов</h1>
<ol>
    <?php
    foreach ($patients as $patient) {
        echo "<li>{$patient->name} {$patient->surname} {$patient->patronymic}, {$patient->birthday}</li>";
    }
    ?>
</ol>

<button onclick="window.location.href='/add_pacient'">Создать пациента</button>