<?php

require('consts.php');
$config['db'] = require('config/db.php');

require(__DIR__ . '/vendor/autoload.php');

use Core\Classes\DB;
use Core\Classes\QueryBuilder;

$files = scandir(__DIR__ . '/db/Migrations/');

foreach ($files as $file) {
    if($file != "." && $file != "..")
        require_once(__DIR__ . '/db/Migrations/' . $file);
}

$db = new DB($config['db']);

require(__DIR__ . '/core/migrate.function.php');

rollback();

?>
