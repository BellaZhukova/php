<h1>Главное меню</h1>
<h3><?= $message ?? ''; ?></h3>
<?php if (app()->auth::user()->role === 1): ?>

<button onclick="window.location.href='/signup'">Сотрудники</button>
<?php elseif (app()->auth::user()->role === 0): ?>
<button onclick="window.location.href='/doctors'">Доктора</button>
<button onclick="window.location.href='/patients'">Пациенты</button>
<?php endif;
