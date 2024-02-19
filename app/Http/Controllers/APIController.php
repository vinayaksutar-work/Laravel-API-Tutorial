<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    function getData()
    {
        return ['name' => 'vinayak', 'email' => 'vinayaksutar.work@gmail.com', 'city' => 'kolhapur'];
    }
}
