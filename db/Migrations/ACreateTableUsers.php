<?php

namespace DB\Migrations;

use Core\Classes\QueryBuilder;

class ACreateTableUsers
{
    public function migrate(){
        QueryBuilder::execute("CREATE TABLE users(id INT NOT NULL AUTO_INCREMENT, username VARCHAR(255) UNIQUE, name VARCHAR(255), password VARCHAR(255), PRIMARY KEY(id));");
    }

    public function rollback(){
        QueryBuilder::destroy('users');
    }
}
