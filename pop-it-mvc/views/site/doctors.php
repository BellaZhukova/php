<h1>Список докторов</h1>
<ol>
    <?php
    foreach ($doctors as $doctor) {
        echo "<li>{$doctor->name} {$doctor->surname} {$doctor->patronymic}, {$doctor->birthday} {$doctor->special->name}</li>";
    }
    ?>
</ol>

<button onclick="window.location.href='/addDoctor'">Создать врача</button>