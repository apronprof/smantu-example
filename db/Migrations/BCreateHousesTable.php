<?php

namespace DB\Migrations;

use Core\Classes\QueryBuilder;


class BCreateHousesTable
{
    public function migrate()
    {
        QueryBuilder::execute("CREATE TABLE `houses` (
          `id` int(11) NOT NULL AUTO_INCREMENT,
          `name` varchar(255) NOT NULL,
          `price` float NOT NULL,
          `property_type` varchar(1) NOT NULL,
          `postcode` varchar(10) NOT NULL,
          `num_rooms` int(11) NOT NULL,
          `user_id` int(11) NOT NULL,
          PRIMARY KEY (`id`),
          KEY `fk_user_id` (`user_id`),
          CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;");
    }

    public function rollback(){
        QueryBuilder::destroy('houses');
    }
}
