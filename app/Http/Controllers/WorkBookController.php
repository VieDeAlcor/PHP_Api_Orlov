<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkBookController extends Controller
{
    public function index()
    {
        $event = WorkBook::all();
        return $event;
    }

}