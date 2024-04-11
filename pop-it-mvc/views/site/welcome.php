<h1>Главное меню</h1>
<h3><?= $message ?? ''; ?></h3>
<?php if (app()->auth::user()->role == 1){
    echo "<button onclick=\"window.location.href='/users'\">Сотрудники</button>";
} elseif (app()->auth::user()->role == 0) {
    echo "<button onclick=\"window.location.href='/doctors'\">Доктора</button>";
    echo "<br>";
    echo "<button onclick=\"window.location.href='/patients'\">Пациенты</button>";
    echo "<br>";
    echo "<button onclick=\"window.location.href='/records'\">Записи</button>";
}
?>
