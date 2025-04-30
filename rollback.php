<?php

require('consts.php');
$config['db'] = require('config/db.php');

require(__DIR__ . '/vendor/autoload.php');

use Core\Classes\DB;
use Core\Classes\QueryBuilder;

foreach (array_reverse(glob(__DIR__ . '/db/Migrations/*.php')) as $file) {
    require_once $file;
}

$db = new DB($config['db']);

require(__DIR__ . '/core/migrate.function.php');

rollback();

?>
