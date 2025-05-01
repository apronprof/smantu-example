<?php

namespace App\Controllers;

use \App\Models\User;
use \App\Models\House;

class ListingController extends Controller
{
    public function show($request)
    {
        $stmt = House::prepare("
    SELECT
        houses.id AS house_id,
        houses.property_name,
        houses.price,
        houses.property_type,
        houses.postcode,
        houses.num_rooms,
        houses.user_id AS house_user_id,
        users.id AS user_id,
        users.username,
        users.name
    FROM houses
    INNER JOIN users ON houses.user_id = users.id
    WHERE houses.id = ?
");
        $stmt->execute([$request->getAttribute('id')]);
        $data = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $this->view('listing/show', ['house' => $data]);
    }

    public function dashboard($request){
        $user = $_SESSION['user'];
        $stmt = House::prepare("
            SELECT
                houses.id AS house_id,
                houses.property_name,
                houses.price,
                houses.property_type,
                houses.postcode,
                houses.num_rooms,
                houses.user_id AS house_user_id,
                users.id AS user_id,
                users.username,
                users.name
            FROM houses
            INNER JOIN users ON houses.user_id = users.id
            WHERE users.username = ?
        ");

        $stmt->execute([$user]);
        $data = array_reverse($stmt->fetchAll(\PDO::FETCH_ASSOC));
       
        return $this->view('listing/dashboard', ['data' => $data]);

    }

    public function createForm($request){
        return $this->view('listing/create');
    }

    public function editForm($request){
        return $this->view('listing/edit');
    }

}
