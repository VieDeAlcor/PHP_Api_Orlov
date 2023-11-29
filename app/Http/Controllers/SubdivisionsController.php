<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubdivisionController extends Controller
{
    public function index()
    {
        $event = Subdivision::all();
        return $event;
    }

}
