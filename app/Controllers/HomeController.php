<?php

namespace App\Controllers;

use \App\Models\User;
use \App\Models\House;

class HomeController extends Controller
{
    public function index()
    {
        $stmt = House::prepare("
    SELECT
        houses.id AS house_id,
        houses.property_name,
        houses.price,
        houses.postcode,
        houses.num_rooms,
        houses.area,
        houses.floor,
        houses.user_id AS house_user_id,
        users.id AS user_id,
        users.username,
        users.name
    FROM houses
    INNER JOIN users ON houses.user_id = users.id
");

        $stmt->execute();
        $data = array_reverse($stmt->fetchAll(\PDO::FETCH_ASSOC));
       
        return $this->view('listing/index', ['data' => $data]);
    }
}
