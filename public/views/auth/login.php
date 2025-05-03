<?php require(PUB . 'views/header.php') ?>

<h2>Увійти</h2>
<form method="POST" action="#">
    <label>Email: <input type="text" name="username" required></label><br>
    <label>Пароль: <input type="password" name="password" required></label><br>
    <button type="submit">Войти</button>
</form>

<?php require(PUB . 'views/footer.php') ?>
