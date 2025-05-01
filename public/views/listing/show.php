<?php require(PUB . 'views/header.php') ?>
<h2><?= $house['property_name']?></h2>
<ul>
        <p><strong>City:</strong> London</p>
        <p><strong>Ціна:</strong><?= $house['price']?></p>
        <p><strong>Тип житла:</strong><?= $house['property_type']?></p>
        <p><strong>Індекс:</strong><?= $house['postcode']?></p>
        <p><strong>Кількість кімнат:</strong><?= $house['num_rooms']?></p>
        <p><strong><strong><a href="<?= APPURL . "/user/" . $house['username'] ?>"></strong><?= $house['username'] ?></a></p>

</ul>
<?php if(isset($_SESSION['user']) && $_SESSION['user'] == $house['username']): ?>
<a href="<?= APPURL . "/listing/" . $house['house_id']?>/edit">Редактировать</a>
<form method="POST" action="<?= APPURL . "/listing/" . $house['house_id'] . "/delete"?>">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Удалить</button>
</form>
<?php endif; ?>

<?php require(PUB . 'views/footer.php') ?>
