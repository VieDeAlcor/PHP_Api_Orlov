<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalCardController extends Controller
{
    public function index()
    {
        $event = PersonalCard::all();
        return $event;
    }

}
