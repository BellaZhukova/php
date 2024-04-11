<h1>Список сотрудников</h1>
<ol>
    <?php
    foreach ($users as $user) {
        echo "<li>{$user->name} {$user->login}</li>";
    }
    ?>
</ol>

<button onclick="window.location.href='/signup'">Создать сотрудников</button>