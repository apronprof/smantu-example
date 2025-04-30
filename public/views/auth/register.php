<?= require(PUB . 'views/header.php') ?>

<h2>Регистрация</h2>
<form method="POST" action="<?= APPURL  ?>/reg">
    <label>Username: <input type="text" name="name" required></label><br>
    <label>Пароль: <input type="password" name="password" required></label><br>
    <label>Підтвердження пароля: <input type="password" name="password_confirmation" required></label><br>
    <button type="submit">Зарегистрироваться</button>
</form>

<?= require(PUB . 'views/footer.php') ?>
