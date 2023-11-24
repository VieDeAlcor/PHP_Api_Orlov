<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeEducationController extends Controller
{
    public function index()
    {
        $event = TypeEducation::all();
        return $event;
    }

}
