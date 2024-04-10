<h2>Регистратура</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
        <label>Имя <input type="text" name="name"></label>
        <label>Фамилия <input type="text" name="surname"></label>
        <label>Отчество <input type="text" name="patronymic"></label>
        <label>Дата рождения <input type="date" name="date"></label>
        <button>Записать пациента</button>
    </form>
<?php endif;