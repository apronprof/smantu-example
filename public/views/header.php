<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Сайт оголошень' ?></title>
    <link rel="stylesheet" href="<?= assets('styles.css')?>">
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="<?= APPURL ?>">Опубліковані оголошення</a></h1>
            <nav>
                <a href="<?= APPURL ?>">Головна</a>
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="/dashboard">Мої оголошення</a>
                    <a href="<?= $config['app']['url'] ?>logout">Вийти</a>
                <?php else: ?>
                    <a href="<?= APPURL ?>/login">Увійти</a>
                    <a href="<?= APPURL ?>/reg">Регістрація</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>
    <main class="container">

