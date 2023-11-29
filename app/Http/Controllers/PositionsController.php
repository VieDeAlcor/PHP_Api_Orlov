<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index()
    {
        $event = Position::all();
        return $event;
    }

}
