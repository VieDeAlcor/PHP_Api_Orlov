<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeOrderController extends Controller
{
    public function index()
    {
        $event = TypeOrder::all();
        return $event;
    }

}
