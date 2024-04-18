<h2>Добавить нового доктора</h2>
<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>Имя <input type="text" name="name"></label>
    <label>Фамилия <input type="text" name="surname"></label>
    <label>Отчество <input type="text" name="patronymic"></label>
    <label>Дата рождения <input type="date" name="birthday"></label>
    <br><label>Специальности</label>
    <select name="special_id">
        <?php foreach ($specials as $special) {
            echo '<option value="' . $special->id . '">' . $special->name . '</option>';
        }
        ?>
    </select>
    <button>Создать</button>
</form>