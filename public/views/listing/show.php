<?= require(PUB . 'views/header.php') ?>
<h2>2-комнатная в центре</h2>

<ul>
    <h3>Appartements</h3>
    <p><strong>City:</strong> London</p>
    <p><strong>Cost:</strong> 12 500 000 </p>
    <p><strong>Estimated cost:</strong> 12 800 000 </p>
</ul>

<a href="edit.html">Редактировать</a>
<form method="POST" action="#">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Удалить</button>
</form>

<?= require(PUB . 'views/footer.php') ?>
