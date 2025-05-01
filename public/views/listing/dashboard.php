<?php require(PUB . 'views/header.php') ?>
<h2>Last updates:</h2>
<?php foreach($data as $house): ?>
    <div class="listing">
        <h3><?= $house['property_name']?></h3>
        <p><strong>City:</strong> London</p>
        <p><strong>Ціна:</strong><?= $house['price']?></p>
        <p><strong>Тип житла:</strong><?= $house['property_type']?></p>
        <p><strong>Індекс:</strong><?= $house['postcode']?></p>
        <p><strong>Кількість кімнат:</strong><?= $house['num_rooms']?></p>
        <a href="<?= APPURL . "/listing/" . $house['house_id']?>">Більше</a>
    </div>
    <br />
<?php endforeach; ?>

<?php require(PUB . 'views/footer.php') ?>
