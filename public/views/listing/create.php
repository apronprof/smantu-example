<?php require(PUB . 'views/header.php') ?>

<h2>Нове оголошення</h2>
<form method="POST" action="<?= APPURL ?>/listing/create">
    <label>Заголовок: <input type="text" name="house_name" required></label><br>
    <label>Індекс: <input type="text" name="postcode" step="0.1" required></label><br>
    <label>Кількість кімнат: <input type="number" name="rooms" required></label><br>
    <label>Тип житла: <input type="text" name="property_type" required></label><br>
    <label>Ціна: <input type="number" name="price" required></label><br>
    <button type="submit">Створити</button>
</form>

<?php require(PUB . 'views/footer.php') ?>
