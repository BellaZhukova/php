<h2>Регистратура</h2>
<h3><?= $message ?? ''; ?></h3>
    <form method="post" style="border: 1px solid black; display: flex; flex-direction: column;
gap: 10px; width: 300px; align-items: center; justify-content: center">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label>Имя <input type="text" name="name"></label>
        <label>Фамилия <input type="text" name="surname"></label>
        <label>Отчество <input type="text" name="patronymic"></label>
        <label>Дата рождения <input type="date" name="birthday"></label>
        <button>Создать пациента</button>
    </form>