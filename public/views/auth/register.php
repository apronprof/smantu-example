<?php require(PUB . 'views/header.php') ?>

<h2>Регистрация</h2>
<form method="POST" action="<?= APPURL  ?>/reg">
    <label>Username: <input type="text" name="username" required></label><br>
    <label>Ім'я': <input type="text" name="name" required></label><br>
    <label>Пароль: <input type="password" name="password" required></label><br>
    <label>Підтвердження пароля: <input type="password" name="password_c" required></label><br>
    <button type="submit">Зарегіструватися</button>
</form>

<?php require(PUB . 'views/footer.php') ?>
