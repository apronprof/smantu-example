<?php

namespace App\Controllers;

class ListingController extends Controller
{
    public function show($request)
    {
        
        return $this->view('listing/show');
    }
}
