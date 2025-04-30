<?= require(PUB . 'views/header.php') ?>

<h2>Новое объявление</h2>
<form method="POST" action="#">
    <label>Заголовок: <input type="text" name="title" required></label><br>
    <label>Город: <input type="text" name="city" required></label><br>
    <label>Адрес: <input type="text" name="address" required></label><br>
    <label>Площадь (м²): <input type="number" name="area" step="0.1" required></label><br>
    <label>Комнат: <input type="number" name="rooms" required></label><br>
    <label>Этаж: <input type="number" name="floor" required></label><br>
    <label>Цена (₽): <input type="number" name="price" required></label><br>
    <label>Телефон: <input type="text" name="phone" required></label><br>
    <button type="submit">Создать</button>
</form>

<?= require(PUB . 'views/footer.php') ?>
