<?php require(PUB . 'views/header.php') ?>

<h2>Оновити оголошення</h2>
<form method="POST" action="<?= APPURL ?>/listing/<?= $house['house_id']?>/edit">
    <label>Заголовок: <input type="text" value="<?= $house['property_name']?>" name="property_name" required></label><br>
    <label>Індекс: <input type="text" name="postcode" step="0.1" value="<?= $house['postcode']?>" required></label><br>
    <label>Кількість кімнат: <input type="number" name="rooms" value="<?= $house['num_rooms']?>" required></label><br>
    <label>Площа: <input type="number" name="area" value="<?= $house['area'] ?>"  required></label><br>
    <label>Поверх: <input type="number" name="floor" value="<?= $house['floor'] ?>" required></label><br>

    <label>Ціна: <input type="number" name="price" value="<?= $house['price']?>" required></label><br>
    <button type="submit">Оновити</button>
</form>

<?php require(PUB . 'views/footer.php') ?>
